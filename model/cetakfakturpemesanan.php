<!DOCTYPE html>
<?php
include "../core/kon.php";
include "../core/session.php";
$id = $_GET["id"];
$idmerchant = $_GET["idmerchant"];
?>
<html>
<style type="text/css">
  table {
    border-collapse: collapse;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 2px;
  }

  table.second,
  th.second,
  td.second {
    border: 0px solid black;
  }
</style>

<head>
  <title>Cetak Faktur</title>
</head>
<!-- <body onload="window.print()"> -->
<br>
<font>
  <p align="center">
    <!-- <img src="../../img/logocopsurat.png" width="5%"> --><br>
    <font size="6px">UMKM</font><br>Faktur Pemesanan
  </p>
</font>
<hr noshade="1">
<br>
<?php
$qqq = mysqli_query($con, "SELECT umkm.order.*, statusorder.namastatus FROM umkm.order
    LEFT JOIN statusorder ON umkm.order.idstatusorder = statusorder.idstatusorder WHERE umkm.order.idorder = '$id' AND umkm.order.idmerchant = '$idmerchant'");
$h = mysqli_fetch_array($qqq);
?>
<h3 align="center">
  Status Order Anda Saat Ini = " <?php echo $h["namastatus"]; ?> "
</h3>
<br>
<!-- <h5>
   Tanggal : <?php echo $dateawalreal; ?>&nbsp;&nbsp;s/d&nbsp;&nbsp;<?php echo $dateakhireal; ?>
 </h5> -->
<table class="table table-striped table-bordered table-hover" width="60%" align="center">
  <tr align=center class="table-active">
    <th>No</th>
    <th>Ukuran </th>
    <th>Jumlah Beli</th>
    <th>Subtotal</th>
  </tr>
  <?php
  $total = 0;
  $no = 1;
  $q = mysqli_query($con, "SELECT orderdetail.*, produk.namaproduk, kota.tarif, kota.namakota FROM orderdetail LEFT JOIN produk ON orderdetail.idproduk = produk.idproduk
    LEFT JOIN kota ON orderdetail.idkota = kota.idkota WHERE idorder = '$id' AND orderdetail.idmerchant = '$idmerchant'");
  while ($r = mysqli_fetch_array($q)) {
    $total = $total + $r["subtotal"];
    $ongkos = $r["tarif"];
    $kota = $r["namakota"];
  ?>
    <tr align="center">
      <td><?php echo $no; ?></td>
      <td><?php echo $r["namaproduk"]; ?></td>
      <td><?php echo $r["jumlah"]; ?></td>
      <td><?php echo $r["subtotal"]; ?></td>
    </tr>
  <?php $no++;
  }
  ?>
  <tr>
    <td colspan="3">Sub Total</td>
    <td>Rp.<?php echo number_format($total); ?></td>
  </tr>
  <tr>
    <td colspan="3">Ongkir ke <?php echo $kota; ?></td>
    <td>Rp.<?php echo number_format($ongkos); ?></td>
  </tr>
  <tr>
    <td colspan="3">Total</td>
    <?php $tot = $total + $ongkos; ?>
    <td><b>Rp.<?php echo number_format($tot); ?></b></td>
  </tr>
</table>
<br>
<p>
  Ket : <br>
  Jumlah History : <b><?php echo $no - 1; ?></b> Order
</p>
</body>
<script>
  window.print();
</script>

</html>