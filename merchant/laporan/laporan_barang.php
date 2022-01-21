<?php
include "../../core/kon.php";
include "../../core/date.php";
include '../../core/session.php';
$idadmin = $_GET["idadmin"];
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous" defer></script>
  <title>Laporan</title>
</head>

<body onload="window.print()">
  <br>
  <font>
    <p align="center">
      <br>
      <font size="6px">Go-Online</font><br>Laporan Stok Barang
    </p>
  </font>
  <hr noshade="1">
  <br>
  <h2 class="text-center">Laporan Stok Barang</h2><br>
  <div class="container">
  <h5>Tempat/Tanggal : PANYABUNGAN/<?php echo date("d-m-Y"); ?></h5>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">Detail Produk</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    $q = mysqli_query(
      $con,"SELECT * FROM produk WHERE idmerchant = '$idadmin'");
        while ($r = mysqli_fetch_array($q)) { ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $r["namaproduk"]; ?></td>
            <td>Rp.<?php echo number_format($r["hargaproduk"]); ?></td>
            <td><?php echo $r["stok"]; ?></td>
            <td><?php echo $r["detailproduk"]; ?></td>
          </tr>
    <?php $no++;}
    ?>
    </tbody>
  </table>
  <div class="d-flex justify-content-lg-between align-items-center">
    <p>Jumlah History : <b><?php echo $no - 1; ?> Order</b> </p>
  </div>
</div>
</body>

</html>