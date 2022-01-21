<?php
ob_start();
include "core/session.php"
?>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">UMKM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?p=profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?p=carapemesanan">Cara Pemesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?p=lihatproduk">Lihat Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?p=keranjangbelanja">Keranjang Belanja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?p=riwayatpemesanan">Riwayat Pemesanan</a>
        </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
          <a class="nav-link active" href="index.php?p=logoutmember">(<?php echo $namalengkap;?>)&nbsp; Logout</a>
        </li>

        </ul>

    </div>
  </div>
</nav>