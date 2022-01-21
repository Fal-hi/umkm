<?php
include_once "core/kon.php";
include_once "core/sessionn.php";

$idproduk = $_POST["id"];
$stok = $_POST["stok"];
$tambahstok = $_POST["tambahstok"];
$tambahstok = $stok + $tambahstok;

echo $tambahstok;

// Insert record
$ubah = mysqli_query($con, "UPDATE produk SET stok = '$tambahstok' WHERE idproduk = idproduk' AND idmerchant = '$idadmin'");

if ($ubah) {
  header("Location:index.php?p=produk&ket=success");
} else {
  header("Location:index.php?p=produk&ket=failed");
}

?>
