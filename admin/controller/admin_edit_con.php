<?php
include_once "core/kon.php";

$idadmin = $_POST["idadmin"];
$namalengkap = ucwords($_POST["namalengkap"]);
$username = $_POST["username"];
$password = $_POST["password"];

if ($password == "") {
  // Insert
  $ubah = mysqli_query($con, "UPDATE admin SET namalengkap = '$namalengkap', username = '$username' WHERE idadmin = '$idadmin'");
} else {
  $password = md5($password);
  $ubah = mysqli_query($con, "UPDATE admin SET namalengkap = '$namalengkap', username = '$username', password = '$password' WHERE idadmin = '$idadmin'");
}

if ($ubah) {
  header("Location:index.php?p=admin&ket=success");
} else {
  header("Location:index.php?p=admin&ket=failed");
}
?>
