<?php

declare(strict_types=1);

require_once __DIR__ . '/includes/helpers.php';

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$rawPath = parse_url($requestUri, PHP_URL_PATH);
$decodedPath = rawurldecode(is_string($rawPath) ? $rawPath : '/');
$decodedBase = rawurldecode(app_base_path());

if ($decodedBase !== '' && stripos($decodedPath, $decodedBase) === 0) {
    $decodedPath = substr($decodedPath, strlen($decodedBase));
}

$route = '/' . trim($decodedPath, '/');
if ($route === '/index.php') {
    $route = '/';
}

// Clean redirects for hash-anchored sections and sub-category aliases
$redirects = [
    '/tentang-kami' => '/#tentang-kami',
    '/proyek' => '/#proyek',
    '/manajemen-proyek' => '/#manajemen-proyek',
    '/kontak' => '/#kontak',
    '/konsultasi' => '/#konsultasi',
    '/produk/pompa-sirkulasi' => '/produk#pompa',
    '/produk/pompa-kolam' => '/produk#pompa',
    '/produk/sand-filter' => '/produk#filter',
    '/produk/skimmer-box' => '/produk#skimmer',
    '/produk/fitting-kolam' => '/produk#fitting',
    '/layanan/konstruksi-kolam-renang' => '/#layanan',
    '/layanan/desain-konsultasi' => '/#layanan',
    '/layanan/perawatan-kolam' => '/#layanan',
    '/layanan/pengolahan-air' => '/#layanan',
];

if (isset($redirects[$route])) {
    header('Location: ' . app_url($redirects[$route]), true, 302);
    exit;
}

switch ($route) {
    case '/':
    case '/beranda':
        require __DIR__ . '/pages/beranda.php';
        break;

    case '/produk':
        require __DIR__ . '/pages/produk.php';
        break;

    case '/layanan':
    case '/layanan/sistem-sirkulasi-filtrasi':
        require __DIR__ . '/pages/layanan.php';
        break;

    case '/kebijakan-privasi':
        $legalType = 'privacy';
        require __DIR__ . '/pages/legal.php';
        break;

    case '/ketentuan-layanan':
        $legalType = 'terms';
        require __DIR__ . '/pages/legal.php';
        break;

    default:
        require __DIR__ . '/pages/404.php';
        break;
}

