<?php
include "core/kon.php"; ?>

<style>
  .carousel-caption {
    bottom: -10px;
    width: auto;
  }
  .carousel-caption a {
    text-decoration: none;
    color: #fff;
  }
</style>

<!-- Home Carousel -->
<section class="homepage">
  <div class="container-fluid">
    <div class="card border-0">
      <img src="img/estate/hpumkm.jpg" alt="homepage">
      <div class="carousel-caption">
        <a href="https://www.freepik.com/vectors/shopping">Shopping vector created by pikisuperstar - www.freepik.com</a>
      </div>
    </div>
  </div>
</section>
<!-- End Home Carousel -->

<!--Daftar Menu-->
<section class="daftar-produk my-3">
<div class="container-fluid">
    <div class="row">
        <?php
        $q = mysqli_query(
          $con,
          "SELECT a.*, b.* FROM produk a LEFT JOIN merchant b ON a.idmerchant = b.idmerchant ORDER BY a.idproduk DESC LIMIT 0,10"
        );
        $path = "images/produk/";
        while ($r = mysqli_fetch_array($q)) {
          $image = $path . $r["foto"]; ?>

            <div class="col-lg-3">
                <div class="card border-0 mb-3">
                    <img src="<?php echo $image; ?>" class="card-img-top rounded-0" alt="daftar makanan">
                    <div class="card-img-overlay">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-info p-2">
                              Stok : <?php echo $r["stok"]; ?>
                            </span>
                            <span class="badge bg-secondary p-2">
                              Rp.<?php echo number_format($r["hargaproduk"]); ?>
                            </span>
                        </div>
                    </div>

                    <div class="card-img-overlay">
                        <div class="cc badge bg-dark pt-3">
                          <ul class="list-unstyled">
                            <li><span><?php echo $r[
                              "namaproduk"
                            ]; ?></span></li>
                            <li><span><?php echo $r[
                              "detailproduk"
                            ]; ?></span></li>
                            <li><span>Toko : <?php echo $r[
                              "namatoko"
                            ]; ?></span></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>
    </div>

    <div class="d-flex justify-content-center align-items-center">
            <a href="#" class="btn btn-info btn-lg text-white">
                Lihat semua produk
            </a>
    </div>
</section>
<!-- End Daftar Menu -->

<!-- Produk Terbaru -->
<section class="produk-baru mb-3">
    <div class="container-fluid">
        <div class="own-carousel__container own">

            <div class="title mb-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Produk Terbaru</h3>
                    <div class="own-carousel__control">
                        <button type="button" class="control__prev btn bg-info">
                            <i class="bi bi-arrow-left" style="font-size: 1.5rem"></i>
                        </button>
                        <button type="button" class="control__next btn bg-info">
                            <i class="bi bi-arrow-right" style="font-size: 1.5rem"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="own-carousel__outer">
                <div class="own-carousel">
                    <?php
                    $q = mysqli_query(
                      $con,
                      "SELECT * FROM produk ORDER BY idproduk DESC LIMIT 0,20"
                    );
                    $path = "images/produk/";
                    while ($r = mysqli_fetch_array($q)) {
                      $image = $path . $r["foto"]; ?>
                    <div class="own-carousel__item">
                        <div class="card">
                            <img src="<?php echo $image; ?>" class="card-img-top rounded-0" alt="daftar makanan">
                            <div class="card-img-overlay">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-info p-2">
                                      Stok : <?php echo $r["stok"]; ?>
                                    </span>
                                    <span class="badge bg-secondary p-2">
                                      Rp.<?php echo number_format(
                                        $r["hargaproduk"]
                                      ); ?>
                                    </span>
                                </div>
                            </div>

                            <div class="card-img-overlay">
                                <div class="cc badge bg-dark p-2">                            
                                    <span><?php echo $r["namaproduk"]; ?></span>
                                    <br>
                                    <span><?php echo $r[
                                      "detailproduk"
                                    ]; ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Produk Terbaru -->

<footer class="bg-dark sticky-bottom">
    <div class="container p-3">
        <h5 class="text-center text-white mb-0">
            &copy; Copyright by UMKM
            <script>
                document.write(new Date().getFullYear());
            </script>. All right reserved.
        </h5>
    </div>
</footer>

<style>
span {
    font-size: 0.8rem;
}

.homepage .container-fluid img {
    height: 90vh;
    width: 100%;
    object-fit: cover;
    object-position: center;
    overflow: hidden;
}

/*  */
.daftar-produk .card img {
    object-fit: cover;
    object-position: center;
    overflow: hidden;
    height: 50vh;
}

.daftar-produk .card .card-img-overlay .cc {
    margin: 0 auto;
    position: absolute;
    bottom: 1rem;
    left: 15%;
    right: 15%;
    width: fit-content;
    line-height: 0.9rem;
}

.produk-baru .own .card .card-img-overlay .cc {
    margin: 0 auto;
    position: absolute;
    bottom: 1rem;
    left: 15%;
    right: 15%;
    width: fit-content;
    line-height: 0.9rem;
}

.produk-baru .own .title button {
    padding: 0 0.5rem;
}

.produk-baru .own .title button i {
    color: #fff;
    text-shadow: 0 0 5px #fff;
}

.produk-baru .own .card {
    height: 14rem;
}

.produk-baru .own .card img {
    object-fit: cover;
    object-position: center;
    overflow: hidden;
    height: 100vh;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".own").ownCarousel({
    itemPerRow: 4,
    // autoplay: 5000,
    nav: true,
    responsive: {
      1000: [4, 24],
      800: [3, 32.5],
      600: [2, 49],
      400: [1, 100],
    },
  });
  responsive();
});
</script>