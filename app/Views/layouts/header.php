<header class="header">
    <img id="header-bg" src="" alt="Header SMK Attuafiqiyyah" class="header-bg">

    <div class="container">
        <div class="logo">
            <img src="<?= base_url('assets/images/logo/logo.png') ?>" alt="Logo SMK">

            <div class="logo-text">
                <h1>SMK <span>Attuafiqiyyah</span></h1>
                <p>Berprestasi Bersama Kami</p>
            </div>
        </div>
    </div>
</header>

<script>
  const headerImages = [
    "<?= base_url('assets/images/hero_header/header1.jpg') ?>",
    "<?= base_url('assets/images/hero_header/header2.jpg') ?>",
    "<?= base_url('assets/images/hero_header/header3.jpg') ?>",
  ];

  const randomImage = headerImages[Math.floor(Math.random() * headerImages.length)];
  document.getElementById('header-bg').src = randomImage;
</script>