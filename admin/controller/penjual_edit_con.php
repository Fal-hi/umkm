<?php
include_once "core/kon.php";

$idmerchant = $_POST["idmerchant"];
$namalengkap = ucwords($_POST["namalengkap"]);
$jk = $_POST["jk"];
$nohp = $_POST["nohp"];
$alamat = $_POST["alamat"];
$status = $_POST["status"];
$username = $_POST["username"];
$password = $_POST["password"];

if ($password == "") {
  // Insert
  $ubah = mysqli_query($con, "UPDATE merchant SET namatoko = '$namalengkap', jk = '$jk',nohp = '$nohp', alamat = '$alamat', status = '$status', username = '$username' WHERE idmerchant = '$idmerchant'");
} else {
  $password = md5($password);
  $ubah = mysqli_query($con, "UPDATE merchant SET namatoko = '$namalengkap', jk = '$jk',nohp = '$nohp', alamat = '$alamat', status = '$status', username = '$username',password = '$password' WHERE idmerchant = '$idmerchant'");
}

if ($ubah) {
  header("Location:index.php?p=penjual&ket=success");
} else {
  header("Location:index.php?p=penjual&ket=failed");
}
?>
