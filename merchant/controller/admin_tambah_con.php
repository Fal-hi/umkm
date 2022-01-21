<?php
include_once "core/kon.php";

$namalengkap = ucwords($_POST["namalengkap"]);
$username = $_POST["username"];
$password = md5($_POST["password"]);

// Insert
$tambah = mysqli_query($con, "INSERT INTO admin (namalengkap, username, password, level) VALUES ('$namalengkap','$username','$password', 'administrator')");

if ($tambah) {
  header("Location:index.php?p=admin&ket=success");
} else {
  header("Location:index.php?p=admin&ket=failed");
}
?>
