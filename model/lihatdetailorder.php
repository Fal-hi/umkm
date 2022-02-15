<?php
include "core/kon.php";
include "core/session.php";
$id = $_GET["id"];
$idmerchant = $_GET["idmerchant"];
?>
<br>
<br>
<div class="container">
  <div class="d-flex justify-content-center align-items-center">
    <div class="col-lg-8">
      <h2 class="text-center mt-4">Riwayat Order Detail</h2>
      <a href="model/cetakfakturpemesanan.php?id=<?php echo $id; ?>&idmerchant=<?php echo $idmerchant; ?>" target=\"_blank\">
        <button type="button" class="btn btn-info text-white mb-3">
          <span class="bi bi-printer-fill"></span> Cetak Faktur
        </button>
      </a>
      <table class="table table-bordered">
        <tr class="table-light">
          <th>No</th>
          <th>Nama Produk</th>
          <th>Jumlah Beli</th>
          <th>Subtotal</th>
        </tr>
        <?php
        $total = 0;
        $no = 1;
        $q = mysqli_query($con, "SELECT orderdetail.*, produk.namaproduk, kota.tarif, kota.namakota FROM orderdetail LEFT JOIN produk ON orderdetail.idproduk = produk.idproduk LEFT JOIN kota ON orderdetail.idkota = kota.idkota WHERE orderdetail.idorder = '$id' AND orderdetail.idmerchant = '$idmerchant'");
        while ($r = mysqli_fetch_array($q)) {
          $total = $total + $r["subtotal"];
          $ongkos = $r["tarif"];
          $kota = $r["namakota"];
        ?>
          <tr>
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
          <td>Rp.<?php echo number_format($tot); ?></td>
        </tr>
      </table>
    </div>
  </div>
</div>