<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Laporan </h1>
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
			<a href="index.php?p=laporan">Daftar laporan</a>
			<span class="divider"><i class="fa fa-angle-right"></i></span>
		</li>
		<li class="active">Cetak Laporan</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
	<div class="col-md-12">
		<div class="box box-green">
			<div class="box-title">
				<h3><i class="fa fa-edit"></i> Cetak Data laporan </h3>
				<div class="box-tool">
					<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
				</div>
			</div>
			<div class="box-content">
				<br>
				<form role="form" method="post" action="" target="_blank">
					<div class="form-group" align="center">
						<p>
							Masukkan tanggal awal dan tanggal akhir, contoh anda ingin mencari laporan harian<br> pada tanggal 14-02-2019, Maka anda harus mengisikan Tanggal awal 14-02-2019 dan<br>sampai tanggal akhir 14-02-2019
						</p>
						<br>
						<table>
							<tr>
								<td colspan="3">
									<div class="form-group">
										<label>Pimpinan : </label>
										<input class="form-control" placeholder="Enter text" name="pimpinan" required autofocus>
									</div>
								</td>          
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
										<label class="col-sm-3 col-lg-2 control-label">Tanggal Awal</label>
										<div class="col-sm-12 col-lg-12 controls">
											<input class="form-control date-picker" name="tglawal" size="16" type="text" />
										</div>
									</div>
								</td> 
							</tr>
							<tr>
								<td colspan="3">
									<div class="form-group">
										<label class="col-sm-3 col-lg-2 control-label">Tanggal Akhir</label>
										<div class="col-sm-12 col-lg-12 controls">
											<input class="form-control date-picker" name="tglakhir" size="16" type="text" />
										</div>
									</div>
								</td> 
							</tr>
						</table>
						<br><br>
						<button type="submit" class="btn btn-success" formaction="laporan/laporan_harian.php">Cetak Laporan Harian</button></a><br><br>
						<button type="submit" class="btn btn-primary" formaction="laporan/laporan_bulanan.php">Cetak Laporan Bulanan</button></a><br><br>
						<button type="submit" class="btn btn-warning" formaction="laporan/laporan_tahunan.php">Cetak Laporan Tahunan</button></a><br><br>
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
