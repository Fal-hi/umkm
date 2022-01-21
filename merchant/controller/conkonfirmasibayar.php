<?php
include_once "core/kon.php";
include_once "core/session.php";

$id_order = $_POST["id"];
$status = $_POST["status"];

$ubah = mysqli_query($con, "UPDATE umkm.order SET idstatusorder = '$status' WHERE idorder = '$id_order' AND umkm.order.idmerchant = '$idadmin'");

$ubah2 = mysqli_query($con, "UPDATE umkm.orderdetail SET idstatusorder = '$status' WHEREidorder = '$id_order' AND umkm.orderdetail.idmerchant = '$idadmin'");

if ($ubah) {
  if ($status == "3") {
    $q = mysqli_query($con, "SELECT idproduk, jumlah FROM orderdetail WHERE idorder ='$id_order'");
    while ($r = mysqli_fetch_array($q)) {
      $qs = mysqli_query($con, "SELECT stok FROM produk WHERE idproduk = '$r[idproduk]'");
      $s = mysqli_fetch_array($qs);
      $stok = $s["stok"] - $r["jumlah"];
      $up = mysqli_query($con, "UPDATE produk SET stok = '$stok' WHERE idproduk = '$r[idproduk]';");
    }
  }
  if ($status == "1") {
    $q = mysqli_query($con, "DELETE FROM konfimasibayar WHERE idorder = '$id_order' AND konfimasibayar.idmerchant = '$idadmin'");
  }
  header("Location:index.php?p=orderkonfirmasi&ket=success");
  } else {
    header("Location:index.php?p=orderkonfirmasi&ket=failed");
  }

?>
