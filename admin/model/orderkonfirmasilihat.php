<?php
include "core/kon.php";
include "core/alert.php";
$id = $_GET["id"];
$idmerchant = $_GET["idmerchant"];
?>
<div class="page-title">
  <div>
    <h1><i class="fa fa-folder"></i> Konfirmasi Order </h1>
    <h4>Di menu ini anda dapat melakukan input, edit, hapus data</h4>
  </div>
</div>
<!-- END Page Title -->

<!-- BEGIN Breadcrumb -->
<div id="breadcrumbs">
  <ul class="breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="index.php">Home</a>
      <span class="divider"><i class="fa fa-angle-right"></i></span>
    </li>
    <li>
      <a href="index.php?p=orderkonfirmasi">Daftar Konfirmasi Order</a>
      <span class="divider"><i class="fa fa-angle-right"></i></span>
    </li>
    <li class="active">Konfirmasi Order</li>
  </ul>
</div>
<!-- END Breadcrumb -->

<!-- BEGIN Main Content -->
<div class="row">
  <div class="col-md-12">
    <div class="box box-green">
      <div class="box-title">
        <h3><i class="fa fa-edit"></i> Data Konfirmasi Order </h3>
        <div class="box-tool">
          <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
      </div>
      <?php
      $q = mysqli_query($con, "SELECT * FROM konfimasibayar WHERE idorder ='$id' AND idmerchant='$idmerchant'");
      $r = mysqli_fetch_array($q);
      $path = "../images/bukti/";
      $imges = $r["bukti"];
      $imges = $path . $imges;
      ?>
      <div class="box-content">
        <form method="POST" action="index.php?p=conkonfirmasibayar" class="form-horizontal form-row-separated" enctype="multipart/form-data">
          <div class="form-group">
            <label for="textfield3" class="col-sm-3 col-lg-2 control-label">
              No Order
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="text" name="order" placeholder="" class="form-control" disabled value="<?php echo $id; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <input type="hidden" value="<?php echo $idmerchant; ?>" name="idmerchant">
          </div>
          <div class="form-group">
            <label for="textfield3" class="col-sm-3 col-lg-2 control-label">
              Nama Bank Pengirim
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <label> <?php echo $r["namabankpengirim"]; ?> </label>
            </div>
          </div>
          <div class="form-group">
            <label for="password3" class="col-sm-3 col-lg-2 control-label">
              Jumlah Transfer
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <label> <?php echo $r["jumlahtransfer"]; ?> </label>
            </div>
          </div>
          <div class="form-group">
            <label for="password3" class="col-sm-3 col-lg-2 control-label">
              Tanggal Transfer
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <label> <?php echo $r["tgltransfer"]; ?> </label>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="col-sm-3 col-lg-2 control-label">
              Tujuan Bank Transfer
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <label> <?php echo $r["namabanktujuan"]; ?> </label>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="col-sm-3 col-lg-2 control-label">
              Tujuan Bank Transfer
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <img src="<?php echo $imges; ?>" width=500 height=500>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="col-sm-3 col-lg-2 control-label">
              Status Konfirmasi
            </label>
            <div class="col-sm-9 col-lg-10 controls">
              <select name="status" required autofocus>
                <option></option>
                <option value="3">Diterima</option>
                <option value="1">Tolak</option>
              </select>
              <label>
                &nbsp;Status ini berfungsi menandakan diterima / tidaknya bukti transfer
              </label>
            </div>
          </div>
          <div class="form-group last">
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
              <button type="reset" class="btn">Cancel</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<?php
/*
<input type="hidden" value="<?php ?>" name="id">

<div class="form-group">
<label class="col-sm-3 col-lg-2 control-label">Currency</label>
<div class="col-sm-9 col-lg-10 controls">
<input class="form-control col-md-5" type="text" data-mask="Rp 999.999.999" placeholder="~~Arahkan kursor di awal form~~" required autofocus="">
<span class="help-inline">Rp 100.000</span>
</div>
</div>

<div class="form-group">
<label for="textarea3" class="col-sm-3 col-lg-2 control-label">Textarea</label>
<div class="col-sm-9 col-lg-10 controls">
<textarea name="textarea3" id="textarea3" rows="5" class="form-control" required autofocus></textarea>
</div>
</div>

$date = str_replace('/', '-', $origDate );
$newDate = date("Y-m-d", strtotime($date)); 

*/
?>
?> ?>