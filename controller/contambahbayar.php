<?php
include "core/kon.php";
include "core/session.php";
include "core/date.php";

$id_order = $_POST["idorder"];
$idmerchant = $_POST["idmerchant"];
$namabankpengirim = ucwords($_POST["namabankpengirim"]);
$jumlahtransfer = $_POST["jumlahtransfer"];
$tgltransfer = $_POST["tgltransfer"];
$namabanktujuan = $_POST["namabanktujuan"];

$name = $_FILES["file"]["name"];
$target_dir = "images/bukti/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$name = $idanggota . "_" . $date . "_" . $name;

// Select file type
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = ["jpg", "jpeg", "png", "gif"];

// Check extension
if (in_array($imageFileType, $extensions_arr)) {
  // Insert record
  $tambah = mysqli_query($con, "INSERT INTO konfimasibayar(idorder, namabankpengirim, jumlahtransfer, tgltransfer, namabanktujuan, idmerchant, bukti)	VALUES ('$id_order','$namabankpengirim','$jumlahtransfer','$tgltransfer', '$namabanktujuan', '$idmerchant', '$name')");

  $update = mysqli_query($con, "UPDATE umkm.order SET	idstatusorder = '2'	WHERE idorder = '$id_order' AND umkm.order.idmerchant = '$idmerchant'");

  $update2 = mysqli_query($con, "UPDATE umkm.orderdetail SET idstatusorder = '2' WHERE idorder = '$id_order' AND umkm.orderdetail.idmerchant = '$idmerchant'");

  if ($tambah) {
    // Upload file
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $name);
    header("Location:index.php?p=riwayatpemesanan&ket=success");
  } else {
    // header("Location:index.php?p=riwayatpemesanan&ket=failed");
  }
}

?>
