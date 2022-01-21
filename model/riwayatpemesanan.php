<?php
include "core/kon.php";
include "core/session.php";
include "core/alert.php";
?>

<section class="container-fluid px-4">
  <div class="container">
    <h1 class="text-center" style="margin-top: 5rem;">Riwayat Transaksi</h1>
		<a href="index.php?p=infotransfer" class="btn btn-info mb-3 text-white">Lihat tujuan transfer</a>
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">ID Order</th>
					<th scope="col">Harga Kirim</th>
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
     "SELECT umkm.order.*, statusorder.namastatus FROM umkm.ORDER LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder WHERE idanggota='$idanggota' ORDER BY umkm.order.idorder DESC"
   );
   while ($r = mysqli_fetch_array($q)) { ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $r["idorder"]; ?></td>
            <td><?php echo $r["alamatkirim"]; ?></td>
            <td><?php echo number_format($r["total"]); ?></td>
            <td><?php echo $r["tglorder"]; ?></td>
            <td><?php echo $r["namastatus"]; ?></td>
            <?php if ($r["idstatusorder"] == "1") { ?>
					<td>
						<a href="index.php?p=konfirmasipembayaran&id=<?php echo $r[
        "idorder"
      ]; ?>&idmerchant=<?php echo $r[
  "idmerchant"
]; ?>" class="badge bg-success text-white">
							Bayar
						</a>
						<a href="index.php?p=concancelrorder&id=<?php echo $r[
        "idorder"
      ]; ?>&idmerchant=<?php echo $r[
  "idmerchant"
]; ?>" class="badge bg-danger text-white" onClick="return confirm('Apakah Anda yakin?')">
							Batal
						</a>
            <?php } ?>
						<a href="index.php?p=lihatdetailorder&id=<?php echo $r[
        "idorder"
      ]; ?>&idmerchant=<?php echo $r[
  "idmerchant"
]; ?>" class="badge bg-warning">
							Lihat
						</a>
					</td>
				</tr>
				<?php $no++;}
   ?>
			</tbody>
		</table>
	</div>
</section>