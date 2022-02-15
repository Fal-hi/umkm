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
  <div class="row">
    <div class="col-md-10 mx-auto">
        <br>
        <h2 class="text-center">Konfirmasi Pembayaran</h2>
      <div class="col-md-8 mx-auto">
        <form method="POST" action="index.php?p=contambahbayar" class="ms-5" enctype="multipart/form-data">
          <div class="form-group">
            <label for="textfield3" class="my-2 control-label">No Order</label>
            <div class="col-sm-10 col-lg-10 controls">
              <input type="text" name="order" class="form-control fw-bold" disabled value="<?php echo $id; ?>">
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="idorder">
            <input type="hidden" value="<?php echo $idmerchant; ?>" name="idmerchant">
          </div>
          <div class="form-group">
            <label for="textfield3" class="my-2 control-label">Nama Bank Pengirim</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="text" name="namabankpengirim" placeholder="" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="password3" class="my-2 control-label">Jumlah Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="text" name="jumlahtransfer" placeholder="" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="password3" class="my-2 control-label">Tanggal Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="date" name="tgltransfer" placeholder="ex : tahun-bulan-hari" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="my-2 control-label">Tujuan Bank Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <select class="form-control" name="namabanktujuan" required autofocus>
                <option></option>
                <option value="Nagari">Nagari</option>
                <option value="BRI">BRI</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="textarea3" class="my-2 control-label">Bukti Transfer</label>
            <div class="col-sm-9 col-lg-10 controls">
              <input type="file" name="file" class="form-control" required autofocus>
            </div>
          </div>
          <div class="form-group col-sm-9 col-lg-10 my-2">
            <div class="float-end">
              <button type="reset" class="btn btn-warning text-white">Cancel</button>
              <button type="submit" class="btn btn-info text-white">Save</button>
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