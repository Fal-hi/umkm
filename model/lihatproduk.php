<?php
include "core/kon.php";
include "core/session.php";
include "core/alert.php";
?>
<!--revolution end-->
<div class="divide70"></div>
<div class="container">
  <h3 class="title-section clearfix">Daftar Produk</h3>
  <div class="row">
    <?php
    // $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $q = mysqli_query($con, "SELECT a.*, b.* FROM produk a LEFT JOIN merchant b ON a.idmerchant = b.idmerchant ORDER BY a.idproduk DESC");
    // limit $page,10
    $path = "images/produk/";
    while ($r = mysqli_fetch_array($q)) {
      $image = $path . $r["foto"]; ?>
      <div class="col-sm-6 col-md-3 margin30">
        <div class="property clearfix">
          <div class="image">
            <div class="content">
              <a href="#"><i class="fa fa-search-plus"></i></a>
              <img src="<?php echo $image; ?>" class="img-responsive" alt="propety" width=300>
              <span class="label-property">
                Stok : <?php echo $r["stok"]; ?>
              </span>
              <span class="label-price">
                Rp.<?php echo number_format($r["hargaproduk"]); ?>
              </span>
            </div>
            <!--content-->
          </div>
          <!--image-->
          <div class="property-detail">
            <h5 class="title">
              <a href="#"><?php echo $r["namaproduk"]; ?></a>
            </h5>
            <span class="location">
              <?php echo $r["detailproduk"]; ?>
            </span>
            <span class="location">
              Toko : <?php echo $r["namatoko"]; ?>
            </span>
          </div>
          <!--property details-->
          <?php
          if ($r["stok"] > 0) {
          ?>
            <div class="pull-right">
              <form method="POST" action="index.php?p=contambahcart">
                <input type="text" class="form-control col-md-3" placeholder="Masukkan Jumlah Yang Ingin Dibeli" name="jumlah" required>
                <input type="hidden" value="<?php echo $r["idproduk"]; ?>" name="idproduk">
                <input type="hidden" value="<?php echo $idanggota; ?>" name="idanggota">
                <input type="hidden" value="<?php echo $r["idmerchant"]; ?>" name="idmerchant">
                <button type="submit" class="btn btn-red btn-lg pull-left">Tambah Cart</button>
              </form>
            </div>
          <?php
          }
          ?>
        </div>
        <!--property-->
      </div>
      <!--property columns-->
    <?php
    }
    ?>
  </div>
</div>
<!--property container-->
<div class="divide40"></div>
<div class="divide70"></div>
<div class="divide40"></div>