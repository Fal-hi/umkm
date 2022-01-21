<?php
include "core/kon.php";
include "core/date.php";
include "core/session.php";

$idproduk = $_POST["idproduk"];
$idanggota = $_POST["idanggota"];
$idmerchant = $_POST["idmerchant"];
$jumlah = $_POST["jumlah"];

$q = mysqli_query($con, "SELECT stok FROM produk WHERE idproduk='$idproduk'");
$h = mysqli_fetch_array($q);

if ($jumlah > $h["stok"] || $jumlah == "") {
  header("Location:index.php?p=lihatproduk&ket=tidakcukup");
} else {
  $qq = mysqli_query($con, "INSERT INTO cart(idproduk, idanggota, jumlahbeli, tglcart, idmerchant) VALUES ('$idproduk', '$idanggota', '$jumlah', '$date', '$idmerchant')");

  if ($qq) {
    header("Location:index.php?p=lihatproduk&ket=success");
  } else {
    header("Location:index.php?p=lihatproduk&ket=failed");
  }
}

?>
