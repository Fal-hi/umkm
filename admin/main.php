<?php
// include 'core/session.php';
ob_start();
$j=isset($_GET['j']) ? $_GET['j'] : 'all';
$p=isset($_GET['p']) ? $_GET['p'] : 'home';
if ($p=='home') 
{
	include_once('home.php');
}

if ($p=='produksi') {
	include_once('model/produksi.php');
}

if ($p=='produk') {
	include_once('model/produk.php');
}

if ($p=='anggota') {
	include_once('model/anggota.php');
}


if ($p=='penjual') {
	include_once('model/penjual.php');
}

if ($p=='ongkoskirim') {
	include_once('model/ongkoskirim.php');
}

if ($p=='orderall') {
	include_once('model/orderall.php');
}
if ($p=='orderkonfirmasi') {
	include_once('model/orderkonfirmasi.php');
}
if ($p=='orderkonfirmasilihat') {
	include_once('model/orderkonfirmasilihat.php');
}

if ($p=='admin') {
	include_once('model/admin.php');
}
// ===================================================Model========================================================
if ($p=='tambahproduksi') {
	include_once('model/produksi_tambah.php');
}
if ($p=='editproduksi') {
	include_once('model/produksi_edit.php');
}
if ($p=='hapusproduksi') {
	include_once('model/produksi_hapus.php');
}

if ($p=='tambahproduk') {
	include_once('model/produk_tambah.php');
}
if ($p=='editproduk') {
	include_once('model/produk_edit.php');
}
if ($p=='hapusproduk') {
	include_once('model/produk_hapus.php');
}
if ($p=='tambahstokproduk') {
	include_once('model/produk_stok.php');
}

if ($p=='editanggota') {
	include_once('model/anggota_edit.php');
}

if ($p=='editpenjual') {
	include_once('model/penjual_edit.php');
}


if ($p=='tambahongkoskirim') {
	include_once('model/ongkoskirim_tambah.php');
}
if ($p=='editongkoskirim') {
	include_once('model/ongkoskirim_edit.php');
}
if ($p=='hapusongkoskirim') {
	include_once('model/ongkoskirim_hapus.php');
}

if ($p=='tambahadmin') {
	include_once('model/admin_tambah.php');
}
if ($p=='editadmin') {
	include_once('model/admin_edit.php');
}
if ($p=='hapusadmin') {
	include_once('model/admin_hapus.php');
}

// ==================================================Controller======================================================
// *********Tambah
if ($p=='contambahproduksi') {
	include_once('controller/produksi_tambah_con.php');
}
if ($p=='coneditproduksi') {
	include_once('controller/produksi_edit_con.php');
}
if ($p=='conhapusproduksi') {
	include_once('controller/produksi_hapus_con.php');
}

if ($p=='contambahproduk') {
	include_once('controller/produk_tambah_con.php');
}
if ($p=='coneditproduk') {
	include_once('controller/produk_edit_con.php');
}
if ($p=='conhapusproduk') {
	include_once('controller/produk_hapus_con.php');
}
if ($p=='contambahstok') {
	include_once('controller/produk_tambah_stok_con.php');
}

if ($p=='coneditanggota') {
	include_once('controller/anggota_edit_con.php');
}

if ($p=='coneditpenjual') {
	include_once('controller/penjual_edit_con.php');
}


if ($p=='contambahongkoskirim') {
	include_once('controller/ongkoskirim_tambah_con.php');
}
if ($p=='coneditongkoskirim') {
	include_once('controller/ongkoskirim_edit_con.php');
}
if ($p=='conhapusongkoskirim') {
	include_once('controller/ongkoskirim_hapus_con.php');
}

if ($p=='conkonfirmasibayar') {
	include_once('controller/conkonfirmasibayar.php');
}
if ($p=='conorderkonfirmasiberhasil') {
	include_once('controller/conorderkonfirmasiberhasil.php');
}
if ($p=='conorderkonfirmasicancel') {
	include_once('controller/conorderkonfirmasicancel.php');
}

if ($p=='contambahadmin') {
	include_once('controller/admin_tambah_con.php');
}
if ($p=='coneditadmin') {
	include_once('controller/admin_edit_con.php');
}
if ($p=='conhapusadmin') {
	include_once('controller/admin_hapus_con.php');
}

if ($p=='cetaklaporan') {
	include_once('laporan/form.php');
}

?>