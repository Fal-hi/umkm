<?php
include_once "core/kon.php";
include_once "core/session.php";

$idproduk = $_GET["id"];
$foto = $_GET["foto"];

// Insert
$hapus = mysqli_query($con, "DELETE FROM produk WHERE idproduk = '$idproduk' AND = '$idadmin'");

if ($hapus) {
  unlink($foto);
  header("Location:index.php?p=produk&ket=success");
} else {
  header("Location:index.php?p=produk&ket=failed");
}
?>
