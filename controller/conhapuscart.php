<?php
include "core/kon.php";

$idcart = $_GET["id"];

$hapus = mysqli_query($con, "DELETE FROM cart where idcart = '$idcart';");

if ($hapus) {
  header("Location:index.php?p=keranjangbelanja&ket=success");
} else {
  header("Location:index.php?p=keranjangbelanja&ket=failed");
}
?>
