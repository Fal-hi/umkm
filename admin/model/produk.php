<?php
include "core/kon.php"; ?>
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
		<li class="active">Daftar Produk</li>
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
							<h3><i class="fa fa-table"></i> Produk</h3>
							<div class="box-tool">
								<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
							</div>
						</div>
						<div class="box-content">
							<a href="index.php?p=tambahproduk"><button class="btn btn-success">Tambah Data</button></a>
						</div>
						<div class="box-content">
							<div class="clearfix"></div>
							<div class="table-responsive" style="border:0">
								<table class="table table-advance" id="table1">
									<thead>
										<tr><th>No</th>
											<th>Nama Produk</th>
											<th>Harga Produk</th>
											<th>Stok</th>
											<th>Detail Produk</th>
											<th colspan="2">Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$q = mysqli_query($con, "SELECT * FROM produk ORDER BY namaproduk DESC");
										while ($r = mysqli_fetch_array($q)) {
											$path = "images/produk/" . $r["foto"]; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $r["namaproduk"]; ?></td>
											<td><?php echo $r["hargaproduk"]; ?></td>
											<td><?php echo $r["stok"]; ?></td>
											<td><?php echo $r["detailproduk"]; ?></td>
											<td width="10%">
												<a href="index.php?p=tambahstokproduk&id=<?php echo $r["idproduk"]; ?>">
												<button type="button" class="btn btn-success">
													<span class="glyphicon glyphicon-pencil">
													</span>Tambah Stok
												</button>
												</a>
											</td>
											<td width="20%">
												<a href="index.php?p=editproduk&id=<?php echo $r["idproduk"]; ?>">
												<button type="button" class="btn btn-primary">
													<span class="glyphicon glyphicon-pencil">
													</span> Edit
												</button>
												</a>
												<a href="index.php?p=conhapusproduk&id=<?php echo $r["idproduk"]; ?>&foto=<?php echo $path; ?>" onClick="return confirm('Yakin anda akan menghapus?')">
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
