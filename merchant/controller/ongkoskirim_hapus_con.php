<?php
include_once "core/kon.php";

$idkota = $_GET["id"];

// Insert
$hapus = mysqli_query($con, "DELETE FROM kota WHERE idkota = '$idkota';");

if ($hapus) {
  header("Location:index.php?p=ongkoskirim&ket=success");
} else {
  header("Location:index.php?p=ongkoskirim&ket=failed");
}
?>
