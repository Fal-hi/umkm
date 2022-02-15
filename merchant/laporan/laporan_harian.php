<?php
include "../../core/kon.php";
include "../../core/date.php";
$idadmin = $_POST["idmerchant"];
$pimpinan = $_POST["pimpinan"];
$tglawal = $_POST["tglawal"];
$tglakhir = $_POST["tglakhir"];

$yearawal = substr($tglawal, 6);
$yearakhir = substr($tglakhir, 6);

$monthawal = substr($tglawal, 3, 2);
$monthakhir = substr($tglakhir, 3, 2);

$dayawal = substr($tglawal, 0, 2);
$dayakhir = substr($tglakhir, 0, 2);

$dateawal = $yearawal . "-" . $monthawal . "-" . $dayawal;
$dateakhir = $yearakhir . "-" . $monthakhir . "-" . $dayakhir;

$dateawalreal = $monthawal . " - " . $dayawal . " - " . $yearawal;
$dateakhireal = $monthakhir . " - " . $dayakhir . " - " . $yearakhir;

$tanggalawal = $yearawal . "-" . $dayawal . "-" . $monthawal;
$tanggalakhir = $yearakhir . "-" . $dayakhir . "-" . $monthakhir;

// echo $tanggalakhir;
// echo $dateakhir;
?>
<!DOCTYPE html>
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
  <title>Laporan </title>
</head>

<!-- <body> -->

<body onload="window.print()">
  <br>
  <font>
    <p align="center">
      <!-- <img src="../../img/logocopsurat.png" width="5%"> --><br>
      <font size="6px">Go-Online</font><br>Laporan Pemesanan Harian
    </p>
  </font>

  <hr noshade="1">
  <br>
  <h3 align="center"> Laporan Pemesanan Harian</h3><br>

  <h5>
    Tanggal : <?php echo $tglawal . " - " . $tglakhir ?>
  </h5>

  <table align="center" width="100%">
    <tr align=center class="table-active" bgcolor="yellow">
      <th width="10%">No</th>
      <th width="20%">ID Order</th>
      <th width="25%">Nama Produk</th>
      <th width="15%">Harga</th>
      <th width="5%">Jumlah</th>
      <th width="20%">Sub Total</th>
    </tr>

    <?php
    $no = 1;
    $totalharga = 0;
    $idkota = 1;
    $total = 0;
    $ongkir = 0;
    $q = mysqli_query(
      $con,
      "SELECT konfimasibayar.* , order.idstatusorder, produk.namaproduk, produk.hargaproduk, orderdetail.jumlah,orderdetail.idkota
    FROM konfimasibayar
    LEFT JOIN umkm.order ON konfimasibayar.idorder = order.idorder
    LEFT JOIN produk ON konfimasibayar.idmerchant = produk.idmerchant
    LEFT JOIN orderdetail ON konfimasibayar.idorder = orderdetail.idorder WHERE (order.idstatusorder = 3 OR order.idstatusorder = 4)
    AND konfimasibayar.idmerchant = '$idadmin' AND konfimasibayar.tgltransfer BETWEEN '$tglawal' AND '$tglakhir' ORDER BY order.idorder");
    while ($r = mysqli_fetch_array($q)) {
    ?>
      <tr align="center">
        <td width="25%"><?php echo $no++ ?></td>
        <td width="15%"><?php echo $r["idorder"] ?></td>
        <td width="5%"><?php echo $r["namaproduk"] ?></td>
        <?php
        $totalharga = $r["jumlah"] * $r["hargaproduk"];
        $idkota = $r["idkota"];
        // $total = $total + $subtotal;
        ?>
        <td width="5%"><?php echo number_format($r["hargaproduk"]) ?></td>
        <td width="20%"><?php echo $r["jumlah"] ?></td>
        <td></td>
      </tr>
      <tr align="center">
        <th colspan="5">
          Total Harga :
        </th>
        <th colspan="2">
          <?php echo number_format($totalharga) ?>
        </th>
      </tr>
      <tr align="center">
        <th colspan="5">
          Total Ongkir :
        </th>
        <?php
        $kota = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM kota where idkota = '$idkota' "));
        $total = $totalharga + $kota["tarif"];
        ?>
        <th colspan="2">
          <?php echo number_format($kota["tarif"]) ?>
        </th>
      </tr>
      <tr align="center">
        <th colspan="5">
          Total Keseluruhan :
        </th>
        <th colspan="2">
          <?php echo number_format($total) ?>
        </th>
      </tr>
    <?php } ?>
  </table>
</body>

</html>