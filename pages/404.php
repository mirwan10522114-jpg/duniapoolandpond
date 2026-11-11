<?php

declare(strict_types=1);

http_response_code(404);
$pageTitle = 'Halaman Tidak Ditemukan | Dunia Pool & Pond';
$activePage = '';

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<main class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-20 min-h-[60vh] flex items-center justify-center" id="main-content">
    <div class="max-w-lg w-full bg-bg-canvas border border-border-hairline rounded-2xl p-8 text-center shadow-sm space-y-5">
        <div class="w-16 h-16 mx-auto rounded-full bg-surface-blue flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-3xl">water_damage</span>
        </div>
        <div class="space-y-2">
            <span class="text-xs font-mono font-semibold text-primary uppercase tracking-wider">HTTP 404</span>
            <h1 class="text-headline-md-mobile font-headline-md text-text-body">Halaman Tidak Ditemukan</h1>
            <p class="text-body-default text-text-muted text-sm">
                Tautan yang Anda tuju tidak tersedia atau telah dipindahkan. Silakan kembali ke Beranda atau jelajahi Katalog Produk kami.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-3 justify-center pt-2">
            <a class="inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-action-hover text-on-primary font-action-button px-5 h-11 rounded-lg text-sm transition-colors" href="<?= e(app_url('/')) ?>">
                <span class="material-symbols-outlined text-base">home</span>
                <span>Kembali ke Beranda</span>
            </a>
            <a class="inline-flex items-center justify-center gap-2 bg-surface-secondary hover:bg-surface-blue text-text-body border border-border-hairline font-action-button px-5 h-11 rounded-lg text-sm transition-colors" href="<?= e(app_url('/produk')) ?>">
                <span>Lihat Katalog Produk</span>
            </a>
        </div>
    </div>
</main>
<?php
require __DIR__ . '/../includes/footer.php';

