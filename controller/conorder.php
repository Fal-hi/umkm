<?php
include "core/kon.php";
include "core/date.php";
include "core/session.php";

$idkota = $_POST["idkota"];
$alamatkirim = $_POST["alamat"];
$total = 0;

$q = mysqli_query($con, "SELECT tarif FROM kota WHERE idkota = '$idkota'");
$h = mysqli_fetch_array($q);
$tarif = $h["tarif"];
// $total = $total + $tarif;

//Mendaptkan merchant dari idmerchant dan anggota
$count = mysqli_query($con, "SELECT idmerchant FROM cart WHERE idanggota = '$idanggota' group by idmerchant");
while ($rcount = mysqli_fetch_array($count)) {

  //Mengambil daftar barang yg ada di cart berdasarkan idmerchant
  $cart = mysqli_query($con, "SELECT cart.*, produk.namaproduk, produk.hargaproduk, produk.foto	FROM cart LEFT JOIN produk ON cart.idproduk = produk.idproduk WHERE cart.idanggota = '$idanggota' AND cart.idmerchant = '$rcount[idmerchant]'");
  while ($rcart = mysqli_fetch_array($cart)) {

    $subtotal = $rcart["jumlahbeli"] * $rcart["hargaproduk"];
    $total = $subtotal + $total;

  }
  $total = $total + $tarif;
  //Insert Ke order
  $insert = mysqli_query($con, "INSERT INTO umkm.order(idorder, idanggota, alamatkirim, total, tglorder, idstatusorder, idmerchant)	VALUES ('$idorder',$idanggota,'$alamatkirim','$total','$date', 1, '$rcount[idmerchant]')");
  $total = 0;
  
  // Insert ke order detail
  $qod = mysqli_query($con, "SELECT cart.*, produk.hargaproduk FROM cart LEFT JOIN produk ON cart.idproduk = produk.idproduk WHERE idanggota = '$idanggota' AND cart.idmerchant = '$rcount[idmerchant]'");
  while ($has = mysqli_fetch_array($qod)) {

    $sbtot = $has["jumlahbeli"] * $has["hargaproduk"];
    $insertqod = mysqli_query($con, "INSERT INTO umkm.orderdetail(idorder, idproduk, idkota, jumlah, subtotal, idmerchant, idstatusorder)	VALUES ('$idorder', '$has[idproduk]', '$idkota', '$has[jumlahbeli]', '$sbtot', '$rcount[idmerchant]', '1')");
  }

  $delete = mysqli_query($con, "DELETE FROM cart WHERE idanggota = '$idanggota' AND idmerchant = '$rcount[idmerchant]'");

}

if ($count) {
  header("Location:index.php?p=infotransfer&ket=success");
} else {
  // header("Location:index.php?p=infotransfer&ket=failed");
}

?>
