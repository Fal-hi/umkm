<section class="container">	
	<h3 class="text-center">Tambah Data Produk</h3>
	<div class="d-flex justify-content-center align-items-center">
	<!-- <form class="col-md-6" action="../controller/produk_tambah_con.php" method="POST" enctype="multipart/form-data"> -->
		<form class="col-md-6" action="" method="POST" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="namabarang" class="form-label">Nama Barang</label>
			<input type="text" name="namaproduk" class="form-control" autofocus>
		</div>
		<div class="mb-3">
			<label for="hargabarang" class="form-label">Harga Barang</label>
			<input type="text" name="hargaproduk" class="form-control">
		</div>
		<div class="mb-3">
			<label for="stok" class="form-label">Stok</label>
			<input type="text" name="stok" class="form-control">
		</div>
		<div class="mb-3">
			<label for="detailproduk" class="form-label">Detail Produk</label>
			<input type="text" name="detailproduk" class="form-control">
		</div>
		<div class="mb-3">
            <label for="image" class="form-label">Masukkan Gambar</label>
                <input class="form-control" type="file" name="file" id="formFile" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-danger mt-3">
					Hapus
				</button>
            </div>
            <img id="frame" src="" class="img-fluid mb-3" />
		<div class="d-flex justify-content-end align-items-center">
			<button type="submit" name="submit" class="btn btn-primary mx-3">Simpan</button>
			<button type="reset" class="btn btn-secondary">Batal</button>
		</div>
	</form>
	</div>
</section>

<script>
    function preview() {
    	frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
    	document.getElementById('formFile').value = null;
        	frame.src = "";
			event.preventDefault();
    }
</script>

<?php
include_once "core/kon.php";
include_once "core/session.php";

if (isset($_POST["submit"])) {
  # code...

  $namaproduk = ucwords($_POST["namaproduk"]);
  $hargaproduk = $_POST["hargaproduk"];
  $stok = $_POST["stok"];
  $detailproduk = $_POST["detailproduk"];

  // $foto = "aaa";

  $name = $_FILES["file"]["name"];
  $target_dir = "../images/produk/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  $maxDim = 800;
  $file_name = $_FILES["file"]["tmp_name"];
  list($width, $height, $type, $attr) = getimagesize($file_name);
  if ($width > $maxDim || $height > $maxDim) {
    $target_filename = $file_name;
    $ratio = $width / $height;
    if ($ratio > 1) {
      $new_width = $maxDim;
      $new_height = $maxDim / $ratio;
    } else {
      $new_width = $maxDim * $ratio;
      $new_height = $maxDim;
    }
    $src = imagecreatefromstring(file_get_contents($file_name));
    $dst = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled(
      $dst,
      $src,
      0,
      0,
      0,
      0,
      $new_width,
      $new_height,
      $width,
      $height
    );
    imagedestroy($src);
    imagepng($dst, $target_filename); // adjust format as needed
    imagedestroy($dst);
  }

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = ["jpg", "jpeg", "png", "gif"];

  // Check extension
  if (in_array($imageFileType, $extensions_arr)) {
    // Insert record
    $tambah = mysqli_query(
      $con,
      "INSERT INTO produk (namaproduk, hargaproduk, stok, detailproduk, foto, idmerchant) VALUES ('$namaproduk','$hargaproduk','$stok','$detailproduk', '$name', '$idadmin')"
    );

    if ($tambah) {
      // Upload file
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $name);
      header("Location:index.php?p=produk&ket=success");
    } else {
      header("Location:index.php?p=produk&ket=failed");
    }
  }
}


?>
