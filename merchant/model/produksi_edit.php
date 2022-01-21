<?php
include "core/kon.php"; ?>
<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Produksi </h1>
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
			<a href="index.php?p=produksi">Daftar Produksi</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">Edit Produksi</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
	<div class="col-md-12">
		<div class="box box-green">
			<div class="box-title">
				<h3><i class="fa fa-edit"></i> Edit Data Produksi / Pengeluaran </h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
				</div>
			</div>
			<?php
   $id = $_GET["id"];
   $q = mysqli_query($con, "SELECT * FROM produksi where idproduksi = '$id'");
   $r = mysqli_fetch_array($q);
   $date = str_replace("-", "/", $r["tgl"]);
   $newDate = date("d/m/Y", strtotime($date));
   ?>			
			<div class="box-content">
				<form method="POST" action="index.php?p=coneditproduksi" class="form-horizontal form-row-separated">
					<div class="form-group">
						<label for="textfield3" class="col-sm-3 col-lg-2 control-label">Id Produksi</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="namapengeluaran" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "idproduksi"
       ]; ?>" disabled
							>
						</div>
						<input type="hidden" value="<?php echo $r["idproduksi"]; ?>" name="idproduksi">
					</div>
					<div class="form-group">
						<label for="textfield3" class="col-sm-3 col-lg-2 control-label">Nama Pengeluaran</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="namapengeluaran" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "namapengeluaran"
       ]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password3" class="col-sm-3 col-lg-2 control-label">Jumlah</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="jumlah" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "jumlah"
       ]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="password3" class="col-sm-3 col-lg-2 control-label">Total Pengeluaran</label>
						<div class="col-sm-9 col-lg-10 controls">
							<input type="text" name="totalpengeluaran" placeholder="" class="form-control" required autofocus value="<?php echo $r[
         "totalpengeluaran"
       ]; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 col-lg-2 control-label">Tanggal</label>
						<div class="col-sm-5 col-lg-3 controls">
							<input class="form-control date-picker" name="tgl" size="16" type="text" required value="<?php echo $newDate; ?>"/>
						</div>
						<!-- 
						$date = str_replace('/', '-', $origDate );
						$newDate = date("Y-m-d", strtotime($date)); 
					-->
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