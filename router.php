<?php

declare(strict_types=1);

/**
 * Router script for PHP built-in development server:
 *   php -S 127.0.0.1:8080 -t . router.php
 */
$uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$decodedPath = rawurldecode(is_string($uriPath) ? $uriPath : '/');
$targetFile = realpath(__DIR__ . $decodedPath);
$appRoot = realpath(__DIR__);

if ($targetFile !== false && $appRoot !== false && is_file($targetFile) && stripos($targetFile, $appRoot) === 0) {
    $ext = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $videoMimeMap = [
        'mp4'  => 'video/mp4',
        'm4v'  => 'video/mp4',
        'webm' => 'video/webm',
        'mov'  => 'video/quicktime',
    ];

    if (isset($videoMimeMap[$ext])) {
        $size = filesize($targetFile);
        if ($size === false) {
            http_response_code(500);
            exit;
        }
        $mime = $videoMimeMap[$ext];
        header('Content-Type: ' . $mime);
        header('Accept-Ranges: bytes');
        header('Cache-Control: public, max-age=3600');

        $start = 0;
        $end = $size - 1;
        $rangeHeader = $_SERVER['HTTP_RANGE'] ?? '';

        if ($rangeHeader !== '' && preg_match('/bytes=(\d*)-(\d*)/i', $rangeHeader, $m)) {
            if ($m[1] !== '') {
                $start = (int) $m[1];
                if ($m[2] !== '') {
                    $end = min((int) $m[2], $size - 1);
                }
            } elseif ($m[2] !== '') {
                $start = max(0, $size - (int) $m[2]);
            }

            if ($start > $end || $start >= $size) {
                header('HTTP/1.1 416 Range Not Satisfiable');
                header("Content-Range: bytes */{$size}");
                exit;
            }

            header('HTTP/1.1 206 Partial Content');
            header("Content-Range: bytes {$start}-{$end}/{$size}");
        }

        $length = $end - $start + 1;
        header("Content-Length: {$length}");

        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'HEAD') {
            exit;
        }

        $fp = fopen($targetFile, 'rb');
        if ($fp !== false) {
            fseek($fp, $start);
            $remaining = $length;
            while ($remaining > 0 && !feof($fp)) {
                $chunkSize = min(65536, $remaining);
                $buffer = fread($fp, $chunkSize);
                if ($buffer === false || $buffer === '') {
                    break;
                }
                echo $buffer;
                flush();
                $remaining -= strlen($buffer);
            }
            fclose($fp);
        }
        exit;
    }

    // Allow serving static asset files directly, block direct access to internal PHP partials
    $safeStaticExts = ['png', 'jpg', 'jpeg', 'webp', 'gif', 'svg', 'css', 'js', 'ico', 'woff', 'woff2', 'txt', 'md'];
    if (in_array($ext, $safeStaticExts, true)) {
        return false;
    }
}

require __DIR__ . '/index.php';
