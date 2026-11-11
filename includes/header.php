<?php

declare(strict_types=1);

$activePage = $activePage ?? '';

$navItems = [
    ['key' => 'beranda', 'label' => 'Beranda', 'href' => app_url('/')],
    ['key' => 'tentang', 'label' => 'Tentang Kami', 'href' => app_url('/#tentang-kami')],
    ['key' => 'layanan', 'label' => 'Layanan', 'href' => app_url('/layanan')],
    ['key' => 'proyek', 'label' => 'Proyek', 'href' => app_url('/#proyek')],
    ['key' => 'manajemen', 'label' => 'Manajemen', 'href' => app_url('/#manajemen-proyek')],
    ['key' => 'produk', 'label' => 'Produk', 'href' => app_url('/produk')],
    ['key' => 'kontak', 'label' => 'Kontak', 'href' => app_url('/#kontak')],
];
?>
<a class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-[60] focus:px-4 focus:py-2 focus:bg-primary-container focus:text-white focus:rounded-lg focus:text-sm focus:font-semibold focus:shadow-lg" href="#main-content">
    Lewati ke konten utama
</a>
<!-- TopNavBar -->
<header class="bg-bg-canvas/95 backdrop-blur-md dark:bg-inverse-surface border-b border-border-hairline dark:border-outline-variant shadow-[0_4px_20px_rgba(7,106,167,0.06)] dark:shadow-none docked full-width top-0 sticky z-50 transition-colors duration-150">
    <div class="flex justify-between items-center w-full mx-auto px-5 sm:px-8 lg:px-8 xl:px-12 2xl:px-16 gap-4 xl:gap-8 h-20">
        <!-- Brand Logo Anchor -->
        <a class="flex items-center gap-3 sm:gap-3.5 text-left shrink-0 group focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 rounded-lg py-1 pr-2" href="<?= e(app_url('/')) ?>">
            <img
                alt=""
                aria-hidden="true"
                class="h-9 sm:h-10 w-auto shrink-0 object-contain"
                height="38"
                src="<?= e(app_url('/images/brand/logo-dpp.png')) ?>"
                width="56"
            />
            <div class="flex flex-col">
                <span class="text-base sm:text-lg xl:text-xl font-headline-sm text-text-body dark:text-inverse-on-surface tracking-tight uppercase leading-tight font-extrabold whitespace-nowrap group-hover:text-primary transition-colors">Dunia Pool &amp; Pond</span>
                <span class="text-[11px] sm:text-xs font-label-ui text-text-muted tracking-wide font-medium whitespace-nowrap">The Pool Specialist — Sejak 1997</span>
            </div>
        </a>
        <!-- Desktop Navigation Links -->
        <nav aria-label="Navigasi Utama" class="relative hidden lg:flex items-center gap-x-3 xl:gap-x-7 2xl:gap-x-10" data-initial-active="<?= e($activePage) ?>" id="desktopNav">
            <?php foreach ($navItems as $item): ?>
                <?php $isActive = ($activePage === $item['key']); ?>
                <a
                    <?= $isActive ? 'aria-current="page"' : '' ?>
                    class="nav-link relative pb-1 font-action-button text-sm xl:text-[15px] whitespace-nowrap border-b-2 transition-colors duration-150 <?= $isActive
                        ? 'text-primary dark:text-inverse-primary border-primary dark:border-inverse-primary font-semibold'
                        : 'text-text-muted dark:text-outline-variant border-transparent hover:text-primary dark:hover:text-inverse-primary' ?>"
                    data-nav-key="<?= e($item['key']) ?>"
                    href="<?= e($item['href']) ?>"
                ><?= e($item['label']) ?></a>
            <?php endforeach; ?>
            <span
                aria-hidden="true"
                class="pointer-events-none absolute bottom-0 left-0 !ml-0 h-[2px] w-0 bg-primary dark:bg-inverse-primary rounded-full transition-all duration-200 ease-out opacity-0"
                id="navActiveSlider"
            ></span>
        </nav>
        <!-- Trailing Action & Mobile Toggle -->
        <div class="flex items-center shrink-0 space-x-3">
            <a class="hidden sm:inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-action-hover text-on-primary font-action-button text-sm px-4 xl:px-5 h-11 rounded-lg whitespace-nowrap transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 shadow-sm hover:shadow font-semibold" href="<?= e(app_url('/#konsultasi')) ?>">
                <span aria-hidden="true" class="material-symbols-outlined text-[18px]">chat</span>
                <span>Konsultasi Proyek</span>
            </a>
            <button aria-expanded="false" aria-label="Buka navigasi menu" class="lg:hidden p-2 text-text-body hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary-container rounded-lg" id="mobileMenuBtn" type="button">
                <span aria-hidden="true" class="material-symbols-outlined text-2xl">menu</span>
            </button>
        </div>
    </div>
    <!-- Mobile Nav Drawer -->
    <div class="hidden lg:hidden border-t border-border-hairline bg-bg-canvas px-margin py-4 space-y-2 shadow-lg" id="mobileMenu">
        <?php foreach ($navItems as $item): ?>
            <?php $isActive = ($activePage === $item['key']); ?>
            <a
                <?= $isActive ? 'aria-current="page"' : '' ?>
                class="mobile-nav-link block py-2 font-action-button pl-3 transition-colors <?= $isActive
                    ? 'text-primary border-l-4 border-primary font-semibold'
                    : 'text-text-body border-l-4 border-transparent hover:text-primary' ?>"
                data-nav-key="<?= e($item['key']) ?>"
                href="<?= e($item['href']) ?>"
            ><?= e($item['label']) ?></a>
        <?php endforeach; ?>
        <div class="pt-2 border-t border-border-hairline sm:hidden">
            <a class="inline-flex w-full items-center justify-center bg-primary-container hover:bg-action-hover text-on-primary font-action-button px-5 h-11 rounded-lg transition-colors duration-150 font-semibold" href="<?= e(app_url('/#konsultasi')) ?>">
                Konsultasi Proyek
            </a>
        </div>
    </div>
</header>

