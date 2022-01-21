<?php
include_once "core/kon.php";

$namaproduk = ucwords($_POST["namaproduk"]);
$hargaproduk = $_POST["hargaproduk"];
$stok = $_POST["stok"];
$detailproduk = $_POST["detailproduk"];
// $foto = "aaa";

$name = $_FILES["file"]["name"];
$target_dir = "images/produk/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = ["jpg", "jpeg", "png", "gif"];

// Check extension
if (in_array($imageFileType, $extensions_arr)) {
  // Insert record
  $tambah = mysqli_query($con, "INSERT INTO produk (namaproduk, hargaproduk, stok, detailproduk, foto) VALUES ('$namaproduk','$hargaproduk','$stok','$detailproduk', '$name')");

  if ($tambah) {
    // Upload file
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $name);
    header("Location:index.php?p=produk&ket=success");
  } else {
    header("Location:index.php?p=produk&ket=failed");
  }
}

?>
