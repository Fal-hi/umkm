<?php
include "core/kon.php";
include "core/date.php";
include "core/session.php";

$idkota = $_POST["idkota"];
$alamatkirim = $_POST["alamat"];
$total = $_POST["total"];

$q = mysqli_query($con, "SELECT tarif FROM kota WHERE idkota = '$idkota'");
$h = mysqli_fetch_array($q);
$tarif = $h["tarif"];
$total = $total + $tarif;

//Insert Ke order
$insert = mysqli_query($con, "INSERT INTO umkm.order (idorder, idanggota, alamatkirim, total, tglorder, idstatusorder) VALUES ('$idorder', $idanggota, '$alamatkirim', '$total', '$date', 1)");

// Insert ke order detail
$qod = mysqli_query($con, "SELECT cart.*, produk.hargaproduk FROM cart LEFT JOIN produk ON cart.idproduk = produk.idproduk WHERE idanggota = '$idanggota'");
while ($has = mysqli_fetch_array($qod)) {
  $sbtot = $has["jumlahbeli"] * $has["hargaproduk"];
  $insertqod = mysqli_query($con, "INSERT INTO umkm.orderdetail(idorder, idproduk, idkota, jumlah, subtotal) VALUES ('$idorder', '$has[idproduk]', '$idkota', '$has[jumlahbeli]', '$sbtot')");
}

$delete = mysqli_query($con, "DELETE FROM cart WHERE idanggota = '$idanggota'");

if ($insert && $idanggota) {
  header("Location:index.php?p=infotransfer&ket=success");
} else {
  header("Location:index.php?p=infotransfer&ket=failed");
}

?>
