<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<main class="content">
    <div class="container">

        <div class="content-layout">

            <div class="main-content">

                <!-- Hero -->
                <div class="hero">
                    <img src="<?= base_url('assets/images/hero/hero1.jpg') ?>" alt="Hero">
                </div>

                <!-- Berita Utama -->
                <div class="section-heading" style="margin-top: 24px;">
                    <h2>Berita Utama</h2>
                    <a href="<?= base_url('berita') ?>" class="lihat-semua">
                        Lihat Semua <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <div class="berita-utama-list">
                    <?php // foreach ($berita_utama as $b): 
                    ?>
                    <a href="#" class="berita-card">
                        <img src="<?= base_url('assets/images/berita/contoh.jpg') ?>" alt="">
                        <div class="berita-card-body">
                            <span class="berita-kategori">Akademik</span>
                            <h3>Judul berita contoh di sini</h3>
                            <span class="berita-meta">10 Juli 2026</span>
                        </div>
                    </a>

                    <a href="#" class="berita-card">
                        <img src="<?= base_url('assets/images/berita/contoh2.jpg') ?>" alt="">
                        <div class="berita-card-body">
                            <span class="berita-kategori">Prestasi</span>
                            <h3>Judul berita kedua di sini</h3>
                            <span class="berita-meta">9 Juli 2026</span>
                        </div>
                    </a>
                    <?php // endforeach; 
                    ?>
                </div>
            </div>

            <?= $this->include('layouts/sidebar') ?>

        </div>

        <!-- Berita Terbaru (list terpisah) | Agenda Sekolah -->
        <!-- TODO: belum ada CSS-nya -->

        <!-- Galeri Kegiatan | Jurusan -->
        <!-- TODO -->

        <!-- Prestasi Sekolah | Ekstrakurikuler -->
        <!-- TODO -->

        <!-- Partner Industri -->
        <!-- TODO -->

        <!-- Peta Lokasi dan Kontak Cepat -->
        <!-- TODO -->

    </div>
</main>

<?= $this->endSection() ?>