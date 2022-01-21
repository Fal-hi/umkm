<?php
ob_start();
include "core/session.php";
?>
<!-- <nav class="navbar navbar-inverse navbar-static-top sticky yamm">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="index.php">Home</a>
                </li>
                <li><a href="index.php?p=profil">Profil</a></li>
                <li><a href="index.php?p=carapemesanan">Cara Pemesanan</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?p=loginmember">Login</a></li>
                <li class="active"><a href="index.php?p=daftarmember">Daftar Member</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?p=loginmerchant">Login Penjual</a></li>
                <li class="active"><a href="index.php?p=daftarmerchant">Daftar Penjual</a></li>
            </ul>
        </div>
    </div>
</nav> -->

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
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-check-fill fs-6"></i> Member
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="index.php?p=loginmember">
                Login Member
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="index.php?p=daftarmember">
                Daftar Member
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-fill fs-6"></i> Penjual
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="index.php?p=loginmerchant">
                Login Penjual
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="index.php?p=daftarmerchant">
                Daftar Penjual
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="admin/core/login.php">
            <i class="bi bi-person-workspace"></i> Admin
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>