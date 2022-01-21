<?php
include "core/kon.php";
include "core/session.php";
?>
<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Produk </h1>
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
			<a href="index.php?p=produk">Daftar Produk</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">Edit Produk</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
	<div class="col-md-12">
		<div class="box box-green">
			<div class="box-title">
				<h3><i class="fa fa-edit"></i> Edit Data Produk </h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
				</div>
			</div>
			<?php
   $id = $_GET["id"];
   $q = mysqli_query($con, "SELECT * FROM produk where idproduk = '$id'");
   $r = mysqli_fetch_array($q);
   $image = $r["foto"];
   $path = "../images/produk/" . $image;
   ?>			
			<div class="box-content">
				<form method="POST" action="index.php?p=coneditproduk" class="form-horizontal form-row-separated" enctype="multipart/form-data">
					<div class="form-group">
						<label for="textfield3" class="col-sm-3 col-lg-2 control-label">Id Produk</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="idproduk" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "idproduk"
       ]; ?>" disabled>
						</div>
						<input type="hidden" value="<?php echo $r["idproduk"]; ?>" name="id">
					</div>
					<div class="form-group">
						<label for="textfield3" class="col-sm-3 col-lg-2 control-label">Nama Produk</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="namaproduk" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "namaproduk"
       ]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password3" class="col-sm-3 col-lg-2 control-label">Harga Produk</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="hargaproduk" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "hargaproduk"
       ]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password3" class="col-sm-3 col-lg-2 control-label">Stok</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="stok" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "stok"
       ]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="textarea3" class="col-sm-3 col-lg-2 control-label">Detail Produk</label>
						<div class="col-sm-9 col-lg-10 controls">
							<textarea name="detailproduk" rows="5" class="form-control" required autofocus><?php echo $r[
         "detailproduk"
       ]; ?>
							</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">Image Upload</label>
						<div class="col-sm-9 col-lg-10 controls">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-new img-thumbnail" style="width: 200px; height: 150px;">
									<img src="<?php echo $path; ?>" alt="" />
								</div>
								<div class="fileupload-preview fileupload-exists img-thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
									<span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span>
									<span class="fileupload-exists">Change</span>
									<input type="file" name="file" class="file-input" /></span>
									<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
							</div>
							<span class="label label-important">NOTE!</span>
							<span>Attached image img-thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only</span>
							<input type="hidden" value="<?php echo $r["foto"]; ?>" name="fotoold">
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