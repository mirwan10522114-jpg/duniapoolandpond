<?php

declare(strict_types=1);

$legalType = $legalType ?? 'privacy';
$activePage = '';

$documents = [
    'privacy' => [
        'title' => 'Kebijakan Privasi | Dunia Pool & Pond',
        'heading' => 'Kebijakan Privasi',
        'subtitle' => 'Penanganan informasi konsultasi teknis dan kontak resmi Dunia Pool & Pond.',
        'sections' => [
            [
                'heading' => '1. Pengumpulan Informasi Konsultasi',
                'body' => 'Website Dunia Pool & Pond tidak menyimpan data pribadi pengunjung ke dalam basis data pelacakan otomatis. Seluruh informasi yang Anda isikan pada formulir konsultasi hanya diformat di browser Anda untuk disalurkan langsung ke WhatsApp resmi kami (+62 821-1807-5560).',
            ],
            [
                'heading' => '2. Penggunaan Informasi Proyek',
                'body' => 'Detail dimensi kolam, lokasi proyek, dan kebutuhan peralatan yang Anda kirimkan melalui WhatsApp digunakan secara eksklusif untuk keperluan analisis teknis hidrolika, penyusunan Rencana Anggaran Biaya (RAB), serta penjadwalan survei lapangan.',
            ],
            [
                'heading' => '3. Kerahasiaan Data Klien',
                'body' => 'Kami tidak menjual, menyewakan, atau membagikan informasi kontak maupun dokumentasi properti klien kepada pihak ketiga di luar lingkup pengerjaan proyek yang disepakati.',
            ],
        ],
    ],
    'terms' => [
        'title' => 'Ketentuan Layanan | Dunia Pool & Pond',
        'heading' => 'Ketentuan Layanan',
        'subtitle' => 'Panduan umum konsultasi teknis, pengadaan peralatan, dan pengerjaan proyek konstruksi kolam renang.',
        'sections' => [
            [
                'heading' => '1. Konsultasi & Rekomendasi Teknis',
                'body' => 'Rekomendasi spesifikasi pompa, sand filter, dan jalur perpipaan pada website bersifat panduan awal. Penentuan tipe akhir wajib diverifikasi berdasarkan ukuran kolam riil, jarak ruang mesin, dan elevasi konstruksi.',
            ],
            [
                'heading' => '2. Ketersediaan Peralatan & Suku Cadang',
                'body' => 'Ketersediaan unit merek seperti AstralPool, Hayward, Pentair, Emaux, DAB, maupun Waterco menyesuaikan stok resmi distributor pada saat konfirmasi pemesanan.',
            ],
            [
                'heading' => '3. Pelaksanaan Proyek & Garansi',
                'body' => 'Lingkup pekerjaan konstruksi, renovasi, jadwal pengerjaan, serta ketentuan garansi struktur dan kebocoran dituangkan secara tertulis dalam dokumen penawaran resmi dan berita acara serah terima proyek.',
            ],
        ],
    ],
];

$doc = $documents[$legalType] ?? $documents['privacy'];
$pageTitle = $doc['title'];

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<main class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-12 lg:py-16 min-h-[60vh]" id="main-content">
    <nav aria-label="Breadcrumb" class="flex items-center text-label-ui font-label-ui text-text-muted mb-6">
        <a class="hover:text-primary transition-colors" href="<?= e(app_url('/')) ?>">Beranda</a>
        <span class="mx-2 text-border-control">/</span>
        <span aria-current="page" class="text-text-body font-medium"><?= e($doc['heading']) ?></span>
    </nav>

    <div class="max-w-3xl bg-bg-canvas border border-border-hairline rounded-2xl p-6 md:p-10 shadow-sm space-y-6">
        <div class="border-b border-border-hairline pb-5">
            <h1 class="text-headline-md-mobile md:text-headline-md font-headline-md text-text-body"><?= e($doc['heading']) ?></h1>
            <p class="text-body-default text-text-muted mt-2"><?= e($doc['subtitle']) ?></p>
        </div>

        <div class="space-y-6">
            <?php foreach ($doc['sections'] as $section): ?>
                <section>
                    <h2 class="text-headline-sm-mobile font-headline-sm text-text-body mb-2"><?= e($section['heading']) ?></h2>
                    <p class="text-body-default text-text-muted leading-relaxed"><?= e($section['body']) ?></p>
                </section>
            <?php endforeach; ?>
        </div>

        <div class="pt-6 border-t border-border-hairline flex flex-wrap gap-3">
            <a class="inline-flex items-center gap-2 bg-primary-container hover:bg-action-hover text-on-primary font-action-button px-5 h-11 rounded-lg transition-colors text-sm" href="<?= e(app_url('/')) ?>">
                <span class="material-symbols-outlined text-base">arrow_back</span>
                <span>Kembali ke Beranda</span>
            </a>
            <a class="inline-flex items-center gap-2 bg-surface-secondary hover:bg-surface-blue text-text-body border border-border-hairline font-action-button px-5 h-11 rounded-lg transition-colors text-sm" href="https://wa.me/6282118075560" rel="noopener noreferrer" target="_blank">
                <span class="material-symbols-outlined text-base text-primary">chat</span>
                <span>Hubungi WhatsApp Resmi</span>
            </a>
        </div>
    </div>
</main>
<?php
require __DIR__ . '/../includes/footer.php';

