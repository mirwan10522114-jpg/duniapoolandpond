<?php

declare(strict_types=1);

/**
 * Compute base URL path relative to DOCUMENT_ROOT so links work whether
 * served from root (php -S / vhost) or a Laragon subdirectory (/DPP%20BARU).
 */
function app_base_path(): string
{
    static $cached = null;
    if ($cached !== null) {
        return $cached;
    }

    $docRootRaw = $_SERVER['DOCUMENT_ROOT'] ?? '';
    $docRoot = $docRootRaw !== '' ? realpath($docRootRaw) : false;
    $appRoot = realpath(__DIR__ . '/..');

    if ($docRoot !== false && $appRoot !== false) {
        $docNorm = str_replace('\\', '/', rtrim($docRoot, '\\/'));
        $appNorm = str_replace('\\', '/', rtrim($appRoot, '\\/'));
        if (stripos($appNorm, $docNorm) === 0) {
            $rel = trim(substr($appNorm, strlen($docNorm)), '/');
            if ($rel !== '') {
                $segments = array_map('rawurlencode', explode('/', $rel));
                $cached = '/' . implode('/', $segments);
                return $cached;
            }
        }
    }

    $cached = '';
    return $cached;
}

/**
 * Build an application URL preserving base path and optional hash fragment.
 */
function app_url(string $path = '/'): string
{
    $base = app_base_path();
    if ($path === '' || $path === '/') {
        return $base !== '' ? $base . '/' : '/';
    }
    if ($path[0] === '#') {
        return ($base !== '' ? $base . '/' : '/') . $path;
    }
    $normalized = '/' . ltrim($path, '/');
    return $base . $normalized;
}

/**
 * Escape text safely for HTML output.
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Resolve a local image under images/ (checking .webp, .jpg, .jpeg, .png)
 * and fall back to $fallbackUrl when no local asset has been placed yet.
 */
function resolve_image(string $relativePathWithoutExt, string $fallbackUrl, bool $fallbackToFirstInDir = false): string
{
    $extensions = ['webp', 'jpg', 'jpeg', 'png', 'svg'];
    $rootDir = realpath(__DIR__ . '/..');
    if ($rootDir === false) {
        return $fallbackUrl;
    }

    $normalizedRel = trim(str_replace('\\', '/', $relativePathWithoutExt), '/');

    foreach ($extensions as $ext) {
        $candidate = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $normalizedRel . '.' . $ext);
        if (is_file($candidate)) {
            $hash = @md5_file($candidate);
            $ver = is_string($hash) ? ('?v=' . substr($hash, 0, 8)) : '';
            return app_url('/' . $normalizedRel . '.' . $ext) . $ver;
        }
    }

    if ($fallbackToFirstInDir) {
        $dirRel = dirname($normalizedRel);
        $dirAbs = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $dirRel);
        if (is_dir($dirAbs)) {
            $files = scandir($dirAbs);
            if ($files !== false) {
                sort($files);
                foreach ($files as $file) {
                    if ($file === '.' || $file === '..') {
                        continue;
                    }
                    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    $fullPath = $dirAbs . DIRECTORY_SEPARATOR . $file;
                    if (in_array($ext, $extensions, true) && is_file($fullPath)) {
                        $hash = @md5_file($fullPath);
                        $ver = is_string($hash) ? ('?v=' . substr($hash, 0, 8)) : '';
                        return app_url('/' . $dirRel . '/' . rawurlencode($file)) . $ver;
                    }
                }
            }
        }
    }

    return $fallbackUrl;
}

/**
 * Mencari file video lokal beserta MIME type & gambar poster yang tersedia tanpa YouTube.
 *
 * @return array{src:string, type:string, poster:string}
 */
function resolve_video(string $relativePathWithoutExt, string $dirFallback = 'video'): array
{
    $mimeMap = [
        'mp4'  => 'video/mp4',
        'webm' => 'video/webm',
        'm4v'  => 'video/mp4',
        'mov'  => 'video/quicktime',
    ];
    $rootDir = realpath(__DIR__ . '/..');
    $src = '';
    $type = '';

    if ($rootDir !== false) {
        $normalizedRel = trim(str_replace('\\', '/', $relativePathWithoutExt), '/');
        foreach ($mimeMap as $ext => $mime) {
            $candidate = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $normalizedRel . '.' . $ext);
            if (is_file($candidate)) {
                $src = app_url('/' . $normalizedRel . '.' . $ext);
                $type = $mime;
                break;
            }
        }

        if ($src === '' && $dirFallback !== '') {
            $dirRel = trim(str_replace('\\', '/', $dirFallback), '/');
            $dirAbs = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $dirRel);
            if (is_dir($dirAbs)) {
                $files = scandir($dirAbs);
                if ($files !== false) {
                    foreach ($mimeMap as $targetExt => $mime) {
                        foreach ($files as $file) {
                            if ($file === '.' || $file === '..') {
                                continue;
                            }
                            if (strtolower(pathinfo($file, PATHINFO_EXTENSION)) === $targetExt && is_file($dirAbs . DIRECTORY_SEPARATOR . $file)) {
                                $src = app_url('/' . $dirRel . '/' . rawurlencode($file));
                                $type = $mime;
                                break 2;
                            }
                        }
                    }
                }
            }
        }
    }

    $posterBase = $relativePathWithoutExt;
    if ($src !== '') {
        $parsedPath = parse_url($src, PHP_URL_PATH);
        if (is_string($parsedPath)) {
            $baseRel = trim(rawurldecode($parsedPath), '/');
            $dotPos = strrpos($baseRel, '.');
            if ($dotPos !== false) {
                $posterBase = substr($baseRel, 0, $dotPos);
            }
        }
    }

    $poster = resolve_image($posterBase . '-poster', resolve_image('images/hero/kolam-utama', ''));

    return [
        'src'    => $src,
        'type'   => $type,
        'poster' => $poster,
    ];
}

/**
 * Render crisp geometric or aquatic corporate SVG backdrop motifs.
 * Kept purely decorative (aria-hidden, pointer-events-none) behind section content.
 */
function render_section_decor(string $variant, string $positionClass = ''): string
{
    $baseClass = trim('pointer-events-none select-none absolute ' . $positionClass);

    switch ($variant) {
        case 'dot-wave':
            $dots = '';
            $rows = 8;
            $cols = 24;
            for ($r = 0; $r < $rows; $r++) {
                $rowRatio = $r / ($rows - 1);
                for ($c = 0; $c < $cols; $c++) {
                    $colRatio = $c / ($cols - 1);
                    $x = round(16 + $colRatio * 488, 1);
                    $waveOffset = sin($colRatio * 4.4 + $r * 0.35) * (20 + $r * 2.5);
                    $y = round(42 + $r * 23 + $waveOffset - $colRatio * 28, 1);
                    $fade = sin($colRatio * M_PI) * (0.35 + (1 - $rowRatio) * 0.65);
                    $opacity = round(max(0.05, min(0.32, $fade * 0.34)), 2);
                    $radius = round(1.1 + (1 - $rowRatio) * 1.4, 2);
                    $dots .= "<circle cx=\"{$x}\" cy=\"{$y}\" r=\"{$radius}\" fill=\"#076aa7\" fill-opacity=\"{$opacity}\" />";
                }
            }
            return "<svg aria-hidden=\"true\" class=\"{$baseClass}\" width=\"520\" height=\"260\" viewBox=\"0 0 520 260\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">{$dots}</svg>";

        case 'wave-ribbons':
            return "<svg aria-hidden=\"true\" class=\"{$baseClass}\" width=\"640\" height=\"280\" viewBox=\"0 0 640 280\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">"
                . '<path d="M0 220 C140 120, 290 250, 440 155 C525 100, 585 60, 640 30 L640 280 L0 280 Z" fill="#076aa7" fill-opacity="0.06" />'
                . '<path d="M0 245 C160 155, 310 265, 470 175 C545 130, 600 95, 640 70 L640 280 L0 280 Z" fill="#005182" fill-opacity="0.06" />'
                . '<path d="M20 210 C150 110, 300 235, 455 140 C535 90, 595 45, 640 20" stroke="#076aa7" stroke-opacity="0.16" stroke-width="1.5" />'
                . '<path d="M60 245 C190 150, 340 255, 495 165 C565 125, 610 90, 640 65" stroke="#076aa7" stroke-opacity="0.11" stroke-width="1" />'
                . '</svg>';

        case 'mosaic-tiles':
            return "<svg aria-hidden=\"true\" class=\"{$baseClass}\" width=\"320\" height=\"320\" viewBox=\"0 0 320 320\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">"
                . '<rect x="190" y="20" width="52" height="52" rx="8" fill="#076aa7" fill-opacity="0.08" />'
                . '<rect x="252" y="20" width="48" height="48" rx="8" fill="#076aa7" fill-opacity="0.13" />'
                . '<rect x="130" y="82" width="50" height="50" rx="8" stroke="#076aa7" stroke-opacity="0.16" stroke-width="1.5" />'
                . '<rect x="190" y="82" width="52" height="52" rx="8" fill="#63b7fe" fill-opacity="0.14" />'
                . '<rect x="252" y="78" width="48" height="48" rx="8" fill="#005182" fill-opacity="0.09" />'
                . '<rect x="190" y="144" width="52" height="52" rx="8" stroke="#076aa7" stroke-opacity="0.12" stroke-width="1.5" />'
                . '<rect x="252" y="136" width="48" height="48" rx="8" fill="#076aa7" fill-opacity="0.07" />'
                . '<rect x="252" y="194" width="48" height="48" rx="8" fill="#63b7fe" fill-opacity="0.10" />'
                . '</svg>';

        case 'hex-mesh':
            $hex = '';
            $positions = [
                [36, 30, 0.14], [90, 30, 0.10], [144, 30, 0.06],
                [63, 76, 0.16], [117, 76, 0.12], [171, 76, 0.07],
                [36, 122, 0.11], [90, 122, 0.15], [144, 122, 0.09],
                [63, 168, 0.07], [117, 168, 0.10],
            ];
            foreach ($positions as [$cx, $cy, $op]) {
                $pts = [];
                for ($a = 0; $a < 6; $a++) {
                    $ang = deg2rad(60 * $a - 30);
                    $pts[] = round($cx + 26 * cos($ang), 1) . ',' . round($cy + 26 * sin($ang), 1);
                }
                $poly = implode(' ', $pts);
                $hex .= "<polygon points=\"{$poly}\" stroke=\"#076aa7\" stroke-opacity=\"{$op}\" stroke-width=\"1.25\" fill=\"none\" />";
            }
            return "<svg aria-hidden=\"true\" class=\"{$baseClass}\" width=\"220\" height=\"210\" viewBox=\"0 0 220 210\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">{$hex}</svg>";

        case 'banner-waves':
            return "<svg aria-hidden=\"true\" class=\"{$baseClass}\" width=\"460\" height=\"280\" viewBox=\"0 0 460 280\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">"
                . '<path d="M460 20 C350 45, 310 155, 190 195 C105 225, 45 250, 0 280 L460 280 Z" fill="#FFFFFF" fill-opacity="0.08" />'
                . '<path d="M460 95 C375 115, 335 190, 235 230 C165 258, 105 270, 55 280 L460 280 Z" fill="#CFE5FF" fill-opacity="0.12" />'
                . '<path d="M460 12 C345 40, 295 148, 175 192 C95 222, 35 245, 0 272" stroke="#FFFFFF" stroke-opacity="0.22" stroke-width="1.5" />'
                . '<path d="M460 65 C370 92, 325 178, 220 218 C145 246, 85 262, 30 280" stroke="#CFE5FF" stroke-opacity="0.20" stroke-width="1" />'
                . '</svg>';

        default:
            return '';
    }
}

/**
 * Mengembalikan daftar 15 merek resmi peralatan & material beserta path logo lokalnya jika tersedia.
 *
 * @return array<int, array{name:string, slug:string, img:string, width:int, height:int}>
 */
function get_brand_catalog(): array
{
    $items = [
        ['name' => 'Hayward',      'slug' => 'hayward'],
        ['name' => 'Pentair',      'slug' => 'pentair'],
        ['name' => 'Emaux',        'slug' => 'emaux'],
        ['name' => 'AstralPool',   'slug' => 'astral-pool'],
        ['name' => 'DAB',          'slug' => 'dab'],
        ['name' => 'Waterco',      'slug' => 'waterco'],
        ['name' => 'Venezia',      'slug' => 'venezia'],
        ['name' => 'York',         'slug' => 'york'],
        ['name' => 'Boost',        'slug' => 'boost'],
        ['name' => 'Viper Pool',   'slug' => 'viper-pool'],
        ['name' => 'Roman',        'slug' => 'roman'],
        ['name' => 'Roman Granit', 'slug' => 'roman-granit'],
        ['name' => 'Atena Tiles',  'slug' => 'atena'],
        ['name' => 'Mass',         'slug' => 'mass'],
        ['name' => 'Venus Tiles',  'slug' => 'venus'],
    ];

    $rootDir = dirname(__DIR__);
    $catalog = [];

    foreach ($items as $item) {
        $resolved = resolve_image('images/brands/' . $item['slug'], '');
        $width = 0;
        $height = 0;

        if ($resolved !== '') {
            $filePath = $rootDir . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, ltrim($resolved, '/'));
            $size = is_file($filePath) ? @getimagesize($filePath) : false;
            if (is_array($size)) {
                $width = (int) $size[0];
                $height = (int) $size[1];
            }
        }

        $catalog[] = [
            'name'   => $item['name'],
            'slug'   => $item['slug'],
            'img'    => $resolved,
            'width'  => $width,
            'height' => $height,
        ];
    }

    return $catalog;
}

/**
 * Merender grid 15 logo brand pengadaan secara seragam untuk halaman beranda maupun katalog produk.
 *
 * @param array<int, array{name:string, slug:string, img:string, width:int, height:int}>|null $brands
 */
function render_brand_logo_grid(?array $brands = null): string
{
    $brands = $brands ?? get_brand_catalog();
    $cards = '';

    foreach ($brands as $brand) {
        $name = e($brand['name']);
        if ($brand['img'] !== '') {
            $dimAttrs = ($brand['width'] > 0 && $brand['height'] > 0)
                ? ' width="' . $brand['width'] . '" height="' . $brand['height'] . '"'
                : '';
            $media = '<img src="' . e($brand['img']) . '" alt="Logo ' . $name . '"' . $dimAttrs
                . ' loading="lazy" decoding="async"'
                . ' class="max-h-12 max-w-[150px] w-auto h-auto object-contain transition-transform duration-150 group-hover:scale-[1.03]">';
        } else {
            $wordmark = e(strtoupper($brand['name']));
            $media = '<span class="font-headline-sm font-extrabold tracking-[0.12em] text-[#004A7C] text-[17px] leading-none select-none">'
                . $wordmark
                . '</span>';
        }

        $cards .= '<div class="group bg-white border border-[#DCE7F2] hover:border-primary-container/50 rounded-xl px-3.5 py-3.5 flex flex-col items-center justify-between gap-2.5 min-h-[116px] shadow-sm transition-all duration-150">'
            . '<div class="h-14 w-full flex items-center justify-center px-1 overflow-hidden">'
            . $media
            . '</div>'
            . '<span class="w-full pt-2 border-t border-[#EDF3F8] text-xs font-medium text-[#41566C] text-center leading-tight">'
            . $name
            . '</span>'
            . '</div>';
    }

    return '<div class="bg-[#F4F9FD] border border-[#E1ECF6] rounded-xl p-3 sm:p-4">'
        . '<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">'
        . $cards
        . '</div>'
        . '</div>';
}

/**
 * Mengembalikan daftar 11 kategori utama produk Dunia Pool & Pond beserta metadata SEO & aset foto putih HD.
 *
 * @return array<int, array<string, mixed>>
 */
function get_product_categories(): array
{
    return [
        [
            'num'        => '01',
            'slug'       => 'pompa',
            'featured'   => true,
            'icon'       => 'mode_fan',
            'name_id'    => 'Pompa Kolam Renang',
            'name_en'    => 'Swimming Pool Pump',
            'examples'   => ['Pompa Sirkulasi', 'Variable Speed Pump', 'Booster Pump'],
            'brands'     => 'AstralPool, Hayward, Pentair, Emaux, DAB, Venezia, York',
            'short_desc' => 'Pompa sirkulasi hemat daya, variable speed pump, dan booster pump untuk debit filtrasi stabil kolam residensial maupun publik.',
            'href'       => app_url('/produk#pompa'),
            'cta'        => 'Lihat Kategori Pompa',
            'img'        => resolve_image('images/produk/kat-01-pompa-kolam', ''),
        ],
        [
            'num'        => '02',
            'slug'       => 'filter',
            'featured'   => true,
            'icon'       => 'filter_alt',
            'name_id'    => 'Filter Kolam Renang',
            'name_en'    => 'Swimming Pool Filter',
            'examples'   => ['Sand Filter', 'Cartridge Filter', 'Multiport Valve', 'Media Filter'],
            'brands'     => 'AstralPool, Emaux, Hayward, Pentair, Waterco, Boost',
            'short_desc' => 'Tabung sand filter fiberglass, cartridge filter presisi, multiport valve, pasir silika, dan media filtrasi kaca aktif.',
            'href'       => app_url('/produk#filter'),
            'cta'        => 'Lihat Kategori Filter',
            'img'        => resolve_image('images/produk/kat-02-filter-kolam', ''),
        ],
        [
            'num'        => '03',
            'slug'       => 'cleaner',
            'featured'   => true,
            'icon'       => 'cleaning_services',
            'name_id'    => 'Peralatan Pembersih',
            'name_en'    => 'Pool Cleaning Equipment',
            'examples'   => ['Vacuum Head', 'Vacuum Hose', 'Telescopic Pole', 'Leaf Skimmer', 'Pool Brush'],
            'brands'     => 'Hayward, Emaux, AstralPool, Pentair, Boost',
            'short_desc' => 'Vacuum head, vacuum hose, telescopic pole, leaf skimmer, pool brush dinding alga, hingga unit robotic pool cleaner.',
            'href'       => app_url('/produk#cleaner'),
            'cta'        => 'Lihat Alat Pembersih',
            'img'        => resolve_image('images/produk/kat-03-peralatan-pembersih', ''),
        ],
        [
            'num'        => '04',
            'slug'       => 'chemical',
            'featured'   => true,
            'icon'       => 'science',
            'name_id'    => 'Bahan Kimia Kolam',
            'name_en'    => 'Pool Chemical',
            'examples'   => ['Chlorine', 'Kaporit', 'pH Up', 'pH Down', 'Algaecide', 'Clarifier'],
            'brands'     => 'Viper Pool & Standar Pengolahan Air Resmi',
            'short_desc' => 'Chlorine tablet & granular, kaporit sanitasi, penyeimbang pH up/down, anti-lumut algaecide, serta clarifier penjernih air.',
            'href'       => app_url('/produk#chemical'),
            'cta'        => 'Lihat Bahan Kimia',
            'img'        => resolve_image('images/produk/kat-04-bahan-kimia', ''),
        ],
        [
            'num'        => '05',
            'slug'       => 'fittings',
            'featured'   => true,
            'icon'       => 'plumbing',
            'name_id'    => 'Fitting & Plumbing',
            'name_en'    => 'Pool Fittings & Plumbing',
            'examples'   => ['Inlet Fitting', 'Main Drain', 'Vacuum Fitting', 'Skimmer Box', 'Pipa PVC', 'Valve'],
            'brands'     => 'Hayward, Emaux, AstralPool, Boost',
            'short_desc' => 'Return inlet fitting, main drain cover, vacuum fitting, skimmer box ABS tebal, pipa PVC tekanan, serta ball & check valve.',
            'href'       => app_url('/produk#fittings'),
            'cta'        => 'Lihat Fitting & Pipa',
            'img'        => resolve_image('images/produk/kat-05-fitting-plumbing', ''),
        ],
        [
            'num'        => '06',
            'slug'       => 'lighting',
            'featured'   => true,
            'icon'       => 'lightbulb',
            'name_id'    => 'Lampu Kolam Renang',
            'name_en'    => 'Pool Lighting',
            'examples'   => ['Underwater LED', 'Lampu RGB', 'Transformer', 'Controller Lampu'],
            'brands'     => 'Emaux, AstralPool, Hayward, Boost',
            'short_desc' => 'Lampu underwater LED IP68 warm white & RGB multicolor lengkap dengan trafo step-down 12V AC dan controller.',
            'href'       => app_url('/produk#lighting'),
            'cta'        => 'Lihat Lampu Kolam',
            'img'        => resolve_image('images/produk/kat-06-lampu-kolam', ''),
        ],
        [
            'num'        => '07',
            'slug'       => 'treatment',
            'featured'   => false,
            'icon'       => 'water_ec',
            'name_id'    => 'Pengolahan Air Kolam',
            'name_en'    => 'Pool Water Treatment',
            'examples'   => ['Salt Chlorinator', 'Chemical Dosing Pump', 'UV Sterilizer', 'Ozone Generator'],
            'brands'     => 'Hayward, Pentair, AstralPool, Emaux',
            'short_desc' => 'Sistem sterilisasi otomatis salt chlorinator, chemical dosing pump, UV sterilizer, dan ozone generator untuk kejernihan air higienis.',
            'href'       => app_url('/produk#treatment'),
            'cta'        => 'Lihat Pengolahan Air',
            'img'        => resolve_image('images/produk/kat-07-pengolahan-air', ''),
        ],
        [
            'num'        => '08',
            'slug'       => 'accessories',
            'featured'   => false,
            'icon'       => 'pool',
            'name_id'    => 'Aksesori Kolam',
            'name_en'    => 'Pool Accessories',
            'examples'   => ['Tangga Kolam', 'Handrail', 'Overflow Grating', 'Shower Kolam'],
            'brands'     => 'Emaux, AstralPool, Hayward, Boost',
            'short_desc' => 'Perlengkapan tepi & akses masuk kolam: tangga kolam stainless AISI 304/316, handrail, overflow grating gutter, dan shower bilas.',
            'href'       => app_url('/produk#accessories'),
            'cta'        => 'Lihat Aksesori Kolam',
            'img'        => resolve_image('images/produk/kat-08-aksesori-kolam', ''),
        ],
        [
            'num'        => '09',
            'slug'       => 'heating',
            'featured'   => false,
            'icon'       => 'thermostat',
            'name_id'    => 'Pemanas & Otomasi Kolam',
            'name_en'    => 'Pool Heating & Automation',
            'examples'   => ['Heat Pump', 'Pool Heater', 'Timer', 'Automation Controller'],
            'brands'     => 'Hayward, Pentair, AstralPool, Emaux',
            'short_desc' => 'Unit heat pump hemat listrik, pool heater air hangat, timer operasional pompa otomatis, dan panel automation controller.',
            'href'       => app_url('/produk#heating'),
            'cta'        => 'Lihat Pemanas & Otomasi',
            'img'        => resolve_image('images/produk/kat-09-pemanas-otomasi', ''),
        ],
        [
            'num'        => '10',
            'slug'       => 'finishing',
            'featured'   => false,
            'icon'       => 'grid_view',
            'name_id'    => 'Finishing & Waterproofing',
            'name_en'    => 'Pool Finishing & Waterproofing',
            'examples'   => ['Keramik Kolam', 'Mosaic Tile', 'Waterproofing', 'Tile Adhesive', 'Grout'],
            'brands'     => 'Roman, Roman Granit, Atena Tiles, Mass (Kuda Laut Mas), Venus Tiles',
            'short_desc' => 'Keramik kolam & mosaic porselen rendah serap air lengkap dengan pelapis waterproofing, semen perekat tile adhesive, dan nat grout.',
            'href'       => app_url('/produk#finishing'),
            'cta'        => 'Lihat Material Finishing',
            'img'        => resolve_image('images/produk/kat-10-finishing-waterproofing', ''),
        ],
        [
            'num'        => '11',
            'slug'       => 'spareparts',
            'featured'   => false,
            'icon'       => 'build',
            'name_id'    => 'Suku Cadang Kolam',
            'name_en'    => 'Pool Spare Parts',
            'examples'   => ['Impeller', 'Mechanical Seal', 'O-Ring', 'Gasket', 'Spare Part Pompa & Filter'],
            'brands'     => 'Hayward, Pentair, AstralPool, Emaux, DAB, Waterco, Venezia, York',
            'short_desc' => 'Suku cadang mekanikal resmi untuk perawatan pompa & filter: impeller, mechanical seal, O-ring, gasket, handle multiport, dan pressure gauge.',
            'href'       => app_url('/produk#spareparts'),
            'cta'        => 'Lihat Suku Cadang',
            'img'        => resolve_image('images/produk/kat-11-suku-cadang', ''),
        ],
    ];
}

/**
 * Mengembalikan struktur item katalog produk lengkap (11 kategori) sesuai standar brosur & katalog WhatsApp Business.
 *
 * @return array<int, array<string, mixed>>
 */
function get_product_catalog(): array
{
    $categories = get_product_categories();
    $catMap = [];
    foreach ($categories as $c) {
        $catMap[$c['slug']] = $c;
    }

    return [
        [
            'num'          => '01',
            'category'     => 'pompa',
            'category_id'  => $catMap['pompa']['name_id'],
            'category_en'  => $catMap['pompa']['name_en'],
            'subcategories'=> ['Pompa Sirkulasi', 'Variable Speed Pump', 'Booster Pump'],
            'title'        => 'Pompa Sirkulasi, Variable Speed & Booster Kolam',
            'title_en'     => 'Swimming Pool Circulation, Variable Speed & Booster Pump',
            'brands'       => 'AstralPool, Hayward, Pentair, Emaux, DAB, Venezia, York',
            'img'          => $catMap['pompa']['img'],
            'alt'          => 'Pompa Kolam Renang (Swimming Pool Pump) berlatar belakang putih',
            'desc'         => 'Unit pompa hidrolik self-priming dengan efisiensi motor tinggi, ketahanan terhadap klorin, dan performa stabil untuk resirkulasi filtrasi kolam residensial hingga komersial.',
            'specs'        => [
                'Varian Daya: 0.5 HP – 3.0+ HP (1-Phase 220V & 3-Phase 380V)',
                'Material Bodi: Termoplastik reinforced kaca dengan keranjang pre-filter',
                'Koneksi & Proteksi: Union 1.5"–2", Mechanical Seal Carbon/Ceramic, IP55',
            ],
            'price_label'  => 'Menyesuaikan kapasitas HP & tipe (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga & ketersediaan kategori Pompa Kolam Renang (Sirkulasi / Variable Speed / Booster Pump).',
        ],
        [
            'num'          => '02',
            'category'     => 'filter',
            'category_id'  => $catMap['filter']['name_id'],
            'category_en'  => $catMap['filter']['name_en'],
            'subcategories'=> ['Sand Filter', 'Cartridge Filter', 'Multiport Valve', 'Media Filter'],
            'title'        => 'Tabung Sand Filter, Cartridge, Multiport Valve & Media',
            'title_en'     => 'Fiberglass Sand Filter, Cartridge Filter & Silica/Glass Media',
            'brands'       => 'AstralPool, Emaux, Hayward, Pentair, Waterco, Boost',
            'img'          => $catMap['filter']['img'],
            'alt'          => 'Filter Kolam Renang Fiberglass Top-Mount (Swimming Pool Filter) latar putih',
            'desc'         => 'Sistem penyaringan mekanis berkekuatan tekan tinggi berbahan komposit fiberglass maupun elemen cartridge, dipadukan media pasir silika murni atau media kaca aktif untuk air jernih kristal.',
            'specs'        => [
                'Ukuran Tabung: Diameter 16" – 36" (Top-Mount & Side-Mount)',
                'Kelengkapan: Multiport Valve 6-Fungsi, Sight Glass, & Pressure Gauge',
                'Media Pengisian: Pasir Silika (Silica Sand) & Activated Glass Media',
            ],
            'price_label'  => 'Menyesuaikan diameter & merek (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Filter Kolam Renang (Sand Filter / Cartridge Filter / Media Silika).',
        ],
        [
            'num'          => '03',
            'category'     => 'cleaner',
            'category_id'  => $catMap['cleaner']['name_id'],
            'category_en'  => $catMap['cleaner']['name_en'],
            'subcategories'=> ['Vacuum Head', 'Vacuum Hose', 'Telescopic Pole', 'Leaf Skimmer', 'Pool Brush'],
            'title'        => 'Set Pembersih Manual & Robotic Pool Cleaner',
            'title_en'     => 'Pool Cleaning Equipment (Vacuum Set, Pole, Skimmer & Robotic)',
            'brands'       => 'Hayward, Emaux, AstralPool, Pentair, Boost',
            'img'          => $catMap['cleaner']['img'],
            'alt'          => 'Peralatan Pembersih Kolam Renang Lengkap latar putih',
            'desc'         => 'Rangkaian peralatan pemeliharaan kebersihan fisik dasar, dinding, dan permukaan air kolam—mulai dari set peralatan manual hingga robot pembersih otomatis bertenaga listrik.',
            'specs'        => [
                'Set Manual: Vacuum Head 8–12 Roda, Selang Spiral 9m–15m, Stik Teleskopik',
                'Aksesoris Jaring & Sikat: Heavy-Duty Leaf Skimmer & Pool Wall Brush',
                'Opsi Otomatis: Robotic Pool Cleaner untuk pembersihan dasar & dinding',
            ],
            'price_label'  => 'Tersedia satuan maupun paket lengkap (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Peralatan Pembersih Kolam (Vacuum Set / Stik).',
        ],
        [
            'num'          => '04',
            'category'     => 'chemical',
            'category_id'  => $catMap['chemical']['name_id'],
            'category_en'  => $catMap['chemical']['name_en'],
            'subcategories'=> ['Chlorine', 'Kaporit', 'pH Up', 'pH Down', 'Algaecide', 'Clarifier'],
            'title'        => 'Bahan Kimia Kolam: Chlorine, Kaporit, pH & Penjernih Air',
            'title_en'     => 'Pool Chemical (TCCA Chlorine, pH Adjuster, Algaecide & Clarifier)',
            'brands'       => 'Viper Pool & Suplai Kimia Pengolahan Air Resmi',
            'img'          => $catMap['chemical']['img'],
            'alt'          => 'Bahan Kimia dan Penjernih Air Kolam Renang (Pool Chemical) latar putih',
            'desc'         => 'Paket bahan kimia perawatan air untuk menjaga kadar klorin bebas, keseimbangan pH ideal (7.2–7.6), mencegah pertumbuhan lumut hijau, serta mengendapkan kekeruhan air kolam.',
            'specs'        => [
                'Sanitasi: Tablet TCCA 90%, Klorin Granular 65%/90%, & Kaporit',
                'Penyeimbang Air: Soda Ash (pH Up), HCL/Dry Acid (pH Down)',
                'Pemulihan & Penjernihan: Algaecide, PAC, & Clarifier Penjernih Air',
            ],
            'price_label'  => 'Tersedia kemasan eceran, galon, & pail/drum (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Bahan Kimia Kolam (Chlorine / Kaporit / pH Up-Down / Clarifier).',
        ],
        [
            'num'          => '05',
            'category'     => 'fittings',
            'category_id'  => $catMap['fittings']['name_id'],
            'category_en'  => $catMap['fittings']['name_en'],
            'subcategories'=> ['Inlet Fitting', 'Main Drain', 'Vacuum Fitting', 'Skimmer Box', 'Pipa PVC', 'Valve'],
            'title'        => 'Skimmer Box, Return Inlet, Main Drain & Plumbing Valve',
            'title_en'     => 'Pool Fittings & Plumbing (ABS Inlets, Drains, PVC Pipes & Valves)',
            'brands'       => 'Hayward, Emaux, AstralPool, Boost',
            'img'          => $catMap['fittings']['img'],
            'alt'          => 'Fitting dan Perlengkapan Plumbing Kolam Renang ABS latar putih',
            'desc'         => 'Komponen sirkulasi yang ditanam pada struktur dinding & lantai kolam serta jalur pemipaan ruang mesin berbahan ABS UV-stabilized dan PVC bertekanan untuk aliran hidrolika presisi.',
            'specs'        => [
                'Wall & Floor Fittings: Return Inlet Directional, Vacuum Point, Main Drain Anti-Vortex',
                'Skimmer System: Heavy-Duty ABS Skimmer Box dengan keranjang penyaring daun',
                'Jalur Plumbing: Pipa PVC Kelas AW / Tekanan, True-Union Ball Valve & Check Valve',
            ],
            'price_label'  => 'Menyesuaikan tipe ukuran inci & kebutuhan titik (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Fitting & Plumbing Kolam (Skimmer Box / Inlet / Main Drain / Valve).',
        ],
        [
            'num'          => '06',
            'category'     => 'lighting',
            'category_id'  => $catMap['lighting']['name_id'],
            'category_en'  => $catMap['lighting']['name_en'],
            'subcategories'=> ['Underwater LED', 'Lampu RGB', 'Transformer', 'Controller Lampu'],
            'title'        => 'Lampu Underwater LED, Lampu RGB & Trafo 12V',
            'title_en'     => 'Pool Lighting (IP68 Underwater LED, RGB Light & Step-Down Transformer)',
            'brands'       => 'Emaux, AstralPool, Hayward, Boost',
            'img'          => $catMap['lighting']['img'],
            'alt'          => 'Lampu Bawah Air Kolam Renang Stainless LED IP68 latar putih',
            'desc'         => 'Penerangan bawah air tahan tekanan dengan standar kedap air IP68 penuh dan suplai tegangan rendah 12V AC demi keamanan total perenang di malam hari.',
            'specs'        => [
                'Varian Cahaya: Warm White, Cool White, & RGB Multicolor Sinkronisasi',
                'Pemasangan & Material: Surface Mounted / Niche, Stainless Steel 316L & Resin',
                'Kelengkapan Daya: Waterproof Step-Down Transformer 12V AC & Controller RGB',
            ],
            'price_label'  => 'Menyesuaikan watt & tipe instalasi (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Lampu Kolam Renang (Underwater LED / RGB / Transformer 12V).',
        ],
        [
            'num'          => '07',
            'category'     => 'treatment',
            'category_id'  => $catMap['treatment']['name_id'],
            'category_en'  => $catMap['treatment']['name_en'],
            'subcategories'=> ['Salt Chlorinator', 'Chemical Dosing Pump', 'UV Sterilizer', 'Ozone Generator'],
            'title'        => 'Salt Chlorinator, Dosing Pump, UV Sterilizer & Ozone',
            'title_en'     => 'Pool Water Treatment (Salt Chlorinator, Dosing Pump, UV & Ozone)',
            'brands'       => 'Hayward, Pentair, AstralPool, Emaux',
            'img'          => $catMap['treatment']['img'],
            'alt'          => 'Peralatan Pengolahan Air Otomatis Salt Chlorinator dan UV Sterilizer latar putih',
            'desc'         => 'Sistem disinfeksi dan pengolahan air otomatis untuk mengurangi bau klorin menyengat, mengotomatiskan takaran kimia, dan membasmi mikroorganisme tahan klorin secara kontinu.',
            'specs'        => [
                'Elektrolisis Garam: Salt Chlorinator dengan sel titanium & fitur self-cleaning',
                'Takaran Presisi: Peristaltic/Diaphragm Chemical Dosing Pump & sensor ORP/pH',
                'Sterilisasi Sekunder: Chamber UV-C Stainless & Ozone Generator komersial',
            ],
            'price_label'  => 'Menyesuaikan kubikasi air m³ kolam (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga unit Pengolahan Air Kolam (Salt Chlorinator / Dosing Pump / UV Sterilizer).',
        ],
        [
            'num'          => '08',
            'category'     => 'accessories',
            'category_id'  => $catMap['accessories']['name_id'],
            'category_en'  => $catMap['accessories']['name_en'],
            'subcategories'=> ['Tangga Kolam', 'Handrail', 'Overflow Grating', 'Shower Kolam'],
            'title'        => 'Tangga Stainless, Handrail, Overflow Grating & Shower',
            'title_en'     => 'Pool Accessories (Stainless Ladder, Handrail, Gutter Grating & Shower)',
            'brands'       => 'Emaux, AstralPool, Hayward, Boost',
            'img'          => $catMap['accessories']['img'],
            'alt'          => 'Aksesori Kolam Renang Tangga Stainless Handrail dan Overflow Grating latar putih',
            'desc'         => 'Kelengkapan arsitektural area basah dan tepi kolam untuk akses keluar-masuk perenang yang ergonomis serta pengamanan saluran limpasan overflow keliling.',
            'specs'        => [
                'Tangga & Pegangan: Pipa Stainless Steel AISI 304/316 anti-karat (2–5 trap)',
                'Overflow Gutter: ABS Overflow Grating 1–3 pin anti-slip & tahan UV matahari',
                'Area Bilas: Poolside Outdoor Shower Stainless Steel dengan mixer & foot wash',
            ],
            'price_label'  => 'Menyesuaikan ukuran & ketebalan material (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Aksesori Kolam (Tangga Stainless / Handrail / Overflow Grating / Shower).',
        ],
        [
            'num'          => '09',
            'category'     => 'heating',
            'category_id'  => $catMap['heating']['name_id'],
            'category_en'  => $catMap['heating']['name_en'],
            'subcategories'=> ['Heat Pump', 'Pool Heater', 'Timer', 'Automation Controller'],
            'title'        => 'Heat Pump Pemanas Kolam, Timer & Automation Controller',
            'title_en'     => 'Pool Heating & Automation (Inverter Heat Pump, Heater & Timer Panel)',
            'brands'       => 'Hayward, Pentair, AstralPool, Emaux, Panel PUIL',
            'img'          => $catMap['heating']['img'],
            'alt'          => 'Pemanas Air Kolam Inverter Heat Pump dan Panel Kontrol Timer Otomasi latar putih',
            'desc'         => 'Solusi pengendalian suhu air kolam yang nyaman sepanjang tahun menggunakan teknologi heat exchanger titanium serta pengatur jadwal operasional mesin secara otomatis.',
            'specs'        => [
                'Unit Pemanas: Inverter Heat Pump berkoefisien COP tinggi & Gas/Electric Heater',
                'Panel Otomasi: Timer sirkulasi pompa, kontaktor beban, ELCB pengaman arus bocor',
                'Kontrol Terintegrasi: Automation controller pengatur pompa, pemanas, & lampu',
            ],
            'price_label'  => 'Menyesuaikan target kenaikan suhu & daya listrik (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga Pemanas & Otomasi Kolam (Heat Pump / Heater / Panel Timer).',
        ],
        [
            'num'          => '10',
            'category'     => 'finishing',
            'category_id'  => $catMap['finishing']['name_id'],
            'category_en'  => $catMap['finishing']['name_en'],
            'subcategories'=> ['Keramik Kolam', 'Mosaic Tile', 'Waterproofing', 'Tile Adhesive', 'Grout'],
            'title'        => 'Mosaic Tile, Keramik Kolam, Waterproofing & Tile Adhesive',
            'title_en'     => 'Pool Finishing & Waterproofing (Porcelain Mosaic, Membrane, Adhesive & Grout)',
            'brands'       => 'Roman, Roman Granit, Atena Tiles, Mass (Kuda Laut Mas), Venus Tiles',
            'img'          => $catMap['finishing']['img'],
            'alt'          => 'Material Finishing Kolam Renang Mosaic Tile Biru, Waterproofing Membrane & Semen Perekat latar putih',
            'desc'         => 'Material pelapis struktur kedap air (waterproofing) sekaligus finishing permukaan dinding dan dasar kolam yang tahan paparan air ber-klorin dan tekanan hidrostatis penuh.',
            'specs'        => [
                'Pelapis Struktur: Semen & membran waterproofing 2-komponen tahan tekanan air',
                'Ubin Finishing: Mosaic porselen (<0.5% water absorption) & keramik kolam khusus',
                'Perekat & Nat: Semen perekat tile adhesive area terendam & grout anti-asam/klorin',
            ],
            'price_label'  => 'Menyesuaikan luasan m² & motif ubin (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya ingin tanya harga & ketersediaan Material Finishing & Waterproofing (Mosaic / Keramik / Waterproofing / Perekat).',
        ],
        [
            'num'          => '11',
            'category'     => 'spareparts',
            'category_id'  => $catMap['spareparts']['name_id'],
            'category_en'  => $catMap['spareparts']['name_en'],
            'subcategories'=> ['Impeller', 'Mechanical Seal', 'O-Ring', 'Gasket', 'Spare Part Pompa & Filter'],
            'title'        => 'Impeller, Mechanical Seal, O-Ring, Gasket & Valve Parts',
            'title_en'     => 'Pool Spare Parts (Pump Impeller, Shaft Seal, O-Ring, Multiport & Filter Parts)',
            'brands'       => 'Hayward, Pentair, AstralPool, Emaux, DAB, Waterco, Venezia, York',
            'img'          => $catMap['spareparts']['img'],
            'alt'          => 'Suku Cadang Pompa dan Filter Kolam Renang Impeller Seal O-Ring latar putih',
            'desc'         => 'Komponen suku cadang orisinil pengganti untuk perbaikan cepat pompa sirkulasi dan tabung filter tanpa harus mengganti keseluruhan unit mesin utama.',
            'specs'        => [
                'Suku Cadang Pompa: Impeller Noryl/Bronze, Mechanical Seal, Strainer Basket, Tutup Pompa',
                'Seal & Karet: Lid O-Ring, Union O-Ring, Gasket Spider Valve anti-klorin',
                'Komponen Filter: Handle Multiport Valve, Lateral Arm Penahan Pasir, & Pressure Gauge',
            ],
            'price_label'  => 'Menyesuaikan merek, seri, & nomor part unit (Penawaran Resmi)',
            'wa_text'      => 'Halo Dunia Pool & Pond, saya sedang mencari Suku Cadang Kolam (Impeller / Mechanical Seal / O-Ring / Multiport Part).',
        ],
    ];
}



