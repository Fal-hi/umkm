<?php
include_once "core/kon.php";
include_once "core/session.php";

$namaproduk = ucwords($_POST["namaproduk"]);
$hargaproduk = $_POST["hargaproduk"];
$stok = $_POST["stok"];
$detailproduk = $_POST["detailproduk"];

// $foto = "aaa";

$name = $_FILES["file"]["name"];
$target_dir = "../images/produk/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

echo $namaproduk .
  "= = = =" .
  $hargaproduk .
  "= = = =" .
  $stok .
  "= = = =" .
  $detailproduk .
  "= = = = = " .
  $name;

// $maxDim = 800;
// $file_name = $_FILES["file"]["tmp_name"];
// list($width, $height, $type, $attr) = getimagesize($file_name);
// if ($width > $maxDim || $height > $maxDim) {
//   $target_filename = $file_name;
//   $ratio = $width / $height;
//   if ($ratio > 1) {
//     $new_width = $maxDim;
//     $new_height = $maxDim / $ratio;
//   } else {
//     $new_width = $maxDim * $ratio;
//     $new_height = $maxDim;
//   }
//   $src = imagecreatefromstring(file_get_contents($file_name));
//   $dst = imagecreatetruecolor($new_width, $new_height);
//   imagecopyresampled($dst, $src, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
//   imagedestroy($src);
//   imagepng($dst, $target_filename); // adjust format as needed
//   imagedestroy($dst);
// }

// // Select file type
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// // Valid file extensions
// $extensions_arr = ["jpg", "jpeg", "png", "gif"];

// // Check extension
// if (in_array($imageFileType, $extensions_arr)) {
//   // Insert record
//   $tambah = mysqli_query($con, "INSERT INTO produk (namaproduk, hargaproduk, stok, detailproduk, foto, idmerchant) VALUES ('$namaproduk','$hargaproduk','$stok','$detailproduk', '$name', '$idadmin')");

//   if ($tambah) {
//     // Upload file
//     move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $name);
//     header("Location:index.php?p=produk&ket=success");
//   } else {
//     header("Location:index.php?p=produk&ket=failed");
//   }
// }

?>
