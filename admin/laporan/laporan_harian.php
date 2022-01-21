<?php
include "../../core/kon.php";
include "../../core/date.php";
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
    Tanggal : <?php echo $dateawalreal; ?>&nbsp;&nbsp;s/d&nbsp;&nbsp;<?php echo $dateakhireal; ?>
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
    $row = 1;
    // $subtotal = 0;
    $total = 0;
    $ongkir = 0;
    $q = mysqli_query($con, "SELECT konfimasibayar.* , order.idstatusorder, orderdetail.idkota FROM konfimasibayar LEFT JOIN umkm.order ON konfimasibayar.idorder = order.idorder LEFT JOIN orderdetail ON konfimasibayar.idorder = orderdetail.idorder WHERE (order.idstatusorder = 3 OR order.idstatusorder = 4) AND konfimasibayar.tgltransfer BETWEEN '$tanggalawal' AND '$tanggalakhir' GROUP BY order.idorder");

    while ($r = mysqli_fetch_array($q)) {
        $qq = mysqli_query($con, "SELECT idorder FROM orderdetail WHERE idorder = '$r[idorder]' AND (orderdetail.idstatusorder = 3 OR orderdetail.idstatusorder = 4)");
        $rows = mysqli_num_rows($qq);
      }
      ?>
      <tr align="center">
        <td width="10%" rowspan="<?php echo $rows + 1; ?>">
          <?php echo $no; ?>s
        </td>
        <td width="20%" rowspan="<?php echo $rows + 1; ?>">
          <?php echo $r["idorder"]; ?>
        </td>
      </tr>

      <?php
        $qqq = mysqli_query($con, "SELECT orderdetail.*, produk.namaproduk, produk.hargaproduk, kota.tarif FROM orderdetail LEFT JOIN produk ON orderdetail.idproduk = produk.idproduk LEFT JOIN kota ON orderdetail.idkota = kota.idkota WHERE idorder = '$r[idorder]' AND (orderdetail.idstatusorder = 3 orderdetail.idstatusorder = 4)");
        while ($h = mysqli_fetch_array($qqq)) { 
      ?>
        <tr align="center">
          <td width="25%"><?php echo $h["namaproduk"]; ?></td>
          <td width="15%">
            Rp.<?php echo number_format($h["hargaproduk"]); ?>
          </td>
          <td width="5%"><?php echo $h["jumlah"]; ?></td>
          <?php
            $subtotal = $h["jumlah"] * $h["hargaproduk"];
            $total = $total + $subtotal;
          ?>
          <!-- <td width="5%"><?php echo $h["idkota"]; ?></td> -->
          <td width="20%">Rp.<?php echo number_format($subtotal); ?></td>
        </tr>
      <?php
      $aa = mysqli_query($con, "SELECT tarif FROM kota WHERE idkota = '$r[idkota]'");
      while ($bb = mysqli_fetch_array($aa)) {
        $ongkir = $ongkir + $bb["tarif"];
      }
      }
      ?>
    <?php // $aa = mysqli_query($con,"SELECT tarif FROM kota where idkota = '$r[idkota]'");
      // $aa = mysqli_query($con,"SELECT tarif FROM kota where idkota = '$r[idkota]'");
      ?>// while ($bb = mysqli_fetch_array($aa)) {
    //   $ongkir = $ongkir + $bb['tarif'];
    // }

    $no++;
    }
    ?>
    <tr align="center">
      <th colspan="5">
        Total Harga :
      </th>
      <th colspan="2">
        Rp.<?php echo number_format($total); ?>
      </th>
    </tr>
    <tr align="center">
      <th colspan="5">
        Total Ongkir :
      </th>
      <th colspan="2">
        Rp.<?php echo number_format($ongkir); ?>
      </th>
    </tr>
    <tr align="center">
      <th colspan="5">
        Total Keseluruhan :
      </th>
      <th colspan="2">
        Rp.<?php echo number_format($ongkir + $total); ?>
      </th>
    </tr>
  </table>
  <br>
  <p>
    Ket : <br>
    Jumlah History : <b><?php echo $no - 1; ?></b> Order
  </p>
  <div align="right">
    <table class="second">
      <tr class="second">
        <td align="center" class="second">PANYABUNGAN, <?php echo $dateformat; ?><br><br><br><br><br>
          <?php echo $pimpinan; ?></td>
      </tr>
    </table>
  </div>
</body>

</html>