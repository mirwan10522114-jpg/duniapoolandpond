<?php

declare(strict_types=1);

$pageTitle = 'Layanan Sistem Sirkulasi & Filtrasi Kolam Renang | Dunia Pool & Pond';
$activePage = 'layanan';

require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
?>
<!-- Breadcrumb & Page Header Section -->
<section class="relative overflow-hidden border-b border-border-hairline bg-gradient-to-br from-[#EAF4FC] via-[#E3F0FA] to-[#EDF6FD] grid-architectural py-10 lg:py-14">
    <div aria-hidden="true" class="pattern-halftone-tr pointer-events-none absolute right-0 top-0 w-72 h-52 z-0"></div>
    <?= render_section_decor('dot-wave', 'right-0 bottom-0 opacity-80 z-0') ?>
    <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
        <nav aria-label="Breadcrumb" class="mb-5">
            <ol class="flex items-center space-x-2 text-label-ui font-label-ui text-text-muted text-sm">
                <li>
                    <a class="hover:text-primary transition-colors duration-150 flex items-center" href="<?= e(app_url('/')) ?>">
                        <span class="material-symbols-outlined text-base mr-1">home</span>
                        Beranda
                    </a>
                </li>
                <li class="flex items-center text-outline-variant">/</li>
                <li>
                    <a class="hover:text-primary transition-colors duration-150" href="<?= e(app_url('/#layanan')) ?>">Layanan</a>
                </li>
                <li class="flex items-center text-outline-variant">/</li>
                <li aria-current="page" class="text-text-body font-semibold truncate">Sistem Sirkulasi &amp; Filtrasi</li>
            </ol>
        </nav>
        <div class="inline-flex items-center px-3 py-1 rounded bg-white shadow-sm border border-primary/20 text-primary font-label-ui text-label-ui mb-4">
            <span class="material-symbols-outlined mr-1.5 text-base text-primary">water_drop</span>
            Layanan Hidrolika &amp; Mekanikal Kolam
        </div>
        <h1 class="text-headline-lg-mobile lg:text-headline-lg font-headline-lg text-text-body tracking-tight mb-4 max-w-4xl">
            Layanan Sistem Sirkulasi &amp; Filtrasi Kolam Renang
        </h1>
        <p class="text-body-lead-mobile lg:text-body-lead font-body-lead text-text-muted max-w-4xl leading-relaxed">
            Perancangan, instalasi, dan kalkulasi hidrolika pipa sirkulasi, sand filter, pompa efisiensi tinggi, skimmer box, hingga sistem overflow dan balancing tank untuk menjamin perputaran air kolam jernih, higienis, dan minim hambatan tekanan (friction loss).
        </p>
    </div>
</section>

<!-- Main Content Section -->
<main class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-12 lg:py-16" id="main-content" style="background-image: linear-gradient(to right, rgba(213, 226, 236, 0.25) 1px, transparent 1px), linear-gradient(rgba(213, 226, 236, 0.25) 1px, transparent 1px); background-size: 64px 64px;">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        <!-- KOLOM KIRI -->
        <div class="lg:col-span-8 space-y-12">
            <div class="border border-border-hairline rounded-xl overflow-hidden bg-bg-canvas">
                <div class="aspect-[16/9] w-full overflow-hidden bg-surface-blue">
                    <img alt="Ruang Mesin Pompa &amp; Sistem Filtrasi Kolam Renang" class="w-full h-full object-cover" src="<?= e(resolve_image('images/layanan/ruang-mesin', 'https://lh3.googleusercontent.com/aida-public/AB6AXuA1TvwhB5TwHkTq4hlqo-jEoNyR0hr6syOmVWylLaEPG4F2y238npPCXRYbeC3yh3MSDBNo77Zj6Iw73LAObFUf2Job1f_gCatERmuYLCIlELJKmiYgBb5E5MlLz-RgJF7bgbim_xf7EhjPhEKpcqKoeecKUyyV9kKG3FoMN8H2OnqnL17MK_VRj6wQuUKoVNvxjTaegr9WMeoUvdWrtK46Xz2Z0Z1C76SnS4zBzGQ', true)) ?>" />
                </div>
                <div class="p-6 bg-bg-canvas border-t border-border-hairline flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <p class="font-headline-sm text-headline-sm text-text-body text-base font-semibold">Ruang Mesin Terintegrasi Standar Hidrolika</p>
                        <p class="font-body-default text-text-muted text-sm mt-0.5">Penataan pipa suction, discharge, manifold valve, dan filtrasi bertekanan terkalibrasi.</p>
                    </div>
                    <div class="inline-flex items-center px-3 py-1 rounded bg-surface-secondary border border-border-hairline text-text-body font-label-ui text-xs whitespace-nowrap">
                        <span class="material-symbols-outlined text-feedback-success text-sm mr-1.5" style="font-variation-settings: 'FILL' 1;">verified</span>
                        Standar DIN &amp; ASTM D1785
                    </div>
                </div>
            </div>

            <div class="p-6 md:p-8 rounded-xl border border-border-hairline bg-surface-secondary">
                <h2 class="font-headline-sm text-headline-sm text-text-body mb-3">
                    Mengapa Hidrolika Sirkulasi yang Tepat Sangat Krusial?
                </h2>
                <p class="font-body-default text-body-default text-text-muted leading-relaxed mb-4">
                    Banyak kolam renang mengalami masalah air keruh kronis atau penggunaan bahan kimia berlebihan bukan karena kekurangan disinfektan, melainkan akibat <span class="font-semibold text-text-body">kesalahan kalkulasi debit hidrolika (flow rate)</span> dan hambatan gesekan (friction loss) pipa. Pipa yang terlalu kecil memaksa motor pompa bekerja di luar efisiensi beban terbaiknya, memicu kavitasi mekanis, panas berlebih, dan boros daya listrik.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-lg bg-bg-canvas border border-border-hairline">
                        <span class="material-symbols-outlined text-primary mb-2">water_lux</span>
                        <h3 class="font-headline-sm text-sm font-semibold text-text-body mb-1">Kejernihan Kristal</h3>
                        <p class="font-body-default text-xs text-text-muted">Turnover 4-6 jam menjamin 100% volume air tersaring sempurna tanpa area mati (dead spots).</p>
                    </div>
                    <div class="p-4 rounded-lg bg-bg-canvas border border-border-hairline">
                        <span class="material-symbols-outlined text-primary mb-2">bolt</span>
                        <h3 class="font-headline-sm text-sm font-semibold text-text-body mb-1">Hemat Listrik Pompa</h3>
                        <p class="font-body-default text-xs text-text-muted">Diameter pipa terukur mereduksi beban head tekanan, menghemat konsumsi kWh hingga 30%.</p>
                    </div>
                    <div class="p-4 rounded-lg bg-bg-canvas border border-border-hairline">
                        <span class="material-symbols-outlined text-primary mb-2">hourglass_top</span>
                        <h3 class="font-headline-sm text-sm font-semibold text-text-body mb-1">Keawetan Media Filter</h3>
                        <p class="font-body-default text-xs text-text-muted">Laju backwash dan filtration velocity seimbang menjaga pasir silika atau AFM tidak cepat mengeras.</p>
                    </div>
                </div>
            </div>

            <!-- 4 Pilar Pekerjaan -->
            <div>
                <div class="mb-6">
                    <span class="font-label-ui text-label-ui text-primary font-semibold uppercase tracking-wider text-xs">Lingkup Rekayasa Teknik</span>
                    <h2 class="font-headline-md-mobile lg:font-headline-md text-headline-md text-text-body mt-1">
                        4 Pilar Pekerjaan Sistem Sirkulasi &amp; Filtrasi
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="p-6 rounded-xl border border-border-hairline bg-bg-canvas flex flex-col justify-between relative overflow-hidden shadow-sm hover:border-primary/40 transition duration-150">
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-secondary-container"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-10 h-10 rounded-lg bg-surface-blue flex items-center justify-center text-primary font-semibold font-headline-sm text-sm border border-border-hairline">01</div>
                                <span class="text-[11px] font-mono text-text-muted bg-surface-secondary px-2 py-0.5 rounded border border-border-hairline">Kalkulasi TDH</span>
                            </div>
                            <h3 class="font-headline-sm text-lg font-semibold text-text-body mb-2">Kalkulasi Turnover Rate &amp; TDH</h3>
                            <p class="font-body-default text-sm text-text-muted leading-relaxed">
                                Perhitungan matematis debit sirkulasi (<span class="text-text-body font-mono font-medium">m³/jam</span>) berdasarkan kubikasi total air kolam. Dilengkapi kalkulasi <span class="italic text-text-body">Total Dynamic Head (TDH)</span> yang memperhitungkan rugi gesek sambungan elbow, tee, check valve, dan elevasi ruang mesin untuk efisiensi motor pompa.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-border-hairline flex items-center text-xs font-label-ui text-text-muted">
                            <span class="material-symbols-outlined text-primary text-base mr-1.5">calculate</span>
                            Metode: Standar Hydraulic Institute
                        </div>
                    </div>
                    <div class="p-6 rounded-xl border border-border-hairline bg-bg-canvas flex flex-col justify-between relative overflow-hidden shadow-sm hover:border-primary/40 transition duration-150">
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-secondary-container"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-10 h-10 rounded-lg bg-surface-blue flex items-center justify-center text-primary font-semibold font-headline-sm text-sm border border-border-hairline">02</div>
                                <span class="text-[11px] font-mono text-text-muted bg-surface-secondary px-2 py-0.5 rounded border border-border-hairline">Media Sand/AFM</span>
                            </div>
                            <h3 class="font-headline-sm text-lg font-semibold text-text-body mb-2">Instalasi Pompa &amp; Sand/Cartridge Filter</h3>
                            <p class="font-body-default text-sm text-text-muted leading-relaxed">
                                Penyelarasan kapasitas tabung filter (bobot pasir silika grade 16/30 atau Activated Glass Media) dengan kurva daya pompa (HP / kW). Pemasangan fondasi peredam getaran (anti-vibration pad) untuk meredam resonansi mesin pada bangunan.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-border-hairline flex items-center text-xs font-label-ui text-text-muted">
                            <span class="material-symbols-outlined text-primary text-base mr-1.5">filter_alt</span>
                            Kompatibilitas: Silica Sand &amp; AFM Glass
                        </div>
                    </div>
                    <div class="p-6 rounded-xl border border-border-hairline bg-bg-canvas flex flex-col justify-between relative overflow-hidden shadow-sm hover:border-primary/40 transition duration-150">
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-secondary-container"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-10 h-10 rounded-lg bg-surface-blue flex items-center justify-center text-primary font-semibold font-headline-sm text-sm border border-border-hairline">03</div>
                                <span class="text-[11px] font-mono text-text-muted bg-surface-secondary px-2 py-0.5 rounded border border-border-hairline">Jalur Pipa AW</span>
                            </div>
                            <h3 class="font-headline-sm text-lg font-semibold text-text-body mb-2">Perpipaan Hidrolis (Skimmer &amp; Overflow)</h3>
                            <p class="font-body-default text-sm text-text-muted leading-relaxed">
                                Pemasangan rangkaian jalur suction (main drain, skimmer box, vacuum line) dan pipa discharge (return inlet jet nozzle). Untuk sistem overflow, integrasi sistem pemipaan gutter gravitasi menuju balancing tank dengan jalur hisap balancing otomatis.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-border-hairline flex items-center text-xs font-label-ui text-text-muted">
                            <span class="material-symbols-outlined text-primary text-base mr-1.5">plumbing</span>
                            Pipa PVC AW High Pressure Class
                        </div>
                    </div>
                    <div class="p-6 rounded-xl border border-border-hairline bg-bg-canvas flex flex-col justify-between relative overflow-hidden shadow-sm hover:border-primary/40 transition duration-150">
                        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-primary to-secondary-container"></div>
                        <div>
                            <div class="flex items-center justify-between mb-4">
                                <div class="w-10 h-10 rounded-lg bg-surface-blue flex items-center justify-center text-primary font-semibold font-headline-sm text-sm border border-border-hairline">04</div>
                                <span class="text-[11px] font-mono text-text-muted bg-surface-secondary px-2 py-0.5 rounded border border-border-hairline">Anti-Entrapment</span>
                            </div>
                            <h3 class="font-headline-sm text-lg font-semibold text-text-body mb-2">Fitting Distribusi &amp; Anti-Vortex Safety</h3>
                            <p class="font-body-default text-sm text-text-muted leading-relaxed">
                                Pemasangan main drain bersertifikasi anti-vortex (mencegah bahaya sedotan pusaran bagi perenang), eyeball adjustable return inlet terarah, foot valve non-return, serta true-union ball valve berbahan PVC tahan zat klorin pekat.
                            </p>
                        </div>
                        <div class="mt-4 pt-4 border-t border-border-hairline flex items-center text-xs font-label-ui text-text-muted">
                            <span class="material-symbols-outlined text-primary text-base mr-1.5">shield</span>
                            Keamanan: Perlindungan Anti-Entrapment
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel Komparasi Skimmer vs Overflow -->
            <div class="border border-border-hairline rounded-xl bg-bg-canvas overflow-hidden">
                <div class="p-6 border-b border-border-hairline bg-surface-secondary">
                    <span class="font-label-ui text-label-ui text-primary font-semibold uppercase tracking-wider text-xs">Panduan Pemilihan</span>
                    <h2 class="font-headline-sm text-headline-sm text-text-body mt-1">Komparasi Teknis: Sistem Skimmer vs Sistem Overflow</h2>
                    <p class="font-body-default text-sm text-text-muted mt-1">
                        Tentukan jenis sirkulasi yang tepat sesuai ketersediaan lahan, anggaran konstruksi, dan preferensi visual arsitektur Anda.
                    </p>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-sm font-body-default">
                        <thead>
                            <tr class="border-b border-border-hairline bg-gradient-to-r from-surface-blue to-surface-secondary">
                                <th class="p-4 font-headline-sm text-xs font-bold text-text-body tracking-wider uppercase w-1/4">Parameter Rekayasa</th>
                                <th class="p-4 font-headline-sm text-xs font-bold text-primary tracking-wider uppercase w-3/8">
                                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-white shadow-sm border border-border-hairline text-primary">
                                        <span class="material-symbols-outlined text-xs">check_circle</span> Sistem Skimmer Box
                                    </div>
                                </th>
                                <th class="p-4 font-headline-sm text-xs font-bold text-tertiary tracking-wider uppercase w-3/8">
                                    <div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-white shadow-sm border border-border-hairline text-tertiary">
                                        <span class="material-symbols-outlined text-xs">waves</span> Sistem Overflow / Semi-Overflow
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-border-hairline text-text-muted">
                            <tr class="hover:bg-surface-secondary/20 transition-colors duration-150">
                                <td class="p-4 font-semibold text-text-body bg-surface-secondary/50">Level Permukaan Air</td>
                                <td class="p-4">10–15 cm di bawah top bibir kolam (coping stone).</td>
                                <td class="p-4 font-medium text-text-body">Rata sempurna dengan bibir kolam atau tumpah ke dinding (infinity edge).</td>
                            </tr>
                            <tr class="hover:bg-surface-secondary/20 transition-colors duration-150">
                                <td class="p-4 font-semibold text-text-body bg-surface-secondary/50">Kebutuhan Ruang &amp; Tangki</td>
                                <td class="p-4">Tidak memerlukan Balancing Tank. Ruang mesin lebih kompak.</td>
                                <td class="p-4">Wajib memiliki Balancing Tank (kapasitas 8-12% total volume kolam).</td>
                            </tr>
                            <tr class="hover:bg-surface-secondary/20 transition-colors duration-150">
                                <td class="p-4 font-semibold text-text-body bg-surface-secondary/50">Saluran Limpahan (Gutter)</td>
                                <td class="p-4">Tidak ada selokan limpahan, cukup kotak skimmer di dinding kolam.</td>
                                <td class="p-4">Dilengkapi parit gutter penampung di sepanjang sisi kolam dengan grill penutup.</td>
                            </tr>
                            <tr class="hover:bg-surface-secondary/20 transition-colors duration-150">
                                <td class="p-4 font-semibold text-text-body bg-surface-secondary/50">Kecepatan Pembersihan Permukaan</td>
                                <td class="p-4">Efektif pada radius hisap kotak skimmer.</td>
                                <td class="p-4">Sangat cepat dan merata ke seluruh keliling bibir kolam.</td>
                            </tr>
                            <tr class="hover:bg-surface-secondary/20 transition-colors duration-150">
                                <td class="p-4 font-semibold text-text-body bg-surface-secondary/50">Investasi &amp; Kompleksitas Pipa</td>
                                <td class="p-4 text-feedback-success font-medium bg-feedback-success/5">Ekonomis, jalur perpipaan simpel, minim evaporasi.</td>
                                <td class="p-4">Investasi lebih tinggi karena volume galian, beton balancing, dan pipa manifold.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 5 Tahap Prosedur -->
            <div>
                <div class="mb-6">
                    <span class="font-label-ui text-label-ui text-primary font-semibold uppercase tracking-wider text-xs">Standard Operating Procedure</span>
                    <h2 class="font-headline-md-mobile lg:font-headline-md text-headline-md text-text-body mt-1">
                        5 Tahapan Prosedur Pengerjaan &amp; Pengujian Hidrolis
                    </h2>
                    <p class="font-body-default text-text-muted mt-1">
                        Setiap proyek dikerjakan berdasarkan kaidah mekanikal-hidrolika terukur untuk mencegah risiko pipa pecah atau kebocoran di bawah struktur beton.
                    </p>
                </div>
                <div class="space-y-4">
                    <div class="flex items-start p-5 rounded-xl border border-border-hairline bg-bg-canvas">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-surface-blue text-primary font-headline-sm font-semibold flex items-center justify-center mr-4 text-sm">1</div>
                        <div>
                            <h3 class="font-headline-sm text-base font-semibold text-text-body mb-1">Tahap 1: Analisis Debit &amp; Volume Air</h3>
                            <p class="font-body-default text-sm text-text-muted">Menentukan kapasitas kubikasi riil kolam renang, kecepatan aliran filtrasi yang diizinkan (filtration rate ≤ 50 m³/h/m²), serta penentuan target siklus perputaran air (turnover time).</p>
                        </div>
                    </div>
                    <div class="flex items-start p-5 rounded-xl border border-border-hairline bg-bg-canvas">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-surface-blue text-primary font-headline-sm font-semibold flex items-center justify-center mr-4 text-sm">2</div>
                        <div>
                            <h3 class="font-headline-sm text-base font-semibold text-text-body mb-1">Tahap 2: Skematik Jalur Pipa &amp; Valve Manifold</h3>
                            <p class="font-body-default text-sm text-text-muted">Penyusunan gambar kerja isometrik perpipaan lengkap dengan penataan arah slope kemiringan pipa gravitasi dan posisi manifold valve pemisah vacuum, skimmer, dan balancing tank.</p>
                        </div>
                    </div>
                    <div class="flex items-start p-5 rounded-xl border border-border-hairline bg-bg-canvas">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-surface-blue text-primary font-headline-sm font-semibold flex items-center justify-center mr-4 text-sm">3</div>
                        <div>
                            <h3 class="font-headline-sm text-base font-semibold text-text-body mb-1">Tahap 3: Pemasangan &amp; Gluing Khusus Tekanan Tinggi</h3>
                            <p class="font-body-default text-sm text-text-muted">Penggunaan pipa PVC kelas AW dengan primer solven dan lem khusus pipa bertekanan heavy-duty. Seluruh sambungan diampelas dan dibersihkan dari residu sebelum penyambungan.</p>
                        </div>
                    </div>
                    <div class="flex items-start p-5 rounded-xl border border-border-hairline bg-surface-blue/50">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-primary text-on-primary font-headline-sm font-semibold flex items-center justify-center mr-4 text-sm">4</div>
                        <div>
                            <div class="flex items-center gap-2">
                                <h3 class="font-headline-sm text-base font-semibold text-text-body mb-1">Tahap 4: Hydrostatic Pressure Test (Uji Tekanan)</h3>
                                <span class="inline-flex px-2 py-0.5 rounded text-[11px] font-label-ui bg-feedback-success/10 text-feedback-success font-semibold">Prosedur Wajib</span>
                            </div>
                            <p class="font-body-default text-sm text-text-muted">Pemberian tekanan udara/air pada rentang 2.5 hingga 3.0 bar menggunakan pressure test pump selama minimal 24–48 jam sebelum pengecoran beton untuk menjamin 0% risiko kebocoran tersembunyi.</p>
                        </div>
                    </div>
                    <div class="flex items-start p-5 rounded-xl border border-border-hairline bg-bg-canvas">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-surface-blue text-primary font-headline-sm font-semibold flex items-center justify-center mr-4 text-sm">5</div>
                        <div>
                            <h3 class="font-headline-sm text-base font-semibold text-text-body mb-1">Tahap 5: Commissioning &amp; Uji Aliran Pompa Filter</h3>
                            <p class="font-body-default text-sm text-text-muted">Pengisian media pasir silika/kaca, pembilasan awal (initial backwash &amp; rinse), pengetesan daya sedot, leveling aliran return inlet, dan pencatatan tekanan operasional awal pada manometer pressure gauge.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 FAQ Hidrolika -->
            <div>
                <div class="mb-6">
                    <span class="font-label-ui text-label-ui text-primary font-semibold uppercase tracking-wider text-xs">Edukasi &amp; Tanya Jawab</span>
                    <h2 class="font-headline-md-mobile lg:font-headline-md text-headline-md text-text-body mt-1">
                        Pertanyaan Seputar Sirkulasi &amp; Filtrasi
                    </h2>
                </div>
                <div class="space-y-3">
                    <details class="group border border-border-hairline rounded-xl bg-bg-canvas p-5 transition duration-150 open:bg-surface-secondary/40">
                        <summary class="flex justify-between items-center font-headline-sm text-base font-semibold text-text-body cursor-pointer list-none">
                            <span>Berapa jam pompa kolam sebaiknya menyala dalam sehari?</span>
                            <span class="material-symbols-outlined text-text-muted group-open:rotate-180 transition-transform duration-200">expand_more</span>
                        </summary>
                        <div class="mt-3 pt-3 border-t border-border-hairline text-sm font-body-default text-text-muted leading-relaxed">
                            Untuk kolam renang pribadi di iklim tropis, durasi optimal adalah 6 hingga 8 jam per hari. Idealnya dibagi dalam dua siklus (misalnya 4 jam pagi dan 4 jam sore/malam). Kuncinya adalah memastikan seluruh volume air telah bersirkulasi minimal 1 kali putaran penuh (1 full turnover) per hari.
                        </div>
                    </details>
                    <details class="group border border-border-hairline rounded-xl bg-bg-canvas p-5 transition duration-150 open:bg-surface-secondary/40">
                        <summary class="flex justify-between items-center font-headline-sm text-base font-semibold text-text-body cursor-pointer list-none">
                            <span>Apa perbedaan mendasar kolam skimmer dan overflow dari segi pemipaan?</span>
                            <span class="material-symbols-outlined text-text-muted group-open:rotate-180 transition-transform duration-200">expand_more</span>
                        </summary>
                        <div class="mt-3 pt-3 border-t border-border-hairline text-sm font-body-default text-text-muted leading-relaxed">
                            Pada kolam skimmer, air langsung disedot dari kotak skimmer di dinding kolam menuju pompa mesin. Pada sistem overflow, air melimpah ke parit selokan (gutter), dialirkan via pipa gravitasi menuju bak penampung (balancing tank), lalu pompa menyedot air dari balancing tank untuk disaring dan dikembalikan ke kolam.
                        </div>
                    </details>
                    <details class="group border border-border-hairline rounded-xl bg-bg-canvas p-5 transition duration-150 open:bg-surface-secondary/40">
                        <summary class="flex justify-between items-center font-headline-sm text-base font-semibold text-text-body cursor-pointer list-none">
                            <span>Bagaimana tanda sistem sirkulasi mengalami hambatan atau kavitasi (cavitation)?</span>
                            <span class="material-symbols-outlined text-text-muted group-open:rotate-180 transition-transform duration-200">expand_more</span>
                        </summary>
                        <div class="mt-3 pt-3 border-t border-border-hairline text-sm font-body-default text-text-muted leading-relaxed">
                            Tanda utama kavitasi adalah suara gemeretak keras seperti kerikil di dalam pompa, timbulnya gelembung udara terus-menerus di return inlet, strainer basket pompa tidak terisi penuh air, serta jarum pressure gauge yang bergetar tidak stabil. Hal ini biasanya dipicu oleh kebocoran jalur hisap atau pipa suction yang tersumbat.
                        </div>
                    </details>
                    <details class="group border border-border-hairline rounded-xl bg-bg-canvas p-5 transition duration-150 open:bg-surface-secondary/40">
                        <summary class="flex justify-between items-center font-headline-sm text-base font-semibold text-text-body cursor-pointer list-none">
                            <span>Kapan media pasir filter (sand filter) perlu diganti atau di-backwash?</span>
                            <span class="material-symbols-outlined text-text-muted group-open:rotate-180 transition-transform duration-200">expand_more</span>
                        </summary>
                        <div class="mt-3 pt-3 border-t border-border-hairline text-sm font-body-default text-text-muted leading-relaxed">
                            Backwash wajib dilakukan rutin setiap 1–2 minggu sekali, atau saat jarum manometer filter naik 8–10 psi di atas tekanan normal bersih. Sedangkan penggantian total media pasir silika direkomendasikan setiap 3 hingga 5 tahun karena partikel pasir akan tergerus halus dan kehilangan daya tangkap kotoran mikroskopis.
                        </div>
                    </details>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN (Sticky Sidebar) -->
        <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
            <div class="p-6 rounded-xl border border-border-hairline border-t-4 border-t-primary-container bg-bg-canvas shadow-sm">
                <div class="inline-flex items-center px-2.5 py-1 rounded bg-surface-blue text-primary font-label-ui text-xs font-semibold mb-3 border border-border-hairline">
                    <span class="material-symbols-outlined text-sm mr-1">engineering</span>
                    Dukungan Langsung Tim Teknis
                </div>
                <h2 class="font-headline-sm text-headline-sm text-text-body font-bold mb-2">
                    Konsultasikan Sistem Kolam Anda
                </h2>
                <p class="font-body-default text-sm text-text-muted mb-6 leading-relaxed">
                    Diskusikan rencana pembuatan sirkulasi baru, renovasi pipa bocor, atau peremajaan mesin filter bersama spesialis hidrolika kami sejak 1997.
                </p>
                <a class="w-full inline-flex items-center justify-center bg-primary-container text-on-primary font-action-button text-action-button px-4 py-3.5 rounded-lg hover:bg-action-hover transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 mb-3 shadow-sm" href="https://wa.me/6282118075560?text=Halo%20Dunia%20Pool%20%26%20Pond,%20saya%20ingin%20konsultasi%20layanan%20sistem%20sirkulasi%20dan%20filtrasi%20kolam." rel="noopener noreferrer" target="_blank">
                    <span class="material-symbols-outlined mr-2">chat</span>
                    Konsultasikan via WhatsApp
                </a>
                <button class="w-full inline-flex items-center justify-center bg-transparent border border-border-hairline text-text-body font-action-button text-action-button px-4 py-3 rounded-lg hover:bg-surface-secondary transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-container focus:ring-offset-2 mb-4" id="copy-format-btn" onclick="copyConsultationTemplate()" type="button">
                    <span class="material-symbols-outlined mr-2 text-text-muted">content_copy</span>
                    <span id="copy-btn-text">Salin Format Pesan WhatsApp</span>
                </button>
                <div class="border-t border-border-hairline pt-4 space-y-2 text-xs font-body-default text-text-muted">
                    <div class="flex items-center justify-between">
                        <span class="font-label-ui">Nomor Resmi:</span>
                        <a class="font-semibold text-text-body hover:text-primary" href="tel:+6282118075560">0821-1807-5560</a>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="font-label-ui">WhatsApp:</span>
                        <span class="font-mono text-text-body">+62 821-1807-5560</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="font-label-ui">Lokasi Kantor:</span>
                        <span class="text-text-body">Padalarang, Bandung Barat</span>
                    </div>
                </div>
                <div class="mt-4 p-3 rounded-lg bg-surface-secondary border border-border-hairline text-xs font-body-default text-text-muted leading-relaxed">
                    <span class="font-semibold text-text-body">Catatan Transparan:</span> Bimbingan teknis langsung dari praktisi berpengalaman. Tanpa paksaan transaksi online dan tanpa perantara pihak ketiga.
                </div>
            </div>

            <div class="p-6 rounded-xl border border-border-hairline bg-surface-secondary">
                <h3 class="font-headline-sm text-sm font-bold text-text-body mb-3 flex items-center">
                    <span class="material-symbols-outlined text-primary text-base mr-2">checklist</span>
                    Yang Perlu Disiapkan Sebelum Konsultasi
                </h3>
                <p class="font-body-default text-xs text-text-muted mb-4">
                    Agar rekomendasi pompa, filter, dan perpipaan akurat, siapkan poin estimasi berikut:
                </p>
                <ul class="space-y-2.5 text-xs font-body-default text-text-muted">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-primary text-base mr-2 flex-shrink-0">square_foot</span>
                        <span>Estimasi dimensi kolam (<strong class="text-text-body">Panjang × Lebar × Kedalaman rata-rata</strong>).</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-primary text-base mr-2 flex-shrink-0">water</span>
                        <span>Tipe sirkulasi yang direncanakan (<strong class="text-text-body">Skimmer Box</strong> atau <strong class="text-text-body">Overflow / Balancing Tank</strong>).</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-primary text-base mr-2 flex-shrink-0">home_repair_service</span>
                        <span>Lokasi ruang mesin pompa (<strong class="text-text-body">Jarak pipa &amp; elevasi terhadap bibir kolam</strong>).</span>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-primary text-base mr-2 flex-shrink-0">photo_camera</span>
                        <span>Foto atau sketsa denah lokasi dan kondisi instalasi eksisting.</span>
                    </li>
                </ul>
            </div>

            <div class="p-6 rounded-xl border border-border-hairline bg-bg-canvas">
                <h3 class="font-headline-sm text-sm font-bold text-text-body mb-3 flex items-center">
                    <span class="material-symbols-outlined text-primary text-base mr-2">inventory_2</span>
                    Katalog Produk Terkait
                </h3>
                <div class="space-y-2">
                    <a class="group flex items-center justify-between p-3 rounded-lg border border-border-hairline hover:bg-surface-secondary transition-colors duration-150" href="<?= e(app_url('/produk#pompa')) ?>">
                        <div class="flex items-center">
                            <span class="material-symbols-outlined text-text-muted group-hover:text-primary mr-2.5 text-lg">electric_meter</span>
                            <span class="font-label-ui text-xs font-medium text-text-body">Pompa Sirkulasi High Efficiency</span>
                        </div>
                        <span class="material-symbols-outlined text-sm text-outline-variant group-hover:text-primary">arrow_forward</span>
                    </a>
                    <a class="group flex items-center justify-between p-3 rounded-lg border border-border-hairline hover:bg-surface-secondary transition-colors duration-150" href="<?= e(app_url('/produk#filter')) ?>">
                        <div class="flex items-center">
                            <span class="material-symbols-outlined text-text-muted group-hover:text-primary mr-2.5 text-lg">filter</span>
                            <span class="font-label-ui text-xs font-medium text-text-body">Sand Filter &amp; Glass Media Pasir</span>
                        </div>
                        <span class="material-symbols-outlined text-sm text-outline-variant group-hover:text-primary">arrow_forward</span>
                    </a>
                    <a class="group flex items-center justify-between p-3 rounded-lg border border-border-hairline hover:bg-surface-secondary transition-colors duration-150" href="<?= e(app_url('/produk#fitting')) ?>">
                        <div class="flex items-center">
                            <span class="material-symbols-outlined text-text-muted group-hover:text-primary mr-2.5 text-lg">tune</span>
                            <span class="font-label-ui text-xs font-medium text-text-body">Fitting, Skimmer Box &amp; Inlet</span>
                        </div>
                        <span class="material-symbols-outlined text-sm text-outline-variant group-hover:text-primary">arrow_forward</span>
                    </a>
                </div>
            </div>
        </aside>
    </div>
</main>

<!-- Banner Layanan Terkait -->
<section class="relative overflow-hidden border-t border-border-hairline bg-[#E9F3FB] py-14">
    <?= render_section_decor('wave-ribbons', 'right-0 bottom-0 opacity-80 z-0') ?>
    <div class="max-w-[1240px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8">
            <div>
                <span class="font-label-ui text-label-ui text-primary font-semibold uppercase tracking-wider text-xs">Eksplorasi Keahlian</span>
                <h2 class="font-headline-md-mobile lg:font-headline-md text-headline-md text-text-body mt-1">
                    Layanan Teknik Lainnya
                </h2>
            </div>
            <p class="font-body-default text-sm text-text-muted mt-2 md:mt-0 max-w-md">
                Sinergi menyeluruh dari konstruksi sipil bergaransi hingga perawatan kimia teruji sejak 1997.
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <a class="group block p-6 rounded-xl border border-border-hairline bg-bg-canvas hover:border-primary/50 transition duration-150 shadow-sm relative overflow-hidden" href="<?= e(app_url('/#layanan')) ?>">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-border-hairline group-hover:bg-primary transition-colors duration-150"></div>
                <div class="w-10 h-10 rounded-lg bg-surface-blue text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors duration-150">
                    <span class="material-symbols-outlined">foundation</span>
                </div>
                <h3 class="font-headline-sm text-base font-semibold text-text-body group-hover:text-primary mb-1">Konstruksi Kolam Renang</h3>
                <p class="font-body-default text-xs text-text-muted leading-relaxed">Struktur beton bertulang K-350 kedap air dengan metode waterproofing elastis garansi struktur.</p>
            </a>
            <a class="group block p-6 rounded-xl border border-border-hairline bg-bg-canvas hover:border-primary/50 transition duration-150 shadow-sm relative overflow-hidden" href="<?= e(app_url('/#layanan')) ?>">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-border-hairline group-hover:bg-primary transition-colors duration-150"></div>
                <div class="w-10 h-10 rounded-lg bg-surface-blue text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors duration-150">
                    <span class="material-symbols-outlined">architecture</span>
                </div>
                <h3 class="font-headline-sm text-base font-semibold text-text-body group-hover:text-primary mb-1">Desain &amp; Konsultasi</h3>
                <p class="font-body-default text-xs text-text-muted leading-relaxed">Gambar kerja arsitektur 3D, kalkulasi hidrolika, dan rancangan sistem pencahayaan bawah air.</p>
            </a>
            <a class="group block p-6 rounded-xl border border-border-hairline bg-bg-canvas hover:border-primary/50 transition duration-150 shadow-sm relative overflow-hidden" href="<?= e(app_url('/#layanan')) ?>">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-border-hairline group-hover:bg-primary transition-colors duration-150"></div>
                <div class="w-10 h-10 rounded-lg bg-surface-blue text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors duration-150">
                    <span class="material-symbols-outlined">cleaning_services</span>
                </div>
                <h3 class="font-headline-sm text-base font-semibold text-text-body group-hover:text-primary mb-1">Perawatan &amp; Pembersihan</h3>
                <p class="font-body-default text-xs text-text-muted leading-relaxed">Layanan berkala vacuuming, backwash rutin, pengujian pH/Chlorine, dan sikat lumut dasar kolam.</p>
            </a>
            <a class="group block p-6 rounded-xl border border-border-hairline bg-bg-canvas hover:border-primary/50 transition duration-150 shadow-sm relative overflow-hidden" href="<?= e(app_url('/#layanan')) ?>">
                <div class="absolute top-0 left-0 right-0 h-0.5 bg-border-hairline group-hover:bg-primary transition-colors duration-150"></div>
                <div class="w-10 h-10 rounded-lg bg-surface-blue text-primary flex items-center justify-center mb-4 group-hover:bg-primary group-hover:text-on-primary transition-colors duration-150">
                    <span class="material-symbols-outlined">science</span>
                </div>
                <h3 class="font-headline-sm text-base font-semibold text-text-body group-hover:text-primary mb-1">Pengolahan Air &amp; Kimia</h3>
                <p class="font-body-default text-xs text-text-muted leading-relaxed">Penjernihan air awal (water treatment), garam klorinasi saltwater chlorinator, dan penyeimbang mineral.</p>
            </a>
        </div>
    </div>
</section>
<?php
$pageScripts = <<<'HTML'
<script>
    function copyConsultationTemplate() {
        const templateText = `Halo Dunia Pool & Pond (The Pool Specialist),
Saya ingin berkonsultasi mengenai Layanan Sistem Sirkulasi & Filtrasi Kolam:

- Estimasi Ukuran Kolam: [P x L x Kedalaman]
- Tipe Sirkulasi: [Skimmer / Overflow / Belum Tahu]
- Rencana Lokasi Mesin: [Jarak & Elevasi]
- Lokasi Proyek: [Kota / Wilayah]
- Kebutuhan: [Pemasangan Baru / Renovasi Pipa / Ganti Mesin Filter]

Mohon saran dan penjadwalan konsultasi teknisnya. Terima kasih.`;

        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(templateText).then(() => {
                const btnText = document.getElementById('copy-btn-text');
                const originalText = btnText.innerText;
                btnText.innerText = "✓ Format Berhasil Disalin!";
                btnText.parentElement.classList.add('bg-surface-blue', 'text-primary');

                setTimeout(() => {
                    btnText.innerText = originalText;
                    btnText.parentElement.classList.remove('bg-surface-blue', 'text-primary');
                }, 3000);
            }).catch(() => {
                window.prompt("Salin format pesan berikut secara manual:", templateText);
            });
        } else {
            window.prompt("Salin format pesan berikut secara manual:", templateText);
        }
    }
</script>
HTML;

require __DIR__ . '/../includes/footer.php';

