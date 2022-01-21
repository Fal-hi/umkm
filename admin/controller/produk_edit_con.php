<?php
include_once "core/kon.php";

$idproduk = $_POST["id"];
$namaproduk = ucwords($_POST["namaproduk"]);
$hargaproduk = $_POST["hargaproduk"];
$stok = $_POST["stok"];
$detailproduk = $_POST["detailproduk"];
$filePath = $_POST["fotoold"];
$filePath = "images/produk/" . $filePath;
// $foto = "aaa";

$name = $_FILES["file"]["name"];
$target_dir = "images/produk/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

if ($target_file == $target_dir) {
  // Insert record
  $ubah = mysqli_query($con, "UPDATE produk SET namaproduk = '$namaproduk', hargaproduk = '$hargaproduk', stok = '$stok', detailproduk = '$detailproduk' WHERE idproduk = idproduk'");

  if ($ubah) {
    // Upload file
    header("Location:index.php?p=produk&ket=success");
  } else {
    header("Location:index.php?p=produk&ket=failed");
    // echo mysqli_errno();
  }
} else {
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = ["jpg", "jpeg", "png", "gif"];

  // Check extension
  if (in_array($imageFileType, $extensions_arr)) {
    // Insert record
    $ubah = mysqli_query($con, "UPDATE produk SET namaproduk = '$namaproduk',hargaproduk = '$hargaproduk', stok = '$stok', detailproduk = '$detailproduk', foto = '$name' WHERE idproduk = '$idproduk'");

    if ($ubah) {
      // Upload file
      unlink($filePath);
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $name);
      header("Location:index.php?p=produk&ket=success");
    } else {
      header("Location:index.php?p=produk&ket=failed");
    }
  }
}

?>
