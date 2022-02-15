<?php
include "core/kon.php";
include "core/session.php";
include "core/alert.php";
?>

<style>
  section.lihat-produk {
    margin-top: 5rem;
  }

  section.lihat-produk .card .content img {
    object-fit: cover;
    object-position: center;
    overflow: hidden;
    height: 30vh;
    max-height: 30vh;
    width: 100%;
  }

  section.lihat-produk .card .content .sdh {
    display: flex;
    justify-content: space-between;
    align-items: center;
    bottom: auto;
  }

  section.lihat-produk .card .content .sdh span.stok {
    padding: 0.2rem 0.3rem 0.3rem 0.3rem;
    color: #fff;
  }

  section.lihat-produk .card .content .sdh span.harga {
    padding: 0.2rem 0.3rem 0.3rem 0.3rem;
    color: #fff;
  }

  section.lihat-produk .property-detail .title h3 {
    margin-bottom: 10px;
  }
</style>

<!--revolution end-->
<section class="lihat-produk">
  <div class="container">
    <h1 class="mb-2">Daftar Produk</h1>
    <hr>
    <div class="row">
      <?php
      // $page = isset($_GET['page']) ? $_GET['page'] : 0;
      $q = mysqli_query($con, "SELECT a.*, b.* FROM produk a LEFT JOIN merchant b ON a.idmerchant = b.idmerchant ORDER BY a.idproduk DESC");
      // limit $page,10
      $path = "images/produk/";
      while ($r = mysqli_fetch_array($q)) {
        $image = $path . $r["foto"]; ?>
        <div class="col-sm-6 col-lg-3 mb-5">
            <div class="card border-0">
              <div class="content">
                <img src="<?php echo $image; ?>" alt="propety">
                <div class="sdh card-img-overlay">
                  <span class="stok bg-secondary">
                    Stok : <?php echo $r["stok"]; ?>
                  </span>
                  <span class="harga bg-info">
                    Rp.<?php echo number_format($r["hargaproduk"]); ?>
                  </span>
                </div>
              </div>
              <!--content-->
            </div>
            <!--image-->
            <div class="produk">
              <span class="nama">
                <b>Produk</b> : <?php echo $r["namaproduk"]; ?>
              </span>
              <br>
              <span class="detail">
                <b>Detail</b> : <?php echo $r["detailproduk"]; ?>
              </span>
              <br>
              <span class="toko">
                <b>Toko</b> : <?php echo $r["namatoko"]; ?>
              </span>
              <br>
            </div>
            <!--property details-->
            <?php
            if ($r["stok"] > 0) {
            ?>
                <form method="POST" action="index.php?p=contambahcart">
                  <input type="number" class="form-control mb-2" placeholder="Jumlah Beli" name="jumlah" required>
                  <input type="hidden" value="<?php echo $r["idproduk"]; ?>" name="idproduk">
                  <input type="hidden" value="<?php echo $idanggota; ?>" name="idanggota">
                  <input type="hidden" value="<?php echo $r["idmerchant"]; ?>" name="idmerchant">
                  <button type="submit" class="btn btn-info text-white w-100">Tambah Cart</button>
                </form>
            <?php
            }
            ?>
        </div>
        <!--property columns-->
      <?php
      }
      ?>
    </div>
  </div>
</section>
<!--property container-->