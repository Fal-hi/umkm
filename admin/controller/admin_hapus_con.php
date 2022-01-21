<?php
include_once "core/kon.php";

$idadmin = $_GET["id"];

// Insert
$hapus = mysqli_query($con, "DELETE FROM admin WHERE idadmin = '$idadmin';");

if ($hapus) {
  header("Location:index.php?p=admin&ket=success");
} else {
  header("Location:index.php?p=admin&ket=failed");
}
?>
