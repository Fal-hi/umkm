<?php
include_once "core/kon.php";
include_once "core/session.php";

$id_order = $_GET["id"];

$ubah = mysqli_query($con, "UPDATE umkm.order SET idstatusorder = '4' WHERE idorder = '$id_order' AND idmerchant = '$idadmin'");

$ubah2 = mysqli_query($con, "UPDATE umkm.orderdetail SET idstatusorder = '4'
	WHERE idorder = '$id_order' AND idmerchant = '$idadmin'");

if ($ubah) {
  header("Location:index.php?p=orderall&ket=success");
} else {
  header("Location:index.php?p=orderall&ket=failed");
}

?>
