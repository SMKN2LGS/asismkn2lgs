<!-- navbar -->
<?php
    $hal = $_GET["hal"];
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">ASI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">

                    <a class="nav-link <?php if($hal == "beranda") echo "active";?>" href="asi.php?hal=beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($hal == "daftar") echo "active";?>" href="asi.php?hal=daftar">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($hal == "1") echo "active";?>" href="riwayat.php?hal=1">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($hal == "tentang") echo "active";?>" href="asi.php?hal=tentang">Tentang</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li>
                    <a class="nav-link login" href="auth/logout.php" >Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->
