<?php
include "core/kon.php";
$id = $_GET["id"];
?>
<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Stock Produk </h1>
		<h4>Di menu ini anda dapat melakukan input, edit, hapus data</h4>
	</div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index.php">Home</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li>
			<a href="index.php?p=produk">Daftar Stock Produk</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">Tambah Stock Produk</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
	<div class="col-md-12">
		<div class="box box-green">
			<div class="box-title">
				<h3><i class="fa fa-edit"></i> Tambah Data Produk </h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
				</div>
			</div>
			<?php
				$q = mysqli_query($con, "SELECT * FROM produk WHERE idproduk = '$id'");
				$r = mysqli_fetch_array($q);
			?>
			<div class="box-content">
				<form method="POST" action="index.php?p=contambahstok" class="form-horizontal form-row-separated" enctype="multipart/form-data">
					<div class="form-group">
						<label for="textfield3" class="col-sm-3 col-lg-2 control-label">Stok Terakhir Produk</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="z" placeholder="" class="form-control" disabled value="<?php echo $r["stok"]; ?>">
						</div>
						<input type="hidden" value="<?php echo $id; ?>" name="id">
						<input type="hidden" value="<?php echo $r["stok"]; ?>" name="stok">
					</div>
					<div class="form-group">
						<label for="textfield3" class="col-sm-3 col-lg-2 control-label">Nama Produk Produk</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="z" placeholder="" class="form-control" disabled value="<?php echo $r["namaproduk"]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password3" class="col-sm-3 col-lg-2 control-label">Banyak Stok Ditambahkan</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="tambahstok" placeholder="" class="form-control" required autofocus>
						</div>
					</div>
					<div class="form-group last">
						<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
							<button type="button" class="btn">Cancel</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
/*
<input type="hidden" value="<?php ?>" name="id">

<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Currency</label>
<div class="col-sm-9 col-lg-10 controls">
<input class="form-control col-md-5" type="text" data-mask="Rp 999.999.999" placeholder="~~Arahkan kursor di awal form~~" required autofocus="">
<span class="help-inline">Rp 100.000</span>
</div>
</div>

<div class="form-group">
<label for="textarea3" class="col-sm-3 col-lg-2 control-label">Textarea</label>
<div class="col-sm-9 col-lg-10 controls">
<textarea name="textarea3" id="textarea3" rows="5" class="form-control" required autofocus></textarea>
</div>
</div>

$date = str_replace('/', '-', $origDate );
$newDate = date("Y-m-d", strtotime($date)); 

*/
?>
?> ?>