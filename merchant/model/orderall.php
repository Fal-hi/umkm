<?php
include "core/kon.php";
include "core/session.php";
?>

<section class="container-fluid px-4">
	<h1 class="mt-4">Order</h1>
	<h4>Di menu ini anda dapat melakukan input, edit dan hapus data</h4>
	<div class="container">
		<table class="table my-3">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID Order</th>
					<th scope="col">Alamat Kirim</th>
					<th scope="col">Total</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
   $no = 1;
   $q = mysqli_query(
     $con,
     "SELECT umkm.order.*, statusorder.namastatus FROM umkm.order LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder WHERE umkm.order.idmerchant = '$idadmin'"
   );
   while ($r = mysqli_fetch_array($q)) { ?>
				<tr>
					<th scope="row"><?php echo $no; ?></th>
					<td><?php echo $r["idorder"]; ?></td>
					<td><?php echo $r["alamatkirim"]; ?></td>
					<td>Rp.<?php echo number_format($r["total"]); ?></td>
					<td><?php echo $r["tglorder"]; ?></td>
					<td><?php echo $r["namastatus"]; ?></td>
					<td>
					<?php if ($r["idstatusorder"] == "1") { ?>
						<a href="index.php?p=conorderkonfirmasicancel&amp;id=<?php echo $r[
        "idorder"
      ]; ?>" class="bagde bg-secondary">
							<i class="bi bi-x-lg"></i> Batal
						</a>
					</td>
					<?php } elseif ($r["idstatusorder"] == "3") { ?>
					<td>
						<a href="index.php?p=conorderkonfirmasiberhasil&amp;id=<?php echo $r[
        "idorder"
      ]; ?>" class="bagde bg-secondary">
							<i class="bi bi-check-lg"></i> Berhasil
						</a>
					</td>
					<?php } else { ?>
					<td></td>
					<?php } ?>
				</tr>
				<?php $no++;}
   ?>
			</tbody>
		</table>
	</div>
</section>