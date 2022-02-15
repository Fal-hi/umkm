<?php
include "core/kon.php";
include "core/alert.php";
include "core/session.php";
$id = $_GET["id"];
?>

<style>
	section.order-konfirmasi-lihat .breadcrumb a {
		text-decoration: none;
		color: #000;
	}
</style>

<section class="order-konfirmasi-lihat">
  <div class="container">
    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
      <ul class="breadcrumb">
        <li>
          <a href="index.php">Home</a>
          <i class="bi bi-caret-right"></i>
        </li>
        <li>
          <a href="index.php?p=orderkonfirmasi">Daftar Konfirmasi Order</a>
          <i class="bi bi-caret-right"></i>
        </li>
        <li class="active fw-bold">Konfirmasi Order</li>
      </ul>
    </div>
    <!-- END Breadcrumb -->
    
    <!-- BEGIN Main Content -->
    <div class="row">
      <div class="col-lg-10">
        <div class="box box-green">
          <div class="box-title">
            <h3><i class="bi bi-edit"></i> Data Konfirmasi Order </h3>
            <div class="box-tool">
              <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
            </div>
          </div>
          <?php
          $q = mysqli_query(
            $con,
            "SELECT * FROM konfimasibayar WHERE idorder ='$id' AND idmerchant ='$idadmin'"
          );
          $r = mysqli_fetch_array($q);
          $path = "../images/bukti/";
          $imges = $r["bukti"];
          $imges = $path . $imges;
          ?>
          <div class="box-content">
            <form method="POST" action="index.php?p=conkonfirmasibayar" class="form-horizontal form-row-separated" enctype="multipart/form-data">
              <div class="form-group">
                <label for="textfield3" class="my-2 fw-bold control-label">No Order</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <input type="text" name="order" placeholder="" class="form-control" disabled value="<?php echo $id; ?>">
                </div>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
              </div>
              <div class="form-group">
                <label for="textfield3" class="my-2 fw-bold control-label">Nama Bank Pengirim</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <label> <?php echo $r["namabankpengirim"]; ?> </label>
                </div>
              </div>
              <div class="form-group">
                <label for="password3" class="my-2 fw-bold control-label">Jumlah Transfer</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <label> <?php echo $r["jumlahtransfer"]; ?> </label>
                </div>
              </div>
              <div class="form-group">
                <label for="password3" class="my-2 fw-bold control-label">Tanggal Transfer</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <label> <?php echo $r["tgltransfer"]; ?> </label>
                </div>
              </div>
              <div class="form-group">
                <label for="textarea3" class="my-2 fw-bold control-label">Tujuan Bank Transfer</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <label> <?php echo $r["namabanktujuan"]; ?> </label>
                </div>
              </div>
              <div class="form-group">
                <label for="textarea3" class="my-2 fw-bold control-label">Bukti Transfer</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <img src="<?php echo $imges; ?>" class="w-50">
                </div>
              </div>
              <div class="form-group">
                <label for="textarea3" class="my-2 fw-bold control-label">Status Konfirmasi</label>
                <div class="col-sm-9 col-lg-10 controls">
                  <select name="status" required autofocus>
                    <option selected>Status</option>
                    <option value="3">Diterima</option>
                    <option value="1">Tolak</option>
                  </select>
                  <label>&nbsp;Status ini berfungsi menandakan diterima / tidaknya bukti transfer</label>
                </div>
              </div>
              <div class="form-group">
                <div class="my-2">
                  <button type="submit" class="btn btn-info text-white"> Save</button>
                  <button type="reset" class="btn btn-warning text-white">Cancel</button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



