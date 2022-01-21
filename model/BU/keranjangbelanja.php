<?php
include "core/kon.php";
include "core/session.php";
?>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div><!--sidebar-->
        <div class="col-md-9">
            <h3 class="title-section">Keranjang Belanja Listing</h3>
            <?php
            $total = 0;
            $q = mysqli_query($con, "SELECT cart.*, produk.namaproduk, produk.hargaproduk, produk.foto FROM cart LEFT JOIN produk ON cart.idproduk = produk.idproduk WHERE cart.idanggota = '$idanggota'");
            $path = "images/produk/";
            while ($r = mysqli_fetch_array($q)) {
              $images = $path . $r["foto"];
              $subtotal = $r["hargaproduk"] * $r["jumlahbeli"];
              ?>
                <div class="row property-listing">
                    <div class="col-sm-4 margin30">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="<?php echo $images; ?>" class="img-responsive" alt="propety">
                                <span class="label-property">Harga Satuan</span>
                                <span class="label-price">
                                    Rp.<?php echo number_format($r["hargaproduk"]); ?>
                                </span>
                            </div><!--content-->
                        </div><!--image-->
                    </div><!--image col-->
                    <div class="col-sm-8">
                        <h3><a href="#"><?php echo $r["namaproduk"]; ?></a></h3>
                        <br>
                        <p>
                            Jumlah Beli  <?php echo $r["jumlahbeli"]; ?>
                            <br>
                            Sub Total : Rp.<?php echo number_format($subtotal); ?>
                        </p>
                        <div class="clearfix">
                            <div class="pull-left"><!-- 
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span> -->
                            </div>
                            <div class="pull-right">
                                <a href="index.php?p=conhapuscart&id=<?php echo $r["idcart"]; ?>"><i class="fa fa-trash"></i> Cancel
                                </a>
                            </div>
                        </div>  
                    </div>
                </div><!--property listing row-->
                <?php $total = $total + $subtotal;
            }
            ?>
            <div class="row">
                <h1>Total Belanja : Rp.<?php echo number_format($total); ?></h1>
                <p>
                    Note : <br>
                    Harga Masih Diluar Ongkos Kirim<br>
                    Pastikan Anda Sudah Memilih Semua Barang Yang Ingin Dibeli<br>
                    Baru Lakukan Checkout Untuk Memasukkan Alamat dan Penentuan<br>
                    Ongkir
                </p>
            </div>
            <br><br>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="index.php?p=checkout" class="btn btn-lg btn-red">Konfirmasi Transaksi (Checkout)</a>
                </div>
            </div>
            <br><br><br><br>
        </div>
    </div>
</div>