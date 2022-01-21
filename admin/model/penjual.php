<?php
include "core/kon.php"; ?>
<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Penjual </h1>
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
		<li class="active">Daftar Penjual</li>
	</ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
						<?php include "core/alert.php"; ?>
						<div class="box-title">
							<h3><i class="fa fa-table"></i> Penjual</h3>
							<div class="box-tool">
								<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
							</div>
						</div>
						<div class="box-content">
							<!-- <a href="index.php?p=tambahpenjual"><button class="btn btn-success">Tambah Data</button></a> -->
						</div>
						<div class="box-content">
							<div class="clearfix"></div>
							<div class="table-responsive" style="border:0">
								<table class="table table-advance" id="table1">
									<thead>
										<tr><th>No</th>
											<th>Nama Penjual</th>
											<th>JK</th>
											<th>No HP</th>
											<th>Alamat</th>
											<th>Tgl Daftar</th>
											<th>Username</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$q = mysqli_query($con, "SELECT * FROM merchant ORDER BY tgldaftar DESC");
										while ($r = mysqli_fetch_array($q)) { ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $r["namatoko"]; ?></td>
											<td><?php echo $r["jk"]; ?></td>
											<td><?php echo $r["nohp"]; ?></td>
											<td><?php echo $r["alamat"]; ?></td>
											<td><?php echo $r["tgldaftar"]; ?></td>
											<td><?php echo $r["username"]; ?></td>
											<td>
											<?php if ($r["status"] == 1) {
													echo "Terverifikasi";
												} else {
													echo "Belum Terverifikasi";
												} 
											?>
											</td>
											<td width="20%">
												<a href="index.php?p=editpenjual&id=<?php echo $r["idmerchant"]; ?>"><button type="button" class="btn btn-primary">
													<span class="glyphicon glyphicon-pencil">
													</span> Edit
												</button>
												</a>
												<a href="index.php?p=conhapuspenjual&id=<?php echo $r["idmerchant"]; ?>" 
													onClick="return confirm('Yakin anda akan menghapus?')">
													<button type="button" class="btn btn-danger">
														<span class="glyphicon glyphicon-trash">
														</span>Hapus
													</button>
												</a>
											</td>
											</tr>
											<?php
											$no++;
											}
											?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
