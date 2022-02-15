<?php
include "core/kon.php";
include "core/session.php";
?>

<style>
	.daftar-produk {
		overflow-x: scroll;
	}
</style>

<section class="container-fluid px-4">
	<h1 class="mt-4">Produk</h1>
	<h4>Di menu ini anda dapat melakukan input, edit dan hapus data</h4>
	<a href="index.php?p=tambahproduk" class="btn btn-info text-white my-3">Tambah Data</a>
	<div class="daftar-produk">
		<table class="table">
			<thead class="table-dark">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Produk</th>
					<th scope="col">Harga Produk</th>
					<th scope="col">Stok</th>
					<th scope="col">Detail</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no = 1;
				$q = mysqli_query(
					$con,
					"SELECT * FROM produk WHERE idmerchant = '$idadmin' ORDER BY namaproduk DESC"
				);
				while ($r = mysqli_fetch_array($q)) {
					$path = "images/produk/" . $r["foto"]; ?>
				<tr>
					<th scope="row"><?php echo $no; ?></th>
					<td><?php echo $r["namaproduk"]; ?></td>
					<td><?php echo $r["hargaproduk"]; ?></td>
					<td><?php echo $r["stok"]; ?></td>
					<td><?php echo $r["detailproduk"]; ?></td>
					<td>
						<a href="index.php?p=tambahstokproduk&id=<?php echo $r["idproduk"]; ?>" class="badge bg-info text-white">
							<i class="bi bi-plus-lg"></i>
						</a>
						<a href="index.php?p=editproduk&id=<?php echo $r["idproduk"]; ?>"" class="badge bg-warning text-white">
							<i class="bi bi-pencil-square"></i>
						</a>
						<a href="index.php?p=conhapusproduk&id=<?php echo $r["idproduk"]; ?>&foto=<?php echo $path; ?>" class="badge bg-danger" onclick="return confirm('Apakah Anda Yakin?')">
							<i class="bi bi-trash"></i>
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
</section>