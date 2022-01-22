<?php
include "core/kon.php";
include "core/session.php";
include 'core/date.php';
$id = $_GET['id'];
$idmerchant = $_GET['idmerchant'];
?>
<br>
<br>
<div class="container">
  <div class="row margin40">
    <div class="col-sm-10 col-sm-offset-1 text-center">
      <div class="col-sm-12 text-center">
        <h2>Konfirmasi Pembayaran</h2>
      </div>
      <div class="col-sm-12 text-center">
        <form method="POST" action="index.php?p=contambahbayar" class="form-horizontal form-row-separated" enctype="multipart/form-data">
          <div class="form-group">
            <label for="textfield3" class="col-sm-3 col-lg-2 control-label">No Order</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="text" name="order" placeholder="" class="form-control" disabled value="<?php echo $id; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="idorder">
            <input type="hidden" value="<?php echo $idmerchant; ?>" name="idmerchant">
          </div>
          <div class="form-group">
            <label for="textfield3" class="col-sm-3 col-lg-2 control-label">Nama Bank Pengirim</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="text" name="namabankpengirim" placeholder="" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="password3" class="col-sm-3 col-lg-2 control-label">Jumlah Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="text" name="jumlahtransfer" placeholder="" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="password3" class="col-sm-3 col-lg-2 control-label">Tanggal Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="date" name="tgltransfer" placeholder="ex : tahun-bulan-hari" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="col-sm-3 col-lg-2 control-label">Tujuan Bank Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <select class="form-control" name="namabanktujuan" required autofocus>
                <option></option>
                <option value="Nagari">Nagari</option>
                <option value="BRI">BRI</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="col-sm-3 col-lg-2 control-label">Bukti Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="file" name="file" placeholder="" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group last">
            <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save</button>
              <button type="reset" class="btn">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <br><br><br><br><br><br><br>
  </div>
</div>
</div>
<!-- <div class="row">
        <div class="col-md-3 col-sm-6 margin30"> -->