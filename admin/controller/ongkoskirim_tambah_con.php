<?php
include_once "core/kon.php";

$namakota = ucwords($_POST["namakota"]);
$tarif = $_POST["tarif"];

// Insert record
$tambah = mysqli_query($con, "INSERT INTO kota (namakota, tarif) VALUES ('$namakota', '$tarif')");

if ($tambah) {
  header("Location:index.php?p=ongkoskirim&ket=success");
} else {
  header("Location:index.php?p=ongkoskirim&ket=failed");
}

?>
