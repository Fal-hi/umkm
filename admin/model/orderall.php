<?php
include "core/kon.php"; ?>
<div class="page-title">
	<div>
		<h1><i class="fa fa-folder"></i> Order </h1>
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
		<li class="active">Daftar Order</li>
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
							<h3><i class="fa fa-table"></i> Order</h3>
							<div class="box-tool">
								<a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="clearfix"></div>
							<div class="table-responsive" style="border:0">
								<table class="table table-advance" id="table1">
									<thead>
										<tr>
											<th>No</th>
											<th>Id Order</th>
											<th>Alamat Kirim</th>
											<th>Total</th>
											<th>Tanggal</th>
											<th>Status</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
											$q = mysqli_query($con,"SELECT umkm.order.*, statusorder.namastatus FROM umkm.order LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder ");
											while ($r = mysqli_fetch_array($q)) { 
										?>								
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $r["idorder"]; ?></td>
												<td><?php echo $r["alamatkirim"]; ?>
												</td>
												<td>Rp.<?php echo number_format($r["total"]); ?>
												</td>
												<td><?php echo $r["tglorder"]; ?></td>
												<td><?php echo $r["namastatus"]; ?></td>
												<?php 
												if ($r["idstatusorder"] == "1") { 
												?>
												<td>
													<a href="index.php?p=conorderkonfirmasicancel&id=<?php echo $r["idorder"]; ?>&idmerchant=<?php echo $r["idmerchant"]; ?>">
													<button type="button" class="btn btn-danger">
														<span class="glyphicon glyphicon-pencil">
														</span> Cancel
													</button></a>
												</td>
												<?php 
												} elseif ($r["idstatusorder"] == "3") { ?>
												<td>
													<a href="index.php?p=conorderkonfirmasiberhasil&amp;id=<?php echo $r["idorder"]; ?>&idmerchant=<?php echo $r["idmerchant"]; ?>">
													<button type="button" class="btn btn-success">
														<span class="glyphicon glyphicon-pencil">
														</span> Berhasil
													</button>
													</a>
												</td>
											<?php 
											} else { 
											?>
											<td></td>
											<?php 
											}
											?>
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
