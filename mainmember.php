<?php
// include 'core/session.php';
ob_start();
$j=isset($_GET['j']) ? $_GET['j'] : 'all';
$p=isset($_GET['p']) ? $_GET['p'] : 'home';
if ($p=='home') 
{
	include_once('home.php');
}
if ($p=='profil') 
{
	include_once('profil.php');
}
if ($p=='carapemesanan') 
{
	include_once('carapemesanan.php');
}
if ($p=='logoutmember') 
{
	include_once('core/logout.php');
}

// ===================================================================================

if ($p=='lihatproduk') 
{
	include_once('model/lihatproduk.php');
}
if ($p=='keranjangbelanja') 
{
	include_once('model/keranjangbelanja.php');
}
if ($p=='checkout') 
{
	include_once('model/checkout.php');
}
if ($p=='infotransfer') 
{
	include_once('model/infotransfer.php');
}
if ($p=='riwayatpemesanan') 
{
	include_once('model/riwayatpemesanan.php');
}
if ($p=='lihatdetailorder') 
{
	include_once('model/lihatdetailorder.php');
}
if ($p=='konfirmasipembayaran') 
{
	include_once('model/konfirmasipembayaran.php');
}

// =======================================================================================
if ($p=='contambahcart') 
{
	include_once('controller/contambahcart.php');
}
if ($p=='conhapuscart') 
{
	include_once('controller/conhapuscart.php');
}

if ($p=='conorder') 
{
	include_once('controller/conorder.php');
}
if ($p=='contambahbayar') 
{
	include_once('controller/contambahbayar.php');
}
if ($p=='concancelrorder') 
{
	include_once('controller/concancelrorder.php');
}

?>