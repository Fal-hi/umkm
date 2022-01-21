<?php
include "../core/session.php"; ?>

<section class="container">	
	<h2 class="text-center">Laporan</h2>
	<div class="d-flex justify-content-center align-items-center">
	<form class="col-md-6">
		<div class="my-3 bg-info p-2">
			<span class="text-center text-white">
			Masukkan tanggal awal dan tanggal akhir. Contoh Anda ingin mencari laporan harian pada tanggal 01-01-2022, Maka anda harus mengisikan Tanggal awal 01-01-2022 dan sampai tanggal akhir 01-01-2022.
			</span>
		</div>
		<div class="mb-3">
			<label for="namabarang" class="form-label">Pimpinan</label>
			<input type="text" class="form-control" name="pimpinan" autofocus>
		</div>
		<div class="mb-3">
			<label for="hargabarang" class="form-label">Tanggal Awal</label>
			<input type="text" class="form-control" name="tglawal">
		</div>
		<div class="mb-3">
			<label for="stok" class="form-label">Tanggal Akhir</label>
			<input type="text" class="form-control" name="tglakhir">
		</div>
		<div class="mb-3">
			<input type="hidden" class="form-control" name="idmerchant" value="<?php echo $idadmin; ?>">
		</div>
		<div class="d-flex justify-content-end align-items-center">
			<!-- <button formaction="laporan/laporan_harian.php" type="submit" class="btn btn-success mx-3">Cetak Laporan Harian</button> -->
			<a href="laporan/laporan_harian.php" class="btn btn-success mx-3">Cetak Laporan Harian</a>
			<button formaction="laporan/laporan_bulanan.php" type="submit" class="btn btn-primary">Cetak Laporan Bulanan</button>
			<button type="submit" class="btn btn-warning mx-3 text-white" formaction="laporan/laporan_tahunan.php">Cetak Laporan Tahunan</button>
		</div>
	</form>
	</div>
</section>