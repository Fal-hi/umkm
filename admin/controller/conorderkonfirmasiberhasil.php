<?php
include_once "core/kon.php";

$id_order = $_GET["id"];
$idmerchant = $_GET["idmerchant"];

$ubah = mysqli_query($con, "UPDATE umkm.order SET idstatusorder = '4' WHERE idorder = '$id_order' AND idmerchant = '$idmerchant'");

$ubah2 = mysqli_query($con, "UPDATE umkm.orderdetail SET idstatusorder = '4' WHERE idorder = '$id_order' AND idmerchant = '$idmerchant'");

if ($ubah) {
  header("Location:index.php?p=orderall&ket=success");
} else {
  header("Location:index.php?p=orderall&ket=failed");
}

?>
