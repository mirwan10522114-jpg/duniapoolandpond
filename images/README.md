# Source Gambar Landing Page — Dunia Pool & Pond

Folder ini disiapkan khusus untuk menampung file gambar lokal yang ditampilkan di website (terutama pada Landing Page / Beranda).

Website akan **otomatis memakai gambar lokal** dari folder ini begitu Anda meletakkan file gambarnya (format yang didukung: `.webp`, `.jpg`, `.jpeg`, `.png`). Selama file lokal belum diisi, website tetap menampilkan gambar bawaan sebagai cadangan agar tampilan tidak kosong/rusak.

## Pemetaan Folder & Nama File (Landing Page)

| Bagian Landing Page | Folder | Nama File yang Disarankan | Rasio Ideal |
|---|---|---|---|
| **Logo Resmi Brand & Favicon** | `images/brand/` | `logo-dpp.png`, `favicon-dpp.png` | PNG transparan |
| **Logo 15 Merek Pengadaan** | `images/brands/` | `hayward.png`, `pentair.png`, `emaux.png`, `astral-pool.png`, `dab.png`, `waterco.png`, `venezia.png`, `york.png`, `boost.png`, `viper-pool.png`, `roman.png`, `roman-granit.png`, `atena.png`, `mass.png`, `venus.png` | PNG transparan / proporsional |
| **Hero Utama (Kolam Utama)** | `images/hero/` | `kolam-utama.jpg` *(atau nama bebas 1 file di folder ini)* | `4:3` (landscape) |
| **Banner Konsultasi Biru** | `images/banner/` | `tim-teknisi.jpg` *(atau nama bebas 1 file di folder ini)* | `4:3` / `1:1` |
| **Proyek 1 — Padalarang, Lembang** | `images/proyek/` | `proyek-1-Padalarang.jpg` | `3:2` (landscape) |
| **Proyek 2 — Dago Pakar, Bandung** | `images/proyek/` | `proyek-2-dago-pakar.jpg` | `3:2` (landscape) |
| **Proyek 3 — Bandung Barat** | `images/proyek/` | `proyek-3-bandung-barat.jpg` | `3:2` (landscape) |

## Folder Tambahan (Kartu Layanan Beranda, Halaman Produk & Layanan)

Jika Anda ingin mengganti background foto **8 Kartu Layanan** pada **Beranda**, simpan di `images/layanan/`:

- `01-desain-konsultasi.jpg`
- `02-konstruksi-kolam.jpg`
- `03-renovasi-perbaikan.jpg`
- `04-sirkulasi-filtrasi.jpg`
- `05-instalasi-peralatan.jpg`
- `06-perawatan-kolam.jpg`
- `07-pengolahan-air.jpg`
- `08-purna-jual.jpg`

Dan jika ingin mengganti gambar di halaman **Layanan** (`pages/layanan.php`) dan **Produk**:

- `images/layanan/`: `ruang-mesin.jpg` *(atau nama bebas 1 file untuk header halaman Layanan)*
- `images/produk/`:
  - **11 Kategori Utama Katalog (`kat-01` s.d. `kat-11`)**:
    `kat-01-pompa-kolam.jpg`, `kat-02-filter-kolam.jpg`, `kat-03-peralatan-pembersih.jpg`, `kat-04-bahan-kimia.jpg`, `kat-05-fitting-plumbing.jpg`, `kat-06-lampu-kolam.jpg`, `kat-07-pengolahan-air.jpg`, `kat-08-aksesori-kolam.jpg`, `kat-09-pemanas-otomasi.jpg`, `kat-10-finishing-waterproofing.jpg`, `kat-11-suku-cadang.jpg`
  - Gambar detail subhalaman & cadangan: `pompa-sirkulasi.jpg`, `pompa-tampak-samping.jpg`, `pompa-strainer.jpg`, `pompa-union.jpg`, `sand-filter.jpg`, `lampu-led.jpg`, `skimmer-box.jpg`, `inlet-fitting.jpg`, `alat-pembersih.jpg`, `bahan-kimia.jpg`

> **Tips:** Jika ingin mengganti ekstensi (misalnya pakai `.webp` atau `.png` agar lebih ringan/tajam), cukup simpan dengan nama dasar yang sama (contoh `kolam-utama.webp`) — sistem otomatis memilih urutan `.webp`, `.jpg`, `.jpeg`, lalu `.png`.

