<?php

declare(strict_types=1);

$pageTitle = 'Katalog 11 Kategori Peralatan & Material Kolam Renang | Dunia Pool & Pond';
$activePage = 'produk';
$bodyClass = 'bg-[#f1f6fb] text-text-body font-body-default antialiased selection:bg-surface-container selection:text-primary min-h-screen flex flex-col';

$productCategories = get_product_categories();
$products = get_product_catalog();
$brands = get_brand_catalog();

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<main class="flex-grow w-full max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-space-xl" id="main-content">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="Breadcrumb" class="flex items-center text-label-ui font-label-ui text-text-muted mb-space-md">
        <a class="hover:text-primary transition-colors duration-150" href="<?= e(app_url('/')) ?>">Beranda</a>
        <span class="mx-2 text-border-control">/</span>
        <span aria-current="page" class="text-text-body font-medium">Katalog Produk</span>
    </nav>

    <!-- Page Title & Architectural Header -->
    <div class="relative overflow-hidden mb-space-lg bg-gradient-to-r from-white via-[#F4F9FE] to-[#E9F4FC] p-6 md:p-8 rounded-xl border border-[#d5e2ec] border-l-4 border-l-primary-container shadow-sm">
        <?= render_section_decor('dot-wave', 'right-0 top-0 opacity-75 z-0') ?>
        <div class="relative z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-white border border-border-hairline rounded text-xs font-label-ui text-primary mb-3 shadow-sm">
                <span class="material-symbols-outlined text-base">verified</span>
                <span>11 Kategori Utama • Katalog Brosur &amp; Pengadaan Resmi</span>
            </div>
            <h1 class="text-headline-md-mobile md:text-headline-md font-headline-md text-text-body tracking-tight">
                Katalog Peralatan, Kimia &amp; Material Kolam Renang
            </h1>
            <p class="text-body-lead-mobile md:text-body-lead font-body-lead text-text-muted mt-2 max-w-3xl">
                Struktur 11 kategori pengadaan lengkap mulai dari pompa sirkulasi, filter, peralatan pembersih, kimia air, fitting plumbing, lampu LED, pengolahan air, aksesori, pemanas &amp; otomasi, finishing, hingga suku cadang resmi.
            </p>
        </div>
    </div>

    <!-- Disclaimer Katalog & Catatan Teknis -->
    <div class="bg-gradient-to-r from-surface-secondary to-[#eaf2f8] border border-border-hairline rounded-xl p-space-md md:p-space-lg mb-space-lg flex items-start gap-4 shadow-sm">
        <div class="w-10 h-10 rounded-lg bg-surface-blue flex items-center justify-center text-primary flex-shrink-0 border border-border-hairline mt-0.5">
            <span class="material-symbols-outlined">info</span>
        </div>
        <div class="text-body-default font-body-default text-text-body">
            <p class="text-sm leading-relaxed text-text-muted">
                <strong class="text-text-body font-semibold">Catatan Ketersediaan Katalog:</strong> Daftar kategori dan contoh produk di bawah merupakan struktur standar katalog pengadaan Dunia Pool &amp; Pond (bukan konfirmasi ketersediaan stok seluruh tipe secara otomatis). Hubungi tim teknis kami via WhatsApp untuk pengecekan stok terbaru, rekomendasi kapasitas sesuai kubikasi kolam, dan penawaran harga resmi.
            </p>
        </div>
    </div>

    <!-- Direktori 11 Kategori Utama (Navigasi Cepat Indonesia & Subkategori) -->
    <section aria-label="Daftar 11 Kategori Utama Produk" class="mb-space-lg bg-white border border-[#d5e2ec] rounded-xl p-5 md:p-6 shadow-sm">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4 pb-3 border-b border-border-hairline">
            <div>
                <h2 class="text-base md:text-lg font-headline-sm font-bold text-text-body">
                    Struktur 11 Kategori Produk Utama
                </h2>
                <p class="text-xs text-text-muted mt-0.5">Klik salah satu kategori untuk langsung menyaring daftar produk di bawah.</p>
            </div>
            <span class="text-[11px] font-mono font-semibold uppercase tracking-wider text-primary bg-surface-blue px-2.5 py-1 rounded self-start sm:self-auto">
                11 Kategori Terstruktur
            </span>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2.5">
            <?php foreach ($productCategories as $cat): ?>
                <button
                    class="directory-cat-btn text-left p-3 rounded-lg border border-[#E1ECF6] bg-[#F8FBFE] hover:bg-surface-blue hover:border-primary-container/50 transition-all duration-150 flex items-start gap-2.5 group focus:outline-none focus:ring-2 focus:ring-primary-container"
                    data-cat-target="<?= e($cat['slug']) ?>"
                    type="button"
                >
                    <span class="font-mono text-[11px] font-bold text-primary-container bg-white border border-[#DCE7F2] px-1.5 py-0.5 rounded shrink-0 mt-0.5 group-hover:bg-primary-container group-hover:text-white group-hover:border-primary-container transition-colors">
                        <?= e($cat['num']) ?>
                    </span>
                    <div class="min-w-0">
                        <span class="block text-xs font-bold text-text-body group-hover:text-primary leading-snug truncate">
                            <?= e($cat['name_id']) ?>
                        </span>
                        <span class="block text-[11px] text-text-muted leading-tight mt-0.5 line-clamp-1">
                            <?= e(implode(', ', array_slice($cat['examples'], 0, 3))) ?>
                        </span>
                    </div>
                </button>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Catalog Toolbar -->
    <section aria-label="Toolbar Penyaringan Produk" class="mb-space-xl bg-white border border-[#d5e2ec] shadow-sm rounded-xl p-space-md md:p-space-lg relative overflow-hidden">
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-4">
            <div class="relative flex-1 max-w-lg">
                <label class="sr-only" for="catalog-search">Cari produk, merek, atau subkategori</label>
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-text-muted">
                    <span class="material-symbols-outlined text-xl">search</span>
                </div>
                <input class="w-full h-12 pl-11 pr-4 bg-bg-canvas border border-border-control rounded-lg text-body-default text-text-body placeholder:text-text-muted focus:border-primary focus:ring-2 focus:ring-primary focus:outline-none transition-colors duration-150" id="catalog-search" placeholder="Cari produk, subkategori, atau merek (cth: variable speed, sand filter, kaporit, impeller)..." type="text" />
            </div>
            <div class="flex flex-wrap items-center gap-3">
                <div class="relative min-w-[250px]">
                    <label class="sr-only" for="category-select">Pilih Kategori Produk</label>
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-text-muted">
                        <span class="material-symbols-outlined text-xl">filter_list</span>
                    </div>
                    <select class="w-full h-12 pl-10 pr-9 bg-bg-canvas border border-border-control rounded-lg text-body-default text-text-body focus:border-primary focus:ring-2 focus:ring-primary focus:outline-none transition-colors duration-150 cursor-pointer appearance-none" id="category-select">
                        <option value="all">Semua Kategori (11)</option>
                        <?php foreach ($productCategories as $cat): ?>
                            <option value="<?= e($cat['slug']) ?>"><?= e($cat['num']) ?>. <?= e($cat['name_id']) ?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-text-muted">
                        <span class="material-symbols-outlined text-xl">arrow_drop_down</span>
                    </div>
                </div>
                <button class="h-12 px-4 border border-border-hairline rounded-lg text-text-body font-action-button hover:bg-surface-secondary text-sm flex items-center gap-2 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container" id="reset-filter-btn" type="button">
                    <span class="material-symbols-outlined text-lg">restart_alt</span>
                    <span>Reset Filter</span>
                </button>
            </div>
        </div>

        <!-- Quick Filter Pills (11 Kategori Bahasa Indonesia) -->
        <div class="pt-4 border-t border-border-hairline flex flex-wrap items-center gap-2">
            <span class="text-xs font-label-ui text-text-muted mr-1">Filter Kategori:</span>
            <button class="category-pill active h-8 px-3.5 bg-primary-container text-white rounded-lg text-xs font-label-ui font-semibold border border-primary-container transition-colors duration-150" data-filter="all" type="button">Semua (<?= count($products) ?>)</button>
            <?php foreach ($productCategories as $cat): ?>
                <button class="category-pill h-8 px-3 bg-surface-secondary text-text-body rounded-lg text-xs font-label-ui border border-border-hairline hover:bg-surface-blue transition-colors duration-150" data-filter="<?= e($cat['slug']) ?>" type="button">
                    <?= e($cat['name_id']) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Result Counter Banner -->
        <div class="mt-4 pt-3 border-t border-border-hairline flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs text-text-muted font-label-ui">
            <span class="flex items-center gap-1.5 text-text-body font-medium" id="result-counter">
                <span class="w-2 h-2 rounded-full bg-feedback-success inline-block"></span>
                Menampilkan <?= count($products) ?> kelompok produk dari 11 kategori utama
            </span>
            <span class="text-text-muted">Tersedia untuk Pengadaan Proyek, Brosur &amp; Katalog WhatsApp</span>
        </div>
    </section>

    <!-- Grid Produk Katalog Lengkap -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-space-xl" id="product-grid">
        <?php foreach ($products as $prod): ?>
            <?php
            $waUrl = 'https://wa.me/6282118075560?text=' . rawurlencode($prod['wa_text']);
            $searchIndex = strtolower(implode(' ', [
                $prod['title'],
                $prod['title_en'],
                $prod['category_id'],
                $prod['category_en'],
                $prod['brands'],
                implode(' ', $prod['subcategories']),
                $prod['desc'],
                implode(' ', $prod['specs']),
            ]));
            ?>
            <article
                class="product-card bg-white border border-border-hairline hover:border-primary-container/60 hover:shadow-md rounded-xl flex flex-col justify-between overflow-hidden transition-all duration-150"
                data-category="<?= e($prod['category']) ?>"
                data-search="<?= e($searchIndex) ?>"
                id="<?= e($prod['category']) ?>"
            >
                <div>
                    <!-- Foto Produk HD dengan Background Putih -->
                    <div class="relative w-full aspect-[4/3] bg-white border-b border-border-hairline p-1 flex items-center justify-center overflow-hidden group">
                        <img
                            alt="<?= e($prod['alt']) ?>"
                            class="w-full h-full object-contain group-hover:scale-[1.03] transition-transform duration-300"
                            loading="lazy"
                            src="<?= e($prod['img']) ?>"
                        />
                        <div class="absolute top-3 left-3 flex items-center gap-1.5">
                            <span class="inline-flex items-center gap-1.5 bg-[#EAF4FB]/95 border border-primary/20 px-2.5 py-1 rounded-lg text-[11px] font-bold text-primary-container shadow-sm">
                                <span class="font-mono"><?= e($prod['num']) ?></span>
                                <span><?= e($prod['category_id']) ?></span>
                            </span>
                        </div>
                    </div>

                    <div class="p-6 space-y-4">
                        <!-- Nama Produk & Istilah Teknis Bahasa Inggris (SEO) -->
                        <div>
                            <p class="text-[11px] font-mono font-semibold uppercase tracking-wider text-primary mb-1">
                                <?= e($prod['category_en']) ?>
                            </p>
                            <h2 class="text-headline-sm font-headline-sm font-bold text-text-body text-[19px] leading-snug tracking-tight">
                                <?= e($prod['title']) ?>
                            </h2>
                            <p class="text-xs text-text-muted mt-1 italic">
                                <?= e($prod['title_en']) ?>
                            </p>
                        </div>

                        <!-- Merek -->
                        <div class="flex items-start gap-2 text-xs bg-[#F5F9FD] border border-[#E1ECF6] rounded-lg px-3 py-2">
                            <span aria-hidden="true" class="material-symbols-outlined text-base text-primary-container shrink-0 mt-0.5">verified</span>
                            <div>
                                <span class="font-bold text-text-body">Merek Tersedia:</span>
                                <span class="text-text-muted ml-1"><?= e($prod['brands']) ?></span>
                            </div>
                        </div>

                        <!-- Subkategori Contoh Produk -->
                        <div class="flex flex-wrap gap-1.5">
                            <?php foreach ($prod['subcategories'] as $sub): ?>
                                <span class="px-2 py-0.5 rounded bg-white border border-[#D5E2EC] text-[11px] font-medium text-text-body">
                                    <?= e($sub) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Deskripsi & Keunggulan -->
                        <p class="text-body-default font-body-default text-text-muted text-sm leading-relaxed">
                            <?= e($prod['desc']) ?>
                        </p>

                        <!-- Spesifikasi Teknis Ringkas -->
                        <div class="bg-[#F8FBFE] border border-[#E1ECF6] rounded-lg p-3.5">
                            <h3 class="text-[11px] font-bold uppercase tracking-wider text-primary-container mb-2">
                                Spesifikasi Teknis
                            </h3>
                            <ul class="space-y-1.5 text-xs text-text-body/90">
                                <?php foreach ($prod['specs'] as $spec): ?>
                                    <li class="flex items-start gap-1.5">
                                        <span aria-hidden="true" class="text-primary-container font-bold">•</span>
                                        <span><?= e($spec) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Harga (Opsional) & Tombol Tanya Harga via WhatsApp -->
                <div class="p-6 pt-0 flex flex-col gap-2.5">
                    <div class="flex items-center justify-between text-xs border-t border-border-hairline pt-3 pb-1 text-text-muted">
                        <span class="font-semibold text-text-body">Estimasi Harga:</span>
                        <span class="text-right"><?= e($prod['price_label']) ?></span>
                    </div>
                    <a
                        class="w-full h-11 bg-primary-container hover:bg-action-hover text-white font-action-button font-semibold text-sm rounded-lg flex items-center justify-center gap-2 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container shadow-sm"
                        href="<?= e($waUrl) ?>"
                        rel="noopener noreferrer"
                        target="_blank"
                    >
                        <span aria-hidden="true" class="material-symbols-outlined text-lg">chat</span>
                        <span>Tanya Harga via WhatsApp</span>
                    </a>
                    <button
                        class="w-full h-10 bg-transparent border border-border-hairline hover:bg-surface-secondary text-text-body font-action-button text-xs font-medium rounded-lg flex items-center justify-center gap-1.5 transition-colors duration-150 open-spec-btn"
                        data-brands="<?= e($prod['brands']) ?>"
                        data-category="<?= e($prod['category_id'] . ' (' . $prod['category_en'] . ')') ?>"
                        data-specs="<?= e(implode(' | ', $prod['specs'])) ?>"
                        data-title="<?= e($prod['title']) ?>"
                        data-wa-url="<?= e($waUrl) ?>"
                        type="button"
                    >
                        <span aria-hidden="true" class="material-symbols-outlined text-base">straighten</span>
                        <span>Ringkasan Spesifikasi</span>
                    </button>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <!-- Empty State Container -->
    <div class="hidden py-16 px-6 text-center bg-bg-canvas border border-border-hairline rounded-xl mb-space-xl" id="empty-state">
        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-surface-blue flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-3xl">search_off</span>
        </div>
        <h3 class="text-headline-sm font-headline-sm text-text-body mb-2">Produk Tidak Ditemukan</h3>
        <p class="text-body-default font-body-default text-text-muted max-w-md mx-auto mb-6">
            Tidak ada produk atau subkategori yang sesuai dengan kata kunci pencarian Anda. Reset filter atau konsultasikan kebutuhan spesifik dengan teknisi kami.
        </p>
        <button class="inline-flex items-center gap-2 h-11 px-5 bg-primary-container text-white font-action-button text-sm font-semibold rounded-lg hover:bg-action-hover transition-colors duration-150" onclick="resetAllFilters()" type="button">
            <span class="material-symbols-outlined text-base">refresh</span>
            <span>Tampilkan Semua 11 Kategori</span>
        </button>
    </div>

    <!-- Banner Bantuan Teknis -->
    <section aria-label="Bantuan Teknis dan Suku Cadang" class="relative overflow-hidden bg-primary-container text-white border border-primary/20 rounded-xl p-6 md:p-10 mb-space-xl shadow-sm">
        <?= render_section_decor('banner-waves', 'right-0 bottom-0 z-0') ?>
        <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div class="max-w-2xl">
                <div class="inline-flex items-center gap-2 text-xs font-mono font-semibold uppercase tracking-wider text-primary-fixed mb-3">
                    <span>Pengadaan Khusus &amp; Konsultasi Proyek</span>
                </div>
                <h3 class="text-headline-sm font-headline-sm text-white text-2xl tracking-tight mb-2">
                    Butuh Penawaran Resmi atau Rekomendasi Tipe Unit?
                </h3>
                <p class="text-body-default font-body-default text-white/90 leading-relaxed">
                    Tim Dunia Pool &amp; Pond siap menghitung kapasitas pompa, sand filter, dosing air, hingga kebutuhan keramik mosaic dan suku cadang sesuai ukuran kolam Anda.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a class="h-[50px] px-6 bg-white hover:bg-surface-blue text-primary font-action-button font-semibold text-sm rounded-lg inline-flex items-center gap-2.5 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary-container whitespace-nowrap" href="https://wa.me/6282118075560?text=Halo%20Tim%20Dunia%20Pool%20%26%20Pond%2C%20saya%20ingin%20meminta%20daftar%20harga%20dan%20konsultasi%20katalog%20peralatan%20kolam%20renang." rel="noopener noreferrer" target="_blank">
                    <span aria-hidden="true" class="material-symbols-outlined text-lg">perm_phone_msg</span>
                    <span>Minta Penawaran Harga via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Daftar Merek Resmi -->
    <section aria-label="Daftar 15 Merek Peralatan dan Material Pengadaan" class="border border-[#d5e2ec] rounded-xl p-6 md:p-8 bg-white shadow-sm mb-space-xl">
        <div class="mb-5">
            <h4 class="text-headline-sm-mobile md:text-headline-sm font-headline-sm font-bold text-text-body">
                Daftar 15 Merek Peralatan &amp; Material Pengadaan
            </h4>
            <p class="text-xs text-text-muted font-body-default mt-1">
                Dunia Pool &amp; Pond bermitra dengan distributor resmi untuk memastikan keaslian komponen dan garansi unit mekanis.
            </p>
        </div>
        <?= render_brand_logo_grid($brands) ?>
        <p class="text-xs text-text-muted font-label-ui mt-4">
            *Pilihan dan ketersediaan menyesuaikan produk. Hubungi kami untuk konfirmasi ketersediaan tipe dan suku cadang.
        </p>
    </section>
</main>

<!-- Technical Spec Modal -->
<dialog class="p-0 rounded-xl backdrop:bg-inverse-surface/60 border border-border-hairline max-w-lg w-full shadow-2xl" id="specModal">
    <div class="p-6 bg-white text-text-body">
        <div class="flex items-start justify-between pb-3 border-b border-border-hairline gap-4">
            <div>
                <span class="text-[11px] font-mono font-semibold uppercase tracking-wider text-primary-container block" id="modalCategory">Kategori</span>
                <h4 class="text-headline-sm font-headline-sm text-lg font-bold text-text-body mt-0.5" id="modalTitle">Spesifikasi Unit</h4>
            </div>
            <button class="text-text-muted hover:text-text-body p-1 rounded-lg shrink-0" onclick="document.getElementById('specModal').close()" type="button">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="py-4 space-y-3 text-sm text-text-muted font-body-default leading-relaxed">
            <div class="bg-[#F5F9FD] border border-[#E1ECF6] rounded-lg px-3 py-2 text-xs">
                <strong class="text-text-body">Merek:</strong> <span id="modalBrands"></span>
            </div>
            <ul class="space-y-2 text-xs text-text-body" id="modalSpecsList"></ul>
        </div>
        <div class="pt-3 border-t border-border-hairline flex flex-wrap justify-end gap-2.5">
            <button class="px-4 py-2 text-xs font-semibold rounded-lg border border-border-hairline hover:bg-surface-secondary text-text-body" onclick="document.getElementById('specModal').close()" type="button">
                Tutup
            </button>
            <a class="px-4 py-2 text-xs font-semibold rounded-lg bg-primary-container text-white hover:bg-action-hover inline-flex items-center gap-1.5" href="https://wa.me/6282118075560" id="modalWaBtn" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-sm">chat</span>
                <span>Tanya Harga via WhatsApp</span>
            </a>
        </div>
    </div>
</dialog>

<?php
$pageScripts = <<<'HTML'
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('catalog-search');
        const categorySelect = document.getElementById('category-select');
        const pills = document.querySelectorAll('.category-pill');
        const directoryBtns = document.querySelectorAll('.directory-cat-btn');
        const cards = document.querySelectorAll('.product-card');
        const counterText = document.getElementById('result-counter');
        const emptyState = document.getElementById('empty-state');
        const resetBtn = document.getElementById('reset-filter-btn');

        const legacyMap = {
            'lampu': 'lighting',
            'skimmer': 'fittings',
            'fitting': 'fittings',
            'skimmer-fitting': 'fittings',
            'mosaic': 'finishing',
            'lane': 'accessories'
        };

        function setActivePill(filterVal) {
            pills.forEach(p => {
                const isMatch = p.getAttribute('data-filter') === filterVal;
                p.classList.toggle('bg-primary-container', isMatch);
                p.classList.toggle('text-white', isMatch);
                p.classList.toggle('border-primary-container', isMatch);
                p.classList.toggle('font-semibold', isMatch);
                p.classList.toggle('active', isMatch);

                p.classList.toggle('bg-surface-secondary', !isMatch);
                p.classList.toggle('text-text-body', !isMatch);
                p.classList.toggle('border-border-hairline', !isMatch);
            });

            directoryBtns.forEach(btn => {
                const isMatch = btn.getAttribute('data-cat-target') === filterVal;
                btn.classList.toggle('bg-surface-blue', isMatch);
                btn.classList.toggle('border-primary-container', isMatch);
                btn.classList.toggle('bg-[#F8FBFE]', !isMatch);
                btn.classList.toggle('border-[#E1ECF6]', !isMatch);
            });
        }

        function filterProducts() {
            const query = searchInput.value.toLowerCase().trim();
            const selectedCat = categorySelect.value;
            let visibleCount = 0;

            cards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                const searchBlob = card.getAttribute('data-search') || '';
                const catMatch = (selectedCat === 'all') || (cardCategory === selectedCat);
                const textMatch = query === '' || searchBlob.includes(query);

                if (catMatch && textMatch) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            if (visibleCount > 0) {
                emptyState.classList.add('hidden');
                counterText.innerHTML = `<span class="w-2 h-2 rounded-full bg-feedback-success inline-block"></span> Menampilkan ${visibleCount} dari ${cards.length} kategori produk utama`;
            } else {
                emptyState.classList.remove('hidden');
                counterText.innerHTML = `<span class="w-2 h-2 rounded-full bg-feedback-error inline-block"></span> Tidak ada produk atau subkategori yang sesuai kriteria`;
            }
        }

        function applyCategoryFilter(rawFilterVal, shouldScroll = false) {
            const filterVal = legacyMap[rawFilterVal] || rawFilterVal;
            const validOption = [...categorySelect.options].some(o => o.value === filterVal);
            const targetVal = validOption ? filterVal : 'all';

            categorySelect.value = targetVal;
            setActivePill(targetVal);
            filterProducts();

            if (shouldScroll && targetVal !== 'all') {
                const grid = document.getElementById('product-grid');
                if (grid) {
                    const y = grid.getBoundingClientRect().top + window.scrollY - 105;
                    window.scrollTo({ top: Math.max(0, y), behavior: 'smooth' });
                }
            }
        }

        searchInput.addEventListener('input', filterProducts);

        categorySelect.addEventListener('change', () => {
            setActivePill(categorySelect.value);
            filterProducts();
        });

        pills.forEach(pill => {
            pill.addEventListener('click', () => {
                applyCategoryFilter(pill.getAttribute('data-filter'));
            });
        });

        directoryBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                applyCategoryFilter(btn.getAttribute('data-cat-target'), true);
            });
        });

        window.resetAllFilters = function () {
            searchInput.value = '';
            applyCategoryFilter('all');
            if (window.location.hash) {
                history.replaceState(null, '', window.location.pathname + window.location.search);
            }
        };

        resetBtn.addEventListener('click', window.resetAllFilters);

        function applyHashFilter() {
            const paramCat = new URLSearchParams(window.location.search).get('kategori') || '';
            const hash = (window.location.hash.replace('#', '') || paramCat).toLowerCase();
            if (!hash) return;
            applyCategoryFilter(hash, true);
        }

        document.querySelectorAll('.open-spec-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const modal = document.getElementById('specModal');
                const specsList = document.getElementById('modalSpecsList');

                document.getElementById('modalCategory').textContent = btn.getAttribute('data-category') || '';
                document.getElementById('modalTitle').textContent = btn.getAttribute('data-title') || '';
                document.getElementById('modalBrands').textContent = btn.getAttribute('data-brands') || '';
                document.getElementById('modalWaBtn').href = btn.getAttribute('data-wa-url') || 'https://wa.me/6282118075560';

                const specsRaw = (btn.getAttribute('data-specs') || '').split(' | ').filter(Boolean);
                specsList.innerHTML = '';
                specsRaw.forEach(line => {
                    const li = document.createElement('li');
                    li.className = 'flex items-start gap-2';
                    li.innerHTML = `<span class="text-primary-container font-bold">•</span><span></span>`;
                    li.querySelector('span:last-child').textContent = line;
                    specsList.appendChild(li);
                });

                modal.showModal();
            });
        });

        applyHashFilter();
        window.addEventListener('hashchange', applyHashFilter);
    });
</script>
HTML;

require __DIR__ . '/../includes/footer.php';
