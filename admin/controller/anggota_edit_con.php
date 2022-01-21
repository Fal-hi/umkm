<?php
include_once "core/kon.php";

$idanggota = $_POST["idanggota"];
$namalengkap = ucwords($_POST["namalengkap"]);
$jk = $_POST["jk"];
$nohp = $_POST["nohp"];
$alamat = $_POST["alamat"];
$username = $_POST["username"];
$password = $_POST["password"];

if ($password == "") {
  // Insert
  $ubah = mysqli_query(
    $con,
    "
		UPDATE anggota SET
		namalengkap = '$namalengkap',
		jk = '$jk',
		nohp = '$nohp',
		alamat = '$alamat',
		username = '$username'
		WHERE
		idanggota = '$idanggota'
		"
  );
} else {
  $password = md5($password);
  $ubah = mysqli_query($con, "UPDATE anggota SET namalengkap = '$namalengkap', jk = 'jk', nohp = '$nohp', alamat = '$alamat', username = '$username', password = '$password' WHERE idanggota = '$idanggota'");
}

if ($ubah) {
  header("Location:index.php?p=anggota&ket=success");
} else {
  header("Location:index.php?p=anggota&ket=failed");
}
?>
