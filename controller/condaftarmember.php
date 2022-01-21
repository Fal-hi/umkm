<?php
// include_once "core/kon.php";
// include_once "core/date.php";
include "../core/kon.php";
include "../core/date.php";

$namalengkap = ucwords($_POST["namalengkap"]);
$jk = $_POST["jk"];
$nohp = $_POST["nohp"];
$alamat = $_POST["alamat"];
$username = $_POST["username"];
$password = md5($_POST["password"]);

$q = mysqli_query($con, "INSERT INTO anggota(namalengkap, jk, nohp, alamat, username, password, tgldaftar) VALUES ('$namalengkap', '$jk', '$nohp', '$alamat', '$username', '$password', '$date')");

if ($q) {
  header("Location:../index.php?p=loginmember");
} else {
  header("Location:../index.php?p=daftarmember");
}
