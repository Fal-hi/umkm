<?php
include "core/kon.php"; ?>
<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Anggota </h1>
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
			<a href="index.php?p=anggota">Daftar Anggota</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">Edit Anggota</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row hidden-xs">
	<div class="col-md-12">
		<div class="box box-green">
			<div class="box-title">
				<h3><i class="fa fa-bars"></i> Edit Data Anggota</h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
					<a data-action="close" href="#"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<?php
				$id = $_GET["id"];
				$q = mysqli_query($con, "SELECT * FROM anggota WHERE idanggota = '$id'");
				$r = mysqli_fetch_array($q);
			?>
			<div class="box-content">
				<form method="POST" action="index.php?p=coneditanggota" class="form-horizontal">
					<div class="row">
						<div class="col-md-6 ">
							<!-- BEGIN Left Side -->
							<div class="form-group">
								<label for="textfield1" class="col-xs-3 col-lg-2 control-label">Nama Lengkap</label>
								<div class="col-sm-9 col-lg-10 controls">
									<input type="text" name="namalengkap" placeholder="" class="form-control" required autofocus value="<?php echo $r["namalengkap"]; ?>">
									<input type="hidden" value="<?php echo $r["idanggota"]; ?>" name="idanggota">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 col-lg-2 control-label">Jenis Kelamin</label>
								<div class="col-sm-9 col-lg-10 controls">
									<select class="form-control" data-placeholder="Choose a Category" tabindex="1" name="jk">
										<option value="<?php echo $r["jk"]; ?>">
											<?php echo $r["jk"]; ?>
										</option>
										<option value="L">Laki - Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="textfield1" class="col-xs-3 col-lg-2 control-label">No HP</label>
								<div class="col-sm-9 col-lg-10 controls">
									<input type="text" name="nohp" placeholder="" class="form-control" required autofocus value="<?php echo $r["nohp"]; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="textarea1" class="col-xs-3 col-lg-2 control-label">Alamat</label>
								<div class="col-sm-9 col-lg-10 controls">
									<textarea name="alamat" rows="5" class="form-control" required autofocus>
										<?php echo $r["alamat"]; ?>
									</textarea>
								</div>
							</div>
							<!-- END Left Side -->
						</div>
						<div class="col-md-6 ">
							<!-- BEGIN Right Side -->
							<div class="form-group">
								<label for="textfield2" class="col-xs-3 col-lg-2 control-label">Username</label>
								<div class="col-sm-9 col-lg-10 controls">
									<input type="text" name="username" placeholder="" class="form-control" required autofocus value="<?php echo $r["username"]; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="password2" class="col-xs-3 col-lg-2 control-label">Password</label>
								<div class="col-sm-9 col-lg-10 controls">
									<input type="password" name="password" placeholder="~Jika Tidak Ada Perubahan Pada Password Biarkan Kosong~" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
									<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
									<button type="button" class="btn">Cancel</button>
								</div>
							</div>
							<!-- END Right Side -->
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