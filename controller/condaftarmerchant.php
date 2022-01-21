<?php
// include_once "core/kon.php";
// include_once "core/date.php";
include "../core/kon.php";
include "../core/date.php";

$id = "";
$username = $_POST["username"];
$password = $_POST["password"];
$namatoko = $_POST["namatoko"];
$jk = $_POST["jk"];
$nohp = $_POST["nohp"];
$alamat = $_POST["alamat"];
$tgldaftar = $_POST["tgldaftar"];

$q = mysqli_query(
  $con,
  "INSERT INTO merchant(idmerchant, username, password, namatoko, jk, nohp, alamat, tgldaftar, status)	VALUES (Null, '$username', '$password', '$namatoko', '$jk', '$nohp', '$alamat', '$tgldaftar', 0)"
);

if ($q) {
  header("Location:../index.php?p=loginmerchant");
} else {
  header("Location:index.php?p=daftarmerchant");
}
