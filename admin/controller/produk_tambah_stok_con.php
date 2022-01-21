<?php
include_once "core/kon.php";

$idproduk = $_POST["id"];
$stok = $_POST["stok"];
$tambahstok = $_POST["tambahstok"];
$tambahstok = $stok + $tambahstok;

echo $tambahstok;

// Insert record
$ubah = mysqli_query($con, "UPDATE produk SET stok = '$tambahstok' WHERE idproduk = idproduk'");

if ($ubah) {
  header("Location:index.php?p=produk&ket=success");
} else {
  header("Location:index.php?p=produk&ket=failed");
}

?>
