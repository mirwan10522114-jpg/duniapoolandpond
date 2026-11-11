<?php

declare(strict_types=1);

$pageTitle = 'Dunia Pool & Pond | The Pool Specialist - Sejak 1997';
$activePage = 'beranda';

$painPoints = [
    [
        'icon' => 'architecture',
        'title' => 'Kontraktor Tidak Paham Desain & Hidrolika',
        'desc' => 'Memilih kontraktor yang tidak paham tata letak dan sistem sirkulasi/plumbing justru menyulitkan perawatan dan memicu kebocoran struktural.',
        'risk' => 'Risiko sirkulasi mati & keropos',
    ],
    [
        'icon' => 'payments',
        'title' => 'Biaya Pembuatan Kelewat Mahal',
        'desc' => 'Bahan sipil, semen waterproofing, maupun mesin finishing tidak sesuai spek dan markup berlebihan (overprice) tanpa kalkulasi transparan.',
        'risk' => 'RAB tidak jelas & overbudget',
    ],
    [
        'icon' => 'timer',
        'title' => 'Pengerjaan Lama & Molor',
        'desc' => 'Kinerja lamban dan jadwal proyek tidak pasti karena kontraktor tidak memiliki manajemen proyek dan SOP tahapan pengecoran yang jelas.',
        'risk' => 'Jadwal berantakan tanpa timeline',
    ],
    [
        'icon' => 'layers',
        'title' => 'Finishing Buruk & Mudah Bocor',
        'desc' => 'Menghabiskan ratusan juta rupiah namun nat keramik berantakan, plesteran retak, dan mesin bising karena salah pasang pipa.',
        'risk' => 'Kebocoran fatal di kemudian hari',
    ],
];

$services = [
    [
        'num' => '01',
        'icon' => 'design_services',
        'title' => 'Desain & Konsultasi',
        'desc' => 'Pembahasan kebutuhan kolam, konsep tata letak, pola sirkulasi hidrolik, serta pemilihan peralatan awal sesuai kondisi lahan.',
        'bullets' => [
            'Peninjauan ukuran area, kontur tanah, dan akses ruang mesin',
            'Pemilihan konsep sirkulasi (skimmer, overflow, atau semi-overflow)',
            'Rekomendasi awal pompa, filter, serta kebutuhan kelistrikan',
        ],
        'detail_url' => app_url('/layanan'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/01-desain-konsultasi', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCp2NICnc9ZxdlWj9uKas0g8LV7PWCAtfJB8FCpLZmNlrENcUjSgZFOdEA6fB_hzNFAb6RA-TXiTXw7a4U75KDOl4uFFEgYihQp6AJMErsODUaisZwCFYA63d1EANHC8YcUmWzK7ic9C8juKNrAXeKoJ2LCkhbbjug7GjX0DVHEynTAtwckdiqxd51C0k5raamuKrnve5yJs58BF1BllJEQHfu7kGlhyTpSvbSn9T0'),
    ],
    [
        'num' => '02',
        'icon' => 'foundation',
        'title' => 'Konstruksi Kolam Renang',
        'desc' => 'Pengerjaan struktur beton bertulang, waterproofing berlapis, koordinasi pemipaan sejak tahap struktur, hingga pekerjaan finishing.',
        'bullets' => [
            'Pembesian, pengecoran beton struktur K-350, serta lapisan kedap air',
            'Koordinasi pipa hisap, jalur balik, dan main drain sesuai tahap cor',
            'Pemasangan mozaik/ubin kolam beserta uji pengisian air 3x24 jam',
        ],
        'detail_url' => app_url('/layanan'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/02-konstruksi-kolam', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDFaNHv5cKUN90ZMygbXXTxzlb4o6haGZI580okaPMTPyH37oSs6GTQxgHcxFULPtqG5iHuTl9nZhpw2WfjYhrrU0pjFYCevums0LTiWjl92ds2a9oOLbdp8YWuRRuh0xTCbKBqYb7a-11bi-Hhuug2O1W9L9hweharpkayu-T5v-BBd7d34mUcdQuvYwU4yepFBQ9fTbDV5lgM8_iqU23kMpiSUEgMBebgMqTcPs4'),
    ],
    [
        'num' => '03',
        'icon' => 'build_circle',
        'title' => 'Renovasi & Perbaikan',
        'desc' => 'Penanganan kebocoran struktural, penggantian pelapis mozaik atau keramik, peremajaan jalur pipa, dan penataan ulang ruang mesin.',
        'bullets' => [
            'Pemeriksaan sumber rembesan, retak struktur, dan kelonggaran nat',
            'Penggantian lapisan finishing serta perbaikan dinding dan dasar kolam',
            'Peningkatan sistem pemipaan, pompa, filter, dan panel kontrol',
        ],
        'detail_url' => app_url('/layanan'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/03-renovasi-perbaikan', 'https://lh3.googleusercontent.com/aida-public/AB6AXuC4AqEWkjqBdJgI7IRcvtkA-UCYKnzpMxspyXk2Fe5qLur4Mu6VqijBJrfN1XIzlAakaBDMcDQujvA-9QweR1airL_QFxIorWYlDZZQxvFzHKJACOjihm-1JL8QWzzvBd3ApRMDdjDhaymtBO6Lqcso-mRzWqJ-TkapumkOOWPCx7pZVARpP4oo_vi-0bhT-ioS8lqNdhTaOf1ZIDM2AYoY63SwkdGx0q0BcAcP04Q'),
    ],
    [
        'num' => '04',
        'icon' => 'sync_alt',
        'title' => 'Sistem Sirkulasi & Filtrasi',
        'desc' => 'Desain sirkulasi skimmer atau overflow presisi, kalkulasi Total Dynamic Head (TDH), instalasi pompa, sand filter, serta gutter balancing tank.',
        'bullets' => [
            'Kalkulasi debit sirkulasi (m3/jam) dan siklus turnover air 4–6 jam',
            'Instalasi manifold pipa PVC AW bertekanan tinggi dan anti-vortex drain',
            'Hydrostatic pressure test pipa 2.5–3 bar sebelum pengecoran bak',
        ],
        'detail_url' => app_url('/layanan'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/04-sirkulasi-filtrasi', 'https://lh3.googleusercontent.com/aida-public/AB6AXuA1TvwhB5TwHkTq4hlqo-jEoNyR0hr6syOmVWylLaEPG4F2y238npPCXRYbeC3yh3MSDBNo77Zj6Iw73LAObFUf2Job1f_gCatERmuYLCIlELJKmiYgBb5E5MlLz-RgJF7bgbim_xf7EhjPhEKpcqKoeecKUyyV9kKG3FoMN8H2OnqnL17MK_VRj6wQuUKoVNvxjTaegr9WMeoUvdWrtK46Xz2Z0Z1C76SnS4zBzGQ'),
    ],
    [
        'num' => '05',
        'icon' => 'power',
        'title' => 'Instalasi Peralatan Kolam',
        'desc' => 'Pemasangan unit pompa sirkulasi, sand atau cartridge filter, salt chlorinator, lampu LED underwater IP68, serta panel kendali otomatis.',
        'bullets' => [
            'Penyelarasan kapasitas daya pompa (HP) dengan diameter tabung filter',
            'Instalasi lampu bawah air kedap IP68 beserta trafo dan proteksi aman',
            'Pengkabelan panel kelistrikan dengan proteksi termal dan jadwal otomatis',
        ],
        'detail_url' => app_url('/produk'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/05-instalasi-peralatan', 'https://lh3.googleusercontent.com/aida-public/AB6AXuA86czNUsCK0DMZbP2jFdh2Wh0FkqFIvP-DIW6t2AmPl_0cp1XTkOrxI--ghMxk_keizZukqSZiOqnR0waQPq0WZ14T5xdonK0VCTuNQh5HHbTQPVNIzeDf-mVU-7AcUR7lvv3C0unHAtYIK3zQI6KoBVuKAmeuZNf0WBSbo9UERepVXgqbSaIMMnzg3-rarjU9vMZsJp_S6Nhnfw1-LgbaB7JbERNg7R-hu8vwfyw'),
    ],
    [
        'num' => '06',
        'icon' => 'pool',
        'title' => 'Perawatan Kolam',
        'desc' => 'Pembersihan rutin fisik dasar dan dinding kolam, pemeriksaan keranjang skimmer & strainer pompa, serta kontrol kejernihan air berkala.',
        'bullets' => [
            'Vacuuming endapan dasar kolam dan penyikatan dinding serta bibir coping',
            'Pembilasan berkala sand filter (backwash & rinse) sesuai tekanan gauge',
            'Pembersihan leaf skimmer, keranjang strainer, serta pengecekan aliran',
        ],
        'detail_url' => app_url('/layanan'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/06-perawatan-kolam', 'https://lh3.googleusercontent.com/aida-public/AB6AXuC7LIztEgt2Htq8gcxItn7mxPZX27LbqMTcstFCzYS5XeOSH_M6gzGGAR9G3hYTrwcCOQtOY5BTEEhjH2a9fce1SZfxAyEc9G5K7J3ZCRY5r7zL9Rf2M3W684lY2TD0d8vNoRQVakTOklVBixa3kfdoNprNRL1EDC9YS6SoqPZOMgSv9YogqhUj8kqcNYl1v9rY1JHgDg30AdkZs6u1vcdLePG7uW0tHRpgvZ1hTzs'),
    ],
    [
        'num' => '07',
        'icon' => 'science',
        'title' => 'Pengolahan Air & Bahan Kimia',
        'desc' => 'Pengujian parameter pH dan kadar klorin, penjernihan air keruh atau berlumut hijau, serta penyeimbangan kimiawi air aman bagi perenang.',
        'bullets' => [
            'Pengukuran kadar pH ideal (7.2–7.6) dan residu klorin bebas terkalibrasi',
            'Penanganan shock treatment, algaecide, dan koagulan penjernih endapan',
            'Suplai klorin granular/tablet TCCA 90%, soda ash, dan penjernih air',
        ],
        'detail_url' => app_url('/produk#chemical'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/07-pengolahan-air', 'https://lh3.googleusercontent.com/aida-public/AB6AXuB248XGMAHs6vNcOHsf0hthRiBTy0iHH_xAdzAsSfRMEnIRxkllCLGzE1tmKQx3SxzjdwAvD3HwCmCqNtp3ht6UT8lCp6j_GFKOCyr8jbUosQg8MW8q_JfwKnGYSC0bFwJz8QfqMXYJmnkjlk7c67rx5xSGJgaUvj9kLta3CXvB5AgG9FUkP1MicsnjEdB99tXk9PxvolTfap3iLA53kMbP3TOkm0W23qvqxQezch4'),
    ],
    [
        'num' => '08',
        'icon' => 'support_agent',
        'title' => 'Purna Jual & Dukungan Teknis',
        'desc' => 'Inspeksi berkala mekanikal elektrikal ruang mesin, troubleshooting penurunan tekanan atau suara bising pompa, serta ketersediaan suku cadang.',
        'bullets' => [
            'Deteksi kebocoran seal, kavitasi pompa, atau kerusakan multiport valve',
            'Penggantian suku cadang resmi (impeller, mechanical seal, o-ring, media pasir)',
            'Konsultasi langsung tim teknis untuk pemeliharaan jangka panjang',
        ],
        'detail_url' => app_url('/produk'),
        'href' => app_url('/#konsultasi'),
        'img' => resolve_image('images/layanan/08-purna-jual', 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7pDjLqQC_b8eTYCQNRs73JtW0mxyGOfKdevHmrTXdbeuRagiBBVhz_gco0hkFtqxMKtHPK27nE64Kk3mjgk0Wl73ACTQf46Wo5xjbO8FARNrZgj67fvFY79YZDmZTLVOELbX_cci0KRmSsHakNEOCn5RsFywqv-7YXmp1gAEuSrq45uxgetH8MeMWKAJ4vPj8HiaX-8ixT7QfSyne5xIDuznP8IH9LBrckNlkS30'),
    ],
];

$projects = [
    [
        'location' => 'Padalarang, Lembang',
        'badge' => 'Pembangunan Baru',
        'title' => 'Proyek Kolam Residensial Minimalis',
        'desc' => 'Pekerjaan struktur beton bertulang, waterproofing dua sisi, finishing mozaik porselen, dan sistem sirkulasi overflow.',
        'scope' => 'Lingkup: Konstruksi & Overflow',
        'type' => 'Residensial',
        'img' => resolve_image('images/proyek/proyek-1-Padalarang', 'https://lh3.googleusercontent.com/aida-public/AB6AXuDFaNHv5cKUN90ZMygbXXTxzlb4o6haGZI580okaPMTPyH37oSs6GTQxgHcxFULPtqG5iHuTl9nZhpw2WfjYhrrU0pjFYCevums0LTiWjl92ds2a9oOLbdp8YWuRRuh0xTCbKBqYb7a-11bi-Hhuug2O1W9L9hweharpkayu-T5v-BBd7d34mUcdQuvYwU4yepFBQ9fTbDV5lgM8_iqU23kMpiSUEgMBebgMqTcPs4'),
        'alt' => 'Konstruksi kolam renang residensial minimalis di Padalarang Lembang dengan saluran overflow keliling dan finishing mozaik biru bersih',
    ],
    [
        'location' => 'Dago Pakar, Bandung',
        'badge' => 'Renovasi Sistem',
        'title' => 'Renovasi & Re-finishing Kolam Vila',
        'desc' => 'Injeksi struktur beton penahan kebocoran, penggantian mozaik dinding, dan peremajaan sistem manifold pipa sirkulasi.',
        'scope' => 'Lingkup: Perbaikan & Mozaik',
        'type' => 'Vila Swasta',
        'img' => resolve_image('images/proyek/proyek-2-dago-pakar', 'https://lh3.googleusercontent.com/aida-public/AB6AXuC4AqEWkjqBdJgI7IRcvtkA-UCYKnzpMxspyXk2Fe5qLur4Mu6VqijBJrfN1XIzlAakaBDMcDQujvA-9QweR1airL_QFxIorWYlDZZQxvFzHKJACOjihm-1JL8QWzzvBd3ApRMDdjDhaymtBO6Lqcso-mRzWqJ-TkapumkOOWPCx7pZVARpP4oo_vi-0bhT-ioS8lqNdhTaOf1ZIDM2AYoY63SwkdGx0q0BcAcP04Q'),
        'alt' => 'Kolam renang vila di Dago Pakar Bandung setelah renovasi permukaan mozaik dan injeksi antibocor dengan air jernih terawat',
    ],
    [
        'location' => 'Bandung Barat',
        'badge' => 'Mekanikal Hidrolika',
        'title' => 'Instalasi Sistem Filtrasi Komersial',
        'desc' => 'Pemasangan pompa sirkulasi berdaya tinggi, dua unit sand filter komersial, instalasi otomatis klorinator, dan panel kendali.',
        'scope' => 'Lingkup: Pompa & Sand Filter',
        'type' => 'Komersial',
        'img' => resolve_image('images/proyek/proyek-3-bandung-barat', 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7pDjLqQC_b8eTYCQNRs73JtW0mxyGOfKdevHmrTXdbeuRagiBBVhz_gco0hkFtqxMKtHPK27nE64Kk3mjgk0Wl73ACTQf46Wo5xjbO8FARNrZgj67fvFY79YZDmZTLVOELbX_cci0KRmSsHakNEOCn5RsFywqv-7YXmp1gAEuSrq45uxgetH8MeMWKAJ4vPj8HiaX-8ixT7QfSyne5xIDuznP8IH9LBrckNlkS30'),
        'alt' => 'Ruang mesin hidrolika kolam komersial di Bandung Barat dengan dua unit sand filter, pompa sirkulasi, pemipaan UPVC rapi, dan panel kontrol',
    ],
];

$projectVideo = resolve_video('video/kolam-ts-villa-Padalarang', 'video');

$timelineSteps = [
    ['side' => 'right', 'num' => 'Tahap 01', 'icon' => 'search', 'title' => 'Survey Lokasi & Analisis Lahan', 'desc' => 'Pengukuran kontur pekarangan, elevasi permukaan tanah, akses pipa inlet/outlet, dan uji daya dukung struktur.'],
    ['side' => 'left', 'num' => 'Tahap 02', 'icon' => 'edit', 'title' => 'Inisiasi & Desain Kolam 3D', 'desc' => 'Penyusunan gambar arsitektur 3 dimensi, skematik sistem perpipaan hidrolika, serta simulasi sistem overflow vs skimmer.'],
    ['side' => 'right', 'num' => 'Tahap 03', 'icon' => 'calendar_month', 'title' => 'Perencanaan & RAB Transparan', 'desc' => 'Penyusunan Rencana Anggaran Biaya terperinci tanpa hidden cost, spesifikasi merek mesin pompa, serta jadwal timeline kerja.'],
    ['side' => 'left', 'num' => 'Tahap 04', 'icon' => 'build', 'title' => 'Pelaksanaan Proyek & Pembesian Cor', 'desc' => 'Penggalian, pembesian rangkap dua, pengecoran beton mutu K-350 kedap air, waterproofing berlapis, dan pemasangan mozaik presisi.'],
    ['side' => 'right', 'num' => 'Tahap 05', 'icon' => 'engineering', 'title' => 'Monitoring Proyek & Uji Tekan Pipa', 'desc' => 'Hydrostatic pressure test seluruh sambungan pipa plumbing, perendaman uji kebocoran bak kolam 3x24 jam sebelum finishing keramik.'],
    ['side' => 'left', 'num' => 'Tahap 06', 'icon' => 'check', 'title' => 'Penyelesaian & Commissioning Mesin', 'desc' => 'Pengisian air perdana, penyeimbangan takaran chemical penjernih, uji coba pompa sirkulasi dan filter sand multi-port valve.'],
    ['side' => 'right', 'num' => 'Tahap 07', 'icon' => 'handshake', 'title' => 'Serah Terima Proyek & Garansi', 'desc' => 'Berita Acara serah terima, edukasi operasional perawatan mandiri kepada pemilik, serta sertifikat garansi struktur dan kebocoran.'],
];

$productCategories = get_product_categories();

$brands = get_brand_catalog();

$faqs = [
    [
        'q' => 'Apakah Dunia Pool & Pond melayani pembangunan baru dan renovasi?',
        'a' => 'Ya, kami menangani proyek konstruksi dari nol (lahan mentah) serta renovasi total atau parsial, termasuk penanganan kebocoran beton, pembongkaran mozaik rusak, dan pembaruan sistem pipa sirkulasi lama.',
    ],
    [
        'q' => 'Bagaimana cara menentukan kapasitas pompa dan filter yang tepat?',
        'a' => 'Kapasitas ditentukan berdasarkan total volume kubikasi air (panjang × lebar × kedalaman rata-rata) dan target waktu perputaran air (turnover rate normal 6-8 jam). Tim kami akan mengkalkulasikan ukuran flow rate (GPM/m3 per jam) yang akurat agar mesin tidak bekerja berlebih.',
    ],
    [
        'q' => 'Apakah tersedia paket perawatan air dan maintenance berkala?',
        'a' => 'Kami menyediakan opsi kunjungan perawatan rutin (1-2 kali seminggu) meliputi vacuuming endapan, pembersihan daun, sikat lumut, penyeimbangan kadar kimia air (pH & klorin), dan servis saringan mesin untuk area yang terjangkau.',
    ],
    [
        'q' => 'Bagaimana alur pemesanan atau konsultasi pembelian produk?',
        'a' => 'Anda dapat memilih kategori produk yang dibutuhkan melalui formulir WhatsApp interaktif di bawah atau langsung menghubungi kontak resmi kami di 0821-1807-5560 untuk konfirmasi spesifikasi, kecocokan voltase/pipa, serta ketersediaan stok.',
    ],
    [
        'q' => 'Apa saja yang perlu disiapkan sebelum berkonsultasi?',
        'a' => 'Cukup siapkan lokasi umum proyek, estimasi dimensi luas lahan atau ukuran kolam saat ini, preferensi tipe sirkulasi (skimmer atau overflow), serta dokumentasi foto lokasi bila ada untuk mempermudah evaluasi awal.',
    ],
    [
        'q' => 'Wilayah mana saja yang dicakup untuk pekerjaan proyek dan pengiriman?',
        'a' => 'Kami berbasis di Padalarang, Kabupaten Bandung Barat. Untuk konstruksi dan instalasi baru, kami melayani wilayah Bandung Raya, Jawa Barat, hingga proyek khusus antar kota. Pengiriman peralatan dan bahan kimia melayani pengiriman logistik ke berbagai wilayah di Indonesia.',
    ],
];

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<main id="main-content">
    <!-- SECTION HERO -->
    <section class="relative overflow-hidden bg-gradient-to-br from-[#EAF4FC] via-[#DFEEFA] to-[#EDF6FD] grid-architectural py-14 lg:py-20 border-b border-border-hairline" id="beranda">
        <div aria-hidden="true" class="pattern-halftone-bl pointer-events-none absolute left-0 bottom-0 w-72 h-56 z-0"></div>
        <?= render_section_decor('dot-wave', 'right-0 top-0 opacity-90 z-0') ?>
        <?= render_section_decor('wave-ribbons', 'right-0 bottom-0 opacity-80 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
                <!-- Kolom Kiri: Teks Utama -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest">
                        <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                        <span>The Pool Specialist — Sejak 1997</span>
                    </div>
                    <h1 class="text-display-hero-mobile md:text-headline-lg lg:text-display-hero font-display-hero text-text-body tracking-tight leading-[1.1] text-balance">
                        Solusi Kolam Renang Profesional Sejak 1997
                    </h1>
                    <p class="text-body-lead-mobile md:text-body-lead font-body-lead text-text-muted leading-relaxed">
                        Perencanaan rekayasa hidrolika, konstruksi beton mutu K-350, instalasi mesin orisinil, dan perawatan air terpadu di Padalarang, Bandung Barat.
                    </p>
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 pt-1">
                        <a class="inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-action-hover text-white font-action-button text-action-button h-12 px-7 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 font-semibold shadow-sm" href="#konsultasi">
                            <span aria-hidden="true" class="material-symbols-outlined text-[19px]">chat</span>
                            <span>Konsultasi</span>
                        </a>
                        <a class="inline-flex items-center justify-center bg-white hover:bg-surface-secondary text-text-body border border-border-hairline hover:border-border-control font-action-button text-action-button h-12 px-6 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 font-medium shadow-sm" href="#proyek">
                            Lihat Dokumentasi
                        </a>
                    </div>
                    <div class="text-label-ui font-label-ui text-text-muted flex items-center gap-2">
                        <span>Mencari pompa &amp; filter?</span>
                        <a class="text-primary hover:underline font-semibold inline-flex items-center gap-1 group" href="<?= e(app_url('/produk')) ?>">
                            <span>Jelajahi katalog produk</span>
                            <span aria-hidden="true" class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                    <div class="pt-4 border-t border-primary/15 flex flex-wrap gap-x-5 gap-y-2 text-xs text-text-body font-medium">
                        <span class="inline-flex items-center gap-1.5">
                            <span aria-hidden="true" class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                            Garansi Struktur &amp; Bocor
                        </span>
                        <span class="inline-flex items-center gap-1.5">
                            <span aria-hidden="true" class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                            Uji Tekan Hydrostatic
                        </span>
                        <span class="inline-flex items-center gap-1.5">
                            <span aria-hidden="true" class="material-symbols-outlined text-[16px] text-primary">check_circle</span>
                            RAB Terukur &amp; Jelas
                        </span>
                    </div>
                </div>
                <!-- Kolom Kanan: Bingkai Foto Arsitektural -->
                <div class="lg:col-span-7">
                    <figure class="rounded-xl overflow-hidden border border-border-hairline bg-white p-2.5 shadow-[0_12px_32px_rgba(7,106,167,0.12)]">
                        <div class="aspect-[4/3] rounded-lg overflow-hidden bg-surface-blue">
                            <img alt="Kolam renang residensial modern dengan finishing mozaik biru, fitur air terjun dinding, tangga stainless, dan pencahayaan underwater LED" class="w-full h-full object-cover" loading="eager" src="<?= e(resolve_image('images/hero/kolam-utama', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQI-5gQPZoXf-t11uiEfdqZOteu7PXFTSqx_wDV4AUAR_xGnCn7yx-pbPXKwdmroDQuAQRy-Wng5hsjhy74Nr7thAo9DtFyB6CGQw4a_vVCfC3tAfs5nQHD7sLNPJVOqG0ABXKvnZju03Mpi4ySAxIDWW_ZbJQ36d_qoeqC7zglL3-RI7sWotsT58S9LLbs8lkmLdTO6-l7Zg5wwPrWAm0O91-K6XLPCv0LULlY2Q', true)) ?>" />
                        </div>
                        <figcaption class="px-2 pt-3 pb-1 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs">
                            <div>
                                <p class="font-bold text-text-body text-sm">Desain, Konstruksi &amp; Pencahayaan Kolam Terpadu</p>
                                <p class="text-text-muted">Dokumentasi Standar Teknis Sipil &amp; Hidrolika</p>
                            </div>
                            <span class="font-mono text-[11px] font-semibold uppercase tracking-wider text-primary bg-surface-blue border border-primary/20 px-2.5 py-1 rounded self-start sm:self-auto shrink-0">
                                Padalarang • Est. 1997
                            </span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- CORPORATE CREDENTIALS LEDGER -->
    <section aria-label="Standar Teknis Perusahaan" class="bg-[#F4F9FE] border-b border-border-hairline">
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-7 lg:py-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-primary/15 border border-primary/20 border-t-2 border-t-primary-container rounded-xl bg-white shadow-sm">
                <div class="px-5 py-4 lg:py-5">
                    <p class="font-headline-sm font-extrabold text-primary text-lg lg:text-xl tracking-tight">10 Ags 1997</p>
                    <p class="text-xs text-text-muted mt-1 leading-snug">Berdiri resmi, pengalaman 27+ tahun di bidang kolam</p>
                </div>
                <div class="px-5 py-4 lg:py-5">
                    <p class="font-headline-sm font-extrabold text-primary text-lg lg:text-xl tracking-tight">Beton K-350</p>
                    <p class="text-xs text-text-muted mt-1 leading-snug">Struktur kedap air &amp; pembesian dua lapis standar sipil</p>
                </div>
                <div class="px-5 py-4 lg:py-5">
                    <p class="font-headline-sm font-extrabold text-primary text-lg lg:text-xl tracking-tight">Uji 3 × 24 Jam</p>
                    <p class="text-xs text-text-muted mt-1 leading-snug">Hydrostatic pressure test pipa &amp; perendaman bak</p>
                </div>
                <div class="px-5 py-4 lg:py-5">
                    <p class="font-headline-sm font-extrabold text-primary text-lg lg:text-xl tracking-tight">SNI / APSP</p>
                    <p class="text-xs text-text-muted mt-1 leading-snug">Kalkulasi debit sirkulasi, TDH &amp; turnover rate terukur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PENGANTAR PERUSAHAAN -->
    <section class="relative overflow-hidden py-16 lg:py-20 bg-white border-b border-border-hairline reveal-item" id="tentang-kami">
        <div aria-hidden="true" class="pattern-halftone-tr pointer-events-none absolute right-0 top-0 w-72 h-52 z-0"></div>
        <?= render_section_decor('hex-mesh', '-right-4 -bottom-4 opacity-75 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-start">
                <div class="lg:col-span-5 space-y-3">
                    <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest">
                        <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                        <span>Profil Perusahaan</span>
                    </div>
                    <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body text-balance">
                        Satu Spesialis untuk Berbagai Kebutuhan Kolam
                    </h2>
                    <p class="text-xs font-mono uppercase tracking-wider text-text-muted pt-1">
                        Padalarang, Kab. Bandung Barat • Jawa Barat
                    </p>
                </div>
                <div class="lg:col-span-7 space-y-6">
                    <p class="text-body-lead-mobile lg:text-body-lead font-body-lead text-text-muted leading-relaxed">
                        Dunia Pool &amp; Pond berdiri pada 10 Agustus 1997 di Padalarang, Kabupaten Bandung Barat. Berawal sebagai kontraktor lokal, kami berkembang menangani perencanaan, konstruksi, instalasi sistem hidrolika, pengadaan peralatan, perawatan berkala, serta dukungan purna jual. Kami memprioritaskan ketepatan teknis dan keandalan operasional jangka panjang.
                    </p>
                    <div class="border-t border-b border-border-hairline divide-y divide-border-hairline bg-white/90">
                        <div class="py-3.5 flex flex-col sm:flex-row sm:items-baseline gap-1 sm:gap-5">
                            <span class="text-xs font-mono font-bold text-primary shrink-0 w-24">01 • TERUKUR</span>
                            <div class="text-sm">
                                <span class="font-semibold text-text-body">Rekayasa Hidrolika Presisi:</span>
                                <span class="text-text-muted"> Perhitungan jalur pipa, debit pompa, dan turnover rate sesuai volume kolam.</span>
                            </div>
                        </div>
                        <div class="py-3.5 flex flex-col sm:flex-row sm:items-baseline gap-1 sm:gap-5">
                            <span class="text-xs font-mono font-bold text-primary shrink-0 w-24">02 • JELAS</span>
                            <div class="text-sm">
                                <span class="font-semibold text-text-body">Transparansi RAB &amp; Material:</span>
                                <span class="text-text-muted"> Spesifikasi beton, waterproofing, dan merek mesin tercantum tegas tanpa biaya tersembunyi.</span>
                            </div>
                        </div>
                        <div class="py-3.5 flex flex-col sm:flex-row sm:items-baseline gap-1 sm:gap-5">
                            <span class="text-xs font-mono font-bold text-primary shrink-0 w-24">03 • GARANSI</span>
                            <div class="text-sm">
                                <span class="font-semibold text-text-body">Serah Terima &amp; Purna Jual:</span>
                                <span class="text-text-muted"> Dilengkapi berita acara pengujian, panduan operasional, dan suku cadang resmi.</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="inline-flex items-center gap-2 text-primary font-action-button text-action-button hover:text-action-hover focus:outline-none focus:ring-2 focus:ring-primary-container rounded font-semibold group" href="#layanan">
                            <span>Telusuri Lingkup Layanan Kami</span>
                            <span aria-hidden="true" class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PAIN POINTS -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-[#E9F3FB] border-b border-border-hairline reveal-item">
        <div aria-hidden="true" class="pattern-halftone-bl pointer-events-none absolute left-0 bottom-0 w-72 h-56 z-0"></div>
        <?= render_section_decor('mosaic-tiles', 'right-0 top-0 opacity-90 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="max-w-3xl mb-12">
                <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest mb-3">
                    <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                    <span>Evaluasi Sebelum Memulai</span>
                </div>
                <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body font-bold text-balance">
                    Hindari Kesalahan Teknis dalam Membangun Kolam Renang
                </h2>
                <p class="text-body-default font-body-default text-text-muted mt-3">
                    Banyak pemilik kolam mengalami pembengkakan biaya perawatan akibat pengerjaan tanpa standar hidrolika dan struktur yang tepat.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 border border-border-hairline rounded-xl bg-white overflow-hidden divide-y md:divide-y-0 md:divide-x divide-border-hairline shadow-sm">
                <?php foreach ($painPoints as $point): ?>
                    <div class="p-6 lg:p-7 flex flex-col justify-between bg-white">
                        <div>
                            <span aria-hidden="true" class="material-symbols-outlined text-2xl text-primary mb-4 block"><?= e($point['icon']) ?></span>
                            <h3 class="font-headline-sm font-bold text-text-body text-base mb-2.5 leading-snug">
                                <?= e($point['title']) ?>
                            </h3>
                            <p class="text-text-muted text-sm leading-relaxed">
                                <?= e($point['desc']) ?>
                            </p>
                        </div>
                        <div class="mt-6 pt-3 border-t border-border-hairline">
                            <p class="text-xs text-feedback-error font-semibold border-l-2 border-feedback-error pl-2.5">
                                <?= e($point['risk']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SECTION LAYANAN -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-[#F3F8FD] pattern-diagonal-grid border-b border-border-hairline reveal-item" id="layanan">
        <?= render_section_decor('wave-ribbons', 'right-0 top-0 opacity-70 scale-y-[-1] z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest mb-3">
                        <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                        <span>Lingkup Pekerjaan</span>
                    </div>
                    <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body text-balance">
                        Layanan untuk Setiap Tahap Kebutuhan Kolam Anda
                    </h2>
                    <p class="text-body-default font-body-default text-text-muted mt-3">
                        Pekerjaan terstruktur ditangani langsung dengan kalkulasi debit sirkulasi, mutu cor beton K-350, dan peralatan orisinil bergaransi.
                    </p>
                </div>
                <a class="inline-flex items-center gap-1.5 text-primary hover:text-action-hover font-action-button text-sm font-semibold shrink-0 group" href="<?= e(app_url('/layanan')) ?>">
                    <span>Detail Rekayasa Hidrolika</span>
                    <span aria-hidden="true" class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
            <div class="space-y-6">
                <?php foreach ($services as $svc): ?>
                    <article class="group bg-white border border-border-hairline rounded-2xl p-6 lg:p-8 shadow-sm hover:border-primary-container/50 hover:shadow-md transition-all duration-200">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-10 items-center">
                            <!-- Kolom Kiri: Info & Aksi -->
                            <div class="lg:col-span-7 space-y-4">
                                <div class="flex items-center gap-3">
                                    <div aria-hidden="true" class="w-9 h-9 rounded-lg bg-surface-blue border border-primary/15 flex items-center justify-center text-primary-container shrink-0">
                                        <span class="material-symbols-outlined text-[19px]"><?= e($svc['icon']) ?></span>
                                    </div>
                                    <span class="text-xs font-mono font-bold text-primary-container tracking-wider"><?= e($svc['num']) ?></span>
                                    <h3 class="text-headline-sm-mobile lg:text-headline-sm font-headline-sm font-bold text-text-body group-hover:text-primary transition-colors">
                                        <?= e($svc['title']) ?>
                                    </h3>
                                </div>
                                <p class="text-body-default font-body-default text-text-body/90 text-[15px] leading-relaxed">
                                    <?= e($svc['desc']) ?>
                                </p>
                                <ul class="space-y-1.5 text-sm text-text-muted">
                                    <?php foreach ($svc['bullets'] as $bullet): ?>
                                        <li class="flex items-start gap-2">
                                            <span aria-hidden="true" class="text-primary-container font-semibold">-</span>
                                            <span><?= e($bullet) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="pt-2 flex flex-wrap items-center gap-5">
                                    <a class="inline-flex items-center justify-center h-11 px-5 rounded-lg border-2 border-primary-container text-primary-container hover:bg-primary-container hover:text-white font-action-button font-semibold text-sm transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2" href="<?= e($svc['detail_url']) ?>">
                                        Lihat Detail Layanan
                                    </a>
                                    <a class="inline-flex items-center gap-1.5 text-sm font-action-button font-semibold text-primary-container hover:text-action-hover transition-colors" href="<?= e($svc['href']) ?>">
                                        <span>Konsultasikan</span>
                                        <span aria-hidden="true" class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Kolom Kanan: Foto Layanan 3:2 -->
                            <div class="lg:col-span-5">
                                <div class="aspect-[3/2] rounded-xl overflow-hidden border border-border-hairline bg-surface-blue shadow-sm">
                                    <img
                                        alt="<?= e($svc['title']) ?>"
                                        class="w-full h-full object-cover motion-safe:group-hover:scale-[1.03] transition-transform duration-500"
                                        loading="lazy"
                                        src="<?= e($svc['img']) ?>"
                                    />
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- SECTION BANNER KONSULTASI LAHAN (Biru Brand #076aa7) -->
    <section class="py-14 bg-[#E9F3FB] border-b border-border-hairline reveal-item">
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
            <div class="relative rounded-xl bg-primary-container text-white border border-primary/20 overflow-hidden shadow-md">
                <?= render_section_decor('banner-waves', 'right-0 bottom-0 z-0') ?>
                <div class="grid grid-cols-1 md:grid-cols-12 items-stretch relative z-10">
                    <div class="md:col-span-4 bg-primary relative aspect-[4/5] md:aspect-auto md:min-h-[380px] lg:min-h-[460px] overflow-hidden">
                        <img alt="Spesialis konstruksi dan konsultasi kolam renang Dunia Pool &amp; Pond" class="w-full h-full object-cover object-top" loading="lazy" src="<?= e(resolve_image('images/banner/tim-teknisi', '', true)) ?>" />
                    </div>
                    <div class="md:col-span-8 p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-5">
                        <div class="inline-flex items-center gap-2 text-xs font-mono font-semibold uppercase tracking-widest text-primary-fixed">
                            <span>Evaluasi Lahan &amp; Tata Letak</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-headline-md font-bold text-white tracking-tight leading-snug text-balance">
                            Optimalkan Luasan Pekarangan Anda Menjadi Kolam Renang Fungsional
                        </h3>
                        <p class="text-white/90 text-sm sm:text-base leading-relaxed max-w-2xl">
                            Baik lahan terbatas untuk plunge pool minimalis maupun pekarangan luas berkonsep overflow, tim kami membantu memetakan dimensi kolam, posisi ruang mesin, dan estimasi anggaran yang realistis sebelum konstruksi dimulai.
                        </p>
                        <div class="flex flex-wrap items-center gap-4 pt-1">
                            <a class="inline-flex items-center justify-center gap-2 bg-white hover:bg-surface-blue text-primary font-action-button font-bold px-6 h-12 rounded-lg text-sm transition-colors focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-primary-container" href="https://wa.me/6282118075560?text=Halo%20Dunia%20Pool%20%26%20Pond,%20saya%20ingin%20berkonsultasi%20rancangan%20kolam%20renang%20untuk%20lahan%20saya" rel="noopener noreferrer" target="_blank">
                                <span aria-hidden="true" class="material-symbols-outlined text-[18px]">chat</span>
                                <span>Diskusikan Rancangan Lahan</span>
                            </a>
                            <span class="text-xs text-white/85">
                                Konsultasi WhatsApp Langsung: <strong class="text-white">0821-1807-5560</strong>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PROYEK PILIHAN -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-white border-b border-border-hairline reveal-item" id="proyek">
        <div aria-hidden="true" class="pattern-halftone-tr pointer-events-none absolute right-0 top-0 w-72 h-56 z-0"></div>
        <?= render_section_decor('hex-mesh', '-left-6 bottom-0 opacity-75 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest mb-3">
                        <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                        <span>Portofolio Terdokumentasi</span>
                    </div>
                    <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body text-balance">
                        Dokumentasi Pekerjaan Kami
                    </h2>
                    <p class="text-body-default font-body-default text-text-muted mt-2 max-w-xl">
                        Dokumentasi proyek pengerjaan kolam renang residensial, vila, dan komersial dengan standar teknis presisi di Bandung &amp; sekitarnya.
                    </p>
                </div>
                <div class="text-xs font-mono uppercase tracking-wider text-text-muted">
                    3 Dokumentasi Representatif
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
                <?php foreach ($projects as $project): ?>
                    <article class="group bg-white border border-border-hairline rounded-xl overflow-hidden flex flex-col hover:border-primary/40 hover:shadow-md transition-all duration-200">
                        <div class="aspect-[3/2] bg-surface-blue relative overflow-hidden border-b border-border-hairline">
                            <img alt="<?= e($project['alt']) ?>" class="w-full h-full object-cover group-hover:scale-[1.03] transition-transform duration-500" loading="lazy" src="<?= e($project['img']) ?>" />
                        </div>
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div class="space-y-2">
                                <div class="flex items-center justify-between gap-2 text-xs">
                                    <span class="font-bold text-primary uppercase tracking-wider"><?= e($project['badge']) ?></span>
                                    <span class="text-text-muted font-medium"><?= e($project['location']) ?></span>
                                </div>
                                <h3 class="text-headline-sm-mobile lg:text-headline-sm font-headline-sm text-text-body group-hover:text-primary transition-colors">
                                    <?= e($project['title']) ?>
                                </h3>
                                <p class="text-body-default font-body-default text-text-muted text-sm">
                                    <?= e($project['desc']) ?>
                                </p>
                            </div>
                            <div class="pt-4 mt-5 border-t border-border-hairline flex items-center justify-between text-xs text-text-muted">
                                <span><?= e($project['scope']) ?></span>
                                <span class="text-text-body font-semibold"><?= e($project['type']) ?></span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <?php if ($projectVideo['src'] !== ''): ?>
                <!-- Video Showcase Desain 3D & Render Realistis -->
                <div class="mt-10 bg-white border border-border-hairline rounded-2xl overflow-hidden shadow-sm">
                    <div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">
                        <div class="lg:col-span-8 bg-[#071A2C] flex items-center justify-center overflow-hidden">
                            <video
                                class="w-full h-full aspect-video object-cover"
                                controls
                                playsinline
                                poster="<?= e($projectVideo['poster']) ?>"
                                preload="metadata"
                            >
                                <source src="<?= e($projectVideo['src']) ?>" type="<?= e($projectVideo['type']) ?>" />
                                Browser Anda belum mendukung pemutar video HTML5.
                            </video>
                        </div>
                        <div class="lg:col-span-4 p-6 lg:p-8 flex flex-col justify-between gap-6 border-t lg:border-t-0 lg:border-l border-border-hairline bg-[#F8FBFE]">
                            <div class="space-y-3">
                                <div class="inline-flex items-center gap-2 text-[11px] font-mono font-semibold uppercase tracking-wider text-primary-container bg-white border border-[#DCE7F2] px-2.5 py-1 rounded">
                                    <span aria-hidden="true" class="material-symbols-outlined text-sm">view_in_ar</span>
                                    <span>Desain 3D &amp; Render Realistis</span>
                                </div>
                                <h3 class="text-headline-sm-mobile lg:text-headline-sm font-headline-sm font-bold text-text-body leading-snug">
                                    Visualisasi 3D &amp; View Kolam TS Villa Padalarang
                                </h3>
                                <p class="text-body-default font-body-default text-text-muted text-sm leading-relaxed">
                                    Pratinjau animasi desain 3D mulai dari skematik sistem perpipaan hidrolika dan balancing tank hingga hasil render realistis suasana kolam siap pakai.
                                </p>
                                <ul class="space-y-2 pt-2 text-xs text-text-body/90">
                                    <li class="flex items-start gap-2">
                                        <span aria-hidden="true" class="material-symbols-outlined text-base text-primary-container shrink-0">check_circle</span>
                                        <span>Skematik 3D jalur pipa sirkulasi &amp; balancing tank</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span aria-hidden="true" class="material-symbols-outlined text-base text-primary-container shrink-0">check_circle</span>
                                        <span>Simulasi render material mozaik, dek &amp; tata cahaya malam</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span aria-hidden="true" class="material-symbols-outlined text-base text-primary-container shrink-0">check_circle</span>
                                        <span>Diputar langsung dari server lokal (Full HD 1080p)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="pt-4 border-t border-border-hairline">
                                <a class="inline-flex w-full items-center justify-center gap-2 h-11 px-5 rounded-lg bg-primary-container hover:bg-action-hover text-white font-action-button font-semibold text-sm transition-colors shadow-sm" href="<?= e(app_url('/#konsultasi')) ?>">
                                    <span>Konsultasikan Desain 3D Kolam</span>
                                    <span aria-hidden="true" class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- SECTION MANAJEMEN PROYEK (Vertical Architectural Timeline) -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-gradient-to-b from-[#E7F2FB] via-[#EDF5FC] to-[#E2EFFA] border-b border-border-hairline reveal-item" id="manajemen-proyek">
        <div aria-hidden="true" class="pattern-halftone-tr pointer-events-none absolute right-0 top-0 w-80 h-64 z-0"></div>
        <?= render_section_decor('dot-wave', '-left-12 top-16 opacity-75 z-0') ?>
        <?= render_section_decor('mosaic-tiles', '-left-8 bottom-0 opacity-80 z-0') ?>
        <?= render_section_decor('wave-ribbons', 'right-0 bottom-0 opacity-85 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-14 lg:mb-16">
                <div class="inline-flex items-center justify-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest mb-3">
                    <span aria-hidden="true" class="w-5 h-[2px] bg-primary-container"></span>
                    <span>SOP &amp; Kontrol Kualitas Teruji</span>
                    <span aria-hidden="true" class="w-5 h-[2px] bg-primary-container"></span>
                </div>
                <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body font-bold text-balance">
                    Kami Sangat Memahami Manajemen Proyek Kolam Renang
                </h2>
                <p class="text-body-default font-body-default text-text-muted mt-3">
                    Setiap tahapan dikerjakan secara sistematis dengan dokumentasi teknis, uji tekan hidrolika, dan jadwal yang transparan.
                </p>
            </div>
            <div class="relative max-w-5xl mx-auto">
                <!-- Garis tengah timeline (Desktop) -->
                <div aria-hidden="true" class="hidden md:block absolute left-1/2 -translate-x-1/2 top-20 bottom-20 w-[2px] bg-[#B7D2E8]"></div>
                <?php $totalSteps = count($timelineSteps); ?>
                <div>
                    <?php foreach ($timelineSteps as $idx => $step): ?>
                        <?php
                        $isRight = ($step['side'] === 'right');
                        $isFirst = ($idx === 0);
                        $isLast = ($idx === $totalSteps - 1);
                        ?>
                        <div class="group grid grid-cols-[44px_1fr] md:grid-cols-[1fr_84px_1fr] gap-x-4 md:gap-x-0 items-stretch <?= $isLast ? '' : 'pb-6 md:pb-8' ?>">
                            <!-- Kartu Tahap -->
                            <div class="order-2 <?= $isRight ? 'md:order-3' : 'md:order-1' ?> flex items-center">
                                <div class="w-full bg-white border border-border-hairline group-hover:border-primary/50 rounded-xl p-5 lg:p-6 shadow-sm group-hover:shadow-md transition-all duration-200 text-left">
                                    <div class="flex items-center justify-between gap-2 mb-2">
                                        <span class="text-[11px] font-mono font-bold text-primary bg-surface-secondary border border-border-hairline px-2 py-0.5 rounded uppercase tracking-wider"><?= e($step['num']) ?></span>
                                        <span class="hidden sm:inline-block text-[11px] font-mono text-text-muted/70">0<?= $idx + 1 ?> / 0<?= $totalSteps ?></span>
                                    </div>
                                    <h3 class="font-headline-sm text-base lg:text-lg text-text-body font-bold mb-1.5 leading-snug group-hover:text-primary transition-colors">
                                        <?= e($step['title']) ?>
                                    </h3>
                                    <p class="text-text-muted text-sm leading-relaxed">
                                        <?= e($step['desc']) ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Node Tengah & Konektor -->
                            <div class="order-1 md:order-2 relative flex items-start md:items-center justify-center pt-1 md:pt-0">
                                <?php if (!$isFirst): ?>
                                    <div aria-hidden="true" class="md:hidden absolute top-0 h-6 left-1/2 -translate-x-1/2 w-[2px] bg-[#B7D2E8]"></div>
                                <?php endif; ?>
                                <?php if (!$isLast): ?>
                                    <div aria-hidden="true" class="md:hidden absolute top-6 bottom-0 left-1/2 -translate-x-1/2 w-[2px] bg-[#B7D2E8]"></div>
                                <?php endif; ?>
                                <div aria-hidden="true" class="hidden md:block absolute top-1/2 -translate-y-1/2 h-[2px] bg-[#B7D2E8] group-hover:bg-primary-container transition-colors <?= $isRight ? 'left-1/2 right-0' : 'left-0 right-1/2' ?>"></div>
                                <div aria-hidden="true" class="relative z-10 w-10 h-10 md:w-11 md:h-11 rounded-full bg-primary-container group-hover:bg-action-hover text-white ring-4 ring-[#E9F3FC] border border-primary/20 flex items-center justify-center shadow-sm transition-colors duration-200 shrink-0">
                                    <span class="material-symbols-outlined text-[18px] md:text-[19px]"><?= e($step['icon']) ?></span>
                                </div>
                            </div>

                            <!-- Label Tahap Sisi Berlawanan (Desktop) -->
                            <div class="hidden md:flex items-center <?= $isRight ? 'md:order-1 justify-end pr-4' : 'md:order-3 justify-start pl-4' ?>">
                                <span class="text-xs font-mono font-semibold uppercase tracking-widest text-text-muted/90 group-hover:text-primary transition-colors">
                                    <?= e($step['num']) ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION KATEGORI PRODUK -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-[#F7FBFE] border-b border-border-hairline reveal-item" id="produk">
        <?= render_section_decor('mosaic-tiles', 'right-0 -top-6 opacity-90 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest mb-3">
                        <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                        <span>Pengadaan Peralatan</span>
                    </div>
                    <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body text-balance">
                        Peralatan untuk Melengkapi Sistem Kolam Anda
                    </h2>
                    <p class="text-body-default font-body-default text-text-muted mt-2 max-w-xl">
                        Pilihan suku cadang, mesin filtrasi, dan perlengkapan pemeliharaan orisinil dengan dukungan teknis langsung.
                    </p>
                </div>
                <a class="inline-flex items-center gap-1.5 text-primary hover:text-action-hover font-action-button text-action-button font-semibold group shrink-0" href="<?= e(app_url('/produk')) ?>">
                    <span>Lihat Semua 11 Kategori Produk</span>
                    <span aria-hidden="true" class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($productCategories as $cat): ?>
                    <a class="bg-white border border-border-hairline hover:border-primary-container/70 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-200 flex flex-col justify-between group" href="<?= e($cat['href']) ?>">
                        <div class="relative w-full aspect-[4/3] bg-white border-b border-border-hairline overflow-hidden">
                            <img
                                alt="<?= e($cat['name_id'] . ' — ' . $cat['name_en']) ?>"
                                class="w-full h-full object-contain motion-safe:group-hover:scale-[1.03] transition-transform duration-300"
                                loading="lazy"
                                src="<?= e($cat['img']) ?>"
                            />
                        </div>
                        <div class="p-6 bg-white flex-1 flex flex-col justify-between gap-4">
                            <div class="space-y-2.5">
                                <div class="flex items-center justify-between gap-2">
                                    <div class="inline-flex items-center gap-2">
                                        <div aria-hidden="true" class="w-8 h-8 rounded-lg bg-surface-blue border border-primary/15 flex items-center justify-center text-primary-container group-hover:bg-primary-container group-hover:text-white group-hover:border-primary-container transition-colors">
                                            <span class="material-symbols-outlined text-[18px]"><?= e($cat['icon']) ?></span>
                                        </div>
                                        <span class="text-[11px] font-mono font-semibold uppercase tracking-wider text-primary">
                                            <?= e($cat['name_en']) ?>
                                        </span>
                                    </div>
                                    <span class="font-mono text-[11px] font-bold text-primary-container bg-[#F4F9FD] border border-[#DCE7F2] px-2 py-0.5 rounded">
                                        <?= e($cat['num']) ?>
                                    </span>
                                </div>
                                <h3 class="text-headline-sm-mobile lg:text-headline-sm font-headline-sm font-bold text-text-body group-hover:text-primary-container transition-colors leading-snug">
                                    <?= e($cat['name_id']) ?>
                                </h3>
                                <p class="text-body-default font-body-default text-text-muted text-sm leading-relaxed line-clamp-2">
                                    <?= e($cat['short_desc']) ?>
                                </p>
                            </div>
                            <div class="pt-3.5 border-t border-border-hairline flex items-center justify-between gap-2 text-xs font-medium text-text-muted">
                                <span class="truncate"><?= e(implode(', ', array_slice($cat['examples'], 0, 3))) ?></span>
                                <span class="text-primary-container font-semibold inline-flex items-center gap-1 shrink-0"><?= e($cat['cta']) ?> <span aria-hidden="true" class="material-symbols-outlined text-sm group-hover:translate-x-0.5 transition-transform">arrow_forward</span></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <!-- Kartu Penutup Grid 3x4: Akses Katalog & Penawaran Resmi -->
                <div class="relative overflow-hidden bg-primary-container text-white border border-primary/20 rounded-xl p-6 shadow-sm flex flex-col justify-between">
                    <?= render_section_decor('banner-waves', 'right-0 bottom-0 z-0 opacity-80') ?>
                    <div class="relative z-10 space-y-3">
                        <div class="inline-flex items-center gap-2 text-[11px] font-mono font-semibold uppercase tracking-wider text-[#CFE5FF] bg-white/10 border border-white/20 px-2.5 py-1 rounded">
                            <span>Katalog Lengkap 01–11</span>
                        </div>
                        <h3 class="text-headline-sm-mobile lg:text-headline-sm font-headline-sm font-bold text-white leading-snug">
                            Butuh Daftar Harga atau Tipe Spesifik?
                        </h3>
                        <p class="text-white/90 text-sm leading-relaxed">
                            Buka katalog lengkap 11 kategori dengan rincian merek &amp; spesifikasi teknis, atau langsung tanyakan ketersediaan tipe unit kepada tim kami.
                        </p>
                    </div>
                    <div class="relative z-10 pt-5 mt-5 border-t border-white/20 flex flex-col gap-2.5">
                        <a class="inline-flex items-center justify-center gap-2 h-11 px-4 rounded-lg bg-white hover:bg-surface-blue text-primary font-action-button font-semibold text-sm transition-colors" href="<?= e(app_url('/produk')) ?>">
                            <span>Buka Halaman Katalog</span>
                            <span aria-hidden="true" class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                        <a class="inline-flex items-center justify-center gap-2 h-10 px-4 rounded-lg border border-white/35 bg-white/10 hover:bg-white/20 text-white font-action-button font-medium text-xs transition-colors" href="https://wa.me/6282118075560?text=Halo%20Dunia%20Pool%20%26%20Pond%2C%20saya%20ingin%20tanya%20harga%20dan%20ketersediaan%20peralatan%20kolam%20renang." rel="noopener noreferrer" target="_blank">
                            <span aria-hidden="true" class="material-symbols-outlined text-base">chat</span>
                            <span>Tanya Harga via WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PILIHAN MEREK PERALATAN -->
    <section class="relative overflow-hidden py-16 lg:py-20 bg-[#E7F2FB] border-b border-border-hairline reveal-item">
        <div aria-hidden="true" class="pattern-halftone-bl pointer-events-none absolute left-0 bottom-0 w-64 h-48 z-0"></div>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="bg-white border border-border-hairline rounded-xl p-6 md:p-8 shadow-sm">
                <div class="mb-5">
                    <h2 class="text-headline-sm-mobile lg:text-headline-sm font-headline-sm font-bold text-text-body">
                        Daftar 15 Merek Peralatan &amp; Material Pengadaan
                    </h2>
                    <p class="text-xs text-text-muted mt-1">
                        Peralatan sirkulasi, pompa, filter, keramik, serta mozaik kolam renang dari merek pengadaan resmi.
                    </p>
                </div>
                <?= render_brand_logo_grid($brands) ?>
                <p class="text-xs text-text-muted mt-5">
                    *Pilihan dan ketersediaan menyesuaikan produk. Hubungi kami untuk konfirmasi ketersediaan tipe spesifik.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION FAQ -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-white border-b border-border-hairline reveal-item" id="faq">
        <?= render_section_decor('hex-mesh', 'right-0 top-0 opacity-65 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-start">
                <div class="lg:col-span-5 lg:sticky lg:top-28 space-y-6">
                    <div>
                        <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest mb-3">
                            <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                            <span>Tanya Jawab</span>
                        </div>
                        <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body text-balance">
                            Pertanyaan yang Sering Diajukan
                        </h2>
                        <p class="text-body-default font-body-default text-text-muted mt-2">
                            Informasi ringkas seputar konsultasi proyek, spesifikasi mesin hidrolika, dan cakupan layanan kami.
                        </p>
                    </div>
                    <div class="relative overflow-hidden bg-primary-container text-white rounded-xl p-6 border border-primary/20 shadow-sm">
                        <?= render_section_decor('banner-waves', 'right-0 bottom-0 opacity-75 z-0') ?>
                        <div class="relative z-10 space-y-4">
                            <div class="text-[11px] font-mono font-bold uppercase tracking-widest text-primary-fixed">
                                Meja Konsultasi Teknis
                            </div>
                            <h3 class="font-headline-sm text-lg font-bold text-white leading-snug">
                                Membutuhkan Kalkulasi Debit &amp; Spesifikasi Khusus?
                            </h3>
                            <p class="text-xs text-white/90 leading-relaxed">
                                Pelajari perbandingan sistem skimmer vs overflow atau hubungi langsung tim teknisi kami untuk evaluasi ukuran lahan Anda.
                            </p>
                            <div class="flex flex-col sm:flex-row lg:flex-col gap-2.5 pt-1">
                                <a class="inline-flex items-center justify-center gap-2 bg-white hover:bg-surface-blue text-primary text-sm font-semibold h-11 px-4 rounded-lg transition-colors" href="https://wa.me/6282118075560?text=Halo%20Dunia%20Pool%20%26%20Pond,%20saya%20ingin%20tanya%20konsultasi%20teknis%20kolam%20renang" rel="noopener noreferrer" target="_blank">
                                    <span aria-hidden="true" class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Tanya Teknisi via WhatsApp</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-2 bg-white/15 hover:bg-white/25 text-white border border-white/25 text-sm font-medium h-11 px-4 rounded-lg transition-colors" href="<?= e(app_url('/layanan')) ?>">
                                    <span aria-hidden="true" class="material-symbols-outlined text-[18px]">water_drop</span>
                                    <span>Buka Panduan Hidrolika</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 border border-border-hairline rounded-xl divide-y divide-border-hairline overflow-hidden bg-white shadow-sm">
                    <?php foreach ($faqs as $faq): ?>
                        <details class="group bg-white transition-colors duration-150">
                            <summary class="flex justify-between items-center cursor-pointer p-6 text-text-body font-headline-sm text-base lg:text-lg font-semibold list-none select-none hover:bg-[#F7FAFC] focus:outline-none focus:bg-surface-blue gap-4">
                                <span><?= e($faq['q']) ?></span>
                                <span aria-hidden="true" class="material-symbols-outlined text-text-muted group-open:rotate-180 group-open:text-primary transition-transform duration-150 shrink-0">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 text-text-muted text-body-default leading-relaxed pt-1 bg-white">
                                <?= e($faq['a']) ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION KONSULTASI & FORMULIR WHATSAPP INTERAKTIF -->
    <section class="relative overflow-hidden py-20 lg:py-24 bg-gradient-to-br from-[#E6F2FB] via-[#EDF6FD] to-[#DDEDF9] border-b border-border-hairline reveal-item" id="konsultasi">
        <div aria-hidden="true" class="pattern-halftone-tr pointer-events-none absolute right-0 top-0 w-80 h-60 z-0"></div>
        <?= render_section_decor('dot-wave', 'left-0 bottom-0 opacity-85 z-0') ?>
        <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-5 space-y-6" id="kontak">
                    <div class="inline-flex items-center gap-2.5 text-primary text-xs font-bold uppercase tracking-widest">
                        <span aria-hidden="true" class="w-6 h-[2px] bg-primary-container"></span>
                        <span>Hubungi Spesialis</span>
                    </div>
                    <h2 class="text-headline-md-mobile lg:text-headline-md font-headline-md text-text-body text-balance">
                        Mulai Rencanakan Kebutuhan Kolam Anda
                    </h2>
                    <p class="text-body-default font-body-default text-text-muted">
                        Sampaikan rincian kebutuhan pekerjaan atau spesifikasi peralatan yang Anda cari. Kami akan memverifikasi kebutuhan teknis secara langsung.
                    </p>
                    <div class="space-y-4 pt-4 border-t border-border-hairline">
                        <div class="flex items-start gap-3">
                            <div aria-hidden="true" class="w-10 h-10 rounded-lg bg-white border border-border-hairline flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-xl">call</span>
                            </div>
                            <div>
                                <p class="text-xs text-text-muted font-medium">Nomor Resmi (Telepon / WhatsApp):</p>
                                <p class="text-base font-bold text-text-body">0821-1807-5560</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div aria-hidden="true" class="w-10 h-10 rounded-lg bg-white border border-border-hairline flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-xl">location_on</span>
                            </div>
                            <div>
                                <p class="text-xs text-text-muted font-medium">Alamat &amp; Lokasi Usaha:</p>
                                <p class="text-base font-semibold text-text-body">Padalarang, Kabupaten Bandung Barat, Jawa Barat</p>
                                <p class="text-xs text-text-muted mt-0.5 leading-relaxed">Gg. Karya Bakti No. 24, RT.05/RW.22, Kertamulya, Kec. Padalarang, Kab. Bandung Barat 40553</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div aria-hidden="true" class="w-10 h-10 rounded-lg bg-white border border-border-hairline flex items-center justify-center text-primary shrink-0">
                                <span class="material-symbols-outlined text-xl">history</span>
                            </div>
                            <div>
                                <p class="text-xs text-text-muted font-medium">Operasional &amp; Pengalaman:</p>
                                <p class="text-base font-semibold text-text-body">Sejak 10 Agustus 1997 (27+ Tahun)</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-white border border-border-hairline rounded-xl text-xs text-text-muted leading-relaxed">
                        <strong>Catatan Teknis:</strong> Komunikasi langsung ditangani melalui sambungan resmi WhatsApp tanpa perantara. Data yang dimasukkan ke form di samping hanya digunakan untuk menyiapkan draf pesan terstruktur.
                    </div>
                    <!-- Peta Lokasi & Tautan Google Maps Bisnis -->
                    <div class="bg-white border border-border-hairline rounded-xl overflow-hidden shadow-sm">
                        <div class="aspect-[16/9] w-full bg-surface-blue border-b border-border-hairline overflow-hidden">
                            <iframe
                                allowfullscreen=""
                                class="w-full h-full border-0"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed?origin=mfe&amp;pb=!1m3!2m1!1sAlat+Kolam+Renang+Bandung+Barat,+Padalarang!6i15!3m1!1sid!5m1!1sid"
                                title="Peta Lokasi Alat Kolam Renang Bandung Barat — Padalarang"
                            ></iframe>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex items-start gap-2.5">
                                <span aria-hidden="true" class="material-symbols-outlined text-lg text-primary-container shrink-0 mt-0.5">storefront</span>
                                <div class="min-w-0">
                                    <p class="text-sm font-bold text-text-body leading-snug">Alat Kolam Renang Bandung Barat</p>
                                    <p class="text-xs text-text-muted mt-0.5 leading-relaxed">
                                        Gg. Karya Bakti No. 24, RT.05/RW.22, Kertamulya, Kec. Padalarang, Kab. Bandung Barat, Jawa Barat 40553
                                    </p>
                                </div>
                            </div>
                            <a
                                class="w-full inline-flex items-center justify-between gap-2 px-3.5 py-2.5 rounded-lg bg-[#F4F9FD] hover:bg-primary-container text-primary-container hover:text-white border border-[#DCE7F2] hover:border-primary-container text-xs font-semibold transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container"
                                href="https://www.google.com/maps/place/Alat+Kolam+Renang+Bandung+Barat/data=!4m2!3m1!1s0x2e68e331a6058d93:0x6f8552486c06e786?sa=X&amp;ved=1t:242&amp;hl=id&amp;ictx=111"
                                rel="noopener noreferrer"
                                target="_blank"
                            >
                                <span class="inline-flex items-center gap-1.5">
                                    <span aria-hidden="true" class="material-symbols-outlined text-base">map</span>
                                    <span>Buka di Google Maps Bisnis</span>
                                </span>
                                <span aria-hidden="true" class="material-symbols-outlined text-base">open_in_new</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 bg-white border border-border-hairline rounded-xl p-6 lg:p-8 shadow-sm">
                    <div class="border-b border-border-hairline pb-4 mb-6 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                        <div>
                            <h3 class="font-headline-sm font-bold text-text-body text-lg">Formulir Konsultasi &amp; Survei Teknis</h3>
                            <p class="text-xs text-text-muted mt-0.5">Isi ringkas spesifikasi atau kendala kolam untuk estimasi tim teknis</p>
                        </div>
                        <span class="font-mono text-[11px] font-semibold uppercase tracking-wider text-primary bg-surface-secondary border border-border-hairline px-2.5 py-1 rounded self-start sm:self-auto shrink-0">
                            WhatsApp Resmi
                        </span>
                    </div>
                    <form class="space-y-5" id="waForm" onsubmit="event.preventDefault(); handleSubmitWhatsApp();">
                        <div>
                            <label class="block text-label-ui font-label-ui text-text-body mb-2 font-medium" for="fullName">
                                Nama Lengkap <span class="text-feedback-error">*</span>
                            </label>
                            <input class="w-full h-12 px-4 rounded-lg bg-bg-canvas border border-border-control text-text-body font-body-default placeholder:text-text-muted" id="fullName" placeholder="Contoh: Budi Santoso" required="" type="text" />
                            <p class="text-feedback-error text-xs mt-1 hidden" id="errName">Mohon isi nama lengkap Anda (minimal 2 karakter).</p>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-label-ui font-label-ui text-text-body mb-2 font-medium" for="needType">
                                    Pilihan Kebutuhan <span class="text-feedback-error">*</span>
                                </label>
                                <select class="w-full h-12 px-4 rounded-lg bg-bg-canvas border border-border-control text-text-body font-body-default" id="needType">
                                    <option value="Jasa Konstruksi Kolam Baru">Jasa Konstruksi Baru</option>
                                    <option value="Jasa Renovasi &amp; Perbaikan">Renovasi &amp; Perbaikan</option>
                                    <option value="Perawatan Berkala / Kimia">Perawatan &amp; Air</option>
                                    <option value="Pembelian Peralatan / Mesin">Pembelian Peralatan</option>
                                    <option value="Konsultasi Teknis Lainnya">Konsultasi Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-label-ui font-label-ui text-text-body mb-2 font-medium" for="relatedService">
                                    Layanan / Tipe Kolam
                                </label>
                                <input class="w-full h-12 px-4 rounded-lg bg-bg-canvas border border-border-control text-text-body font-body-default placeholder:text-text-muted" id="relatedService" placeholder="Contoh: Sistem Overflow / Sand Filter" type="text" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-label-ui font-label-ui text-text-body mb-2 font-medium" for="location">
                                Kota / Lokasi Proyek
                            </label>
                            <input class="w-full h-12 px-4 rounded-lg bg-bg-canvas border border-border-control text-text-body font-body-default placeholder:text-text-muted" id="location" placeholder="Contoh: Bandung Barat / Lembang" type="text" />
                        </div>
                        <div>
                            <label class="block text-label-ui font-label-ui text-text-body mb-2 font-medium" for="userMessage">
                                Pesan / Uraian Kebutuhan <span class="text-feedback-error">*</span>
                            </label>
                            <textarea class="w-full p-4 rounded-lg bg-bg-canvas border border-border-control text-text-body font-body-default placeholder:text-text-muted" id="userMessage" placeholder="Jelaskan kebutuhan Anda, seperti ukuran lahan perkiraan, kendala kebocoran, atau spesifikasi tipe pompa yang dicari..." required="" rows="4"></textarea>
                            <p class="text-feedback-error text-xs mt-1 hidden" id="errMsg">Tuliskan kebutuhan Anda minimal 10 karakter.</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 pt-2">
                            <button class="flex-1 inline-flex items-center justify-center gap-2 bg-primary-container hover:bg-action-hover text-white font-action-button text-action-button h-12 px-6 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 font-semibold shadow-sm" type="submit">
                                <span aria-hidden="true" class="material-symbols-outlined text-lg">chat</span>
                                <span>Lanjutkan ke WhatsApp</span>
                            </button>
                            <button class="inline-flex items-center justify-center gap-2 bg-surface-secondary hover:bg-surface-blue text-text-body border border-border-hairline font-action-button text-action-button h-12 px-5 rounded-lg transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container font-medium" onclick="copyFormattedMessage()" type="button">
                                <span aria-hidden="true" class="material-symbols-outlined text-lg">content_copy</span>
                                <span>Salin Pesan</span>
                            </button>
                        </div>
                        <div class="pt-2">
                            <p class="text-xs text-text-muted">
                                Formulir ini menyiapkan pesan. Anda tetap perlu menekan Kirim di WhatsApp.
                            </p>
                            <p class="text-xs text-feedback-success font-medium mt-1.5 hidden" id="copyAlert">
                                <span aria-hidden="true" class="material-symbols-outlined text-sm align-text-bottom mr-1">check_circle</span>Teks pesan berhasil disalin ke papan klip.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
$pageScripts = <<<'HTML'
<script>
    function buildWhatsAppMessage() {
        const name = document.getElementById('fullName').value.trim();
        const need = document.getElementById('needType').value;
        const related = document.getElementById('relatedService').value.trim();
        const location = document.getElementById('location').value.trim();
        const message = document.getElementById('userMessage').value.trim();

        let text = "Halo Dunia Pool & Pond,\n\n";
        text += `Nama: ${name}\n`;
        text += `Kebutuhan: ${need}\n`;
        if (related) text += `Layanan/Produk Terkait: ${related}\n`;
        if (location) text += `Lokasi Proyek: ${location}\n`;
        text += `\nPesan:\n${message}\n\n`;
        text += "Referensi: Website Resmi duniapoolnpond.id";
        return text;
    }

    function validateForm() {
        const name = document.getElementById('fullName').value.trim();
        const message = document.getElementById('userMessage').value.trim();
        let isValid = true;

        const errName = document.getElementById('errName');
        const errMsg = document.getElementById('errMsg');

        if (name.length < 2) {
            errName.classList.remove('hidden');
            isValid = false;
        } else {
            errName.classList.add('hidden');
        }

        if (message.length < 10) {
            errMsg.classList.remove('hidden');
            isValid = false;
        } else {
            errMsg.classList.add('hidden');
        }

        return isValid;
    }

    function handleSubmitWhatsApp() {
        if (!validateForm()) return;
        const text = buildWhatsAppMessage();
        const encoded = encodeURIComponent(text);
        const url = `https://wa.me/6282118075560?text=${encoded}`;
        window.open(url, '_blank', 'noopener,noreferrer');
    }

    function copyFormattedMessage() {
        if (!validateForm()) return;
        const text = buildWhatsAppMessage();
        const alertBox = document.getElementById('copyAlert');

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(text).then(() => {
                alertBox.classList.remove('hidden');
                setTimeout(() => alertBox.classList.add('hidden'), 4000);
            }).catch(() => {
                promptCopyFallback(text);
            });
        } else {
            promptCopyFallback(text);
        }
    }

    function promptCopyFallback(text) {
        window.prompt("Salin teks berikut secara manual:", text);
    }
</script>
HTML;

require __DIR__ . '/../includes/footer.php';

