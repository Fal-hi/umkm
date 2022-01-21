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
if ($p=='loginmember') 
{
	include_once('loginmember.php');
}
if ($p=='loginmerchant') 
{
	include_once('loginmerchant.php');
}
if ($p=='logoutmember') 
{
	include_once('core/logout.php');
}
if ($p=='daftarmember') 
{
	include_once('daftarmember.php');
}
if ($p=='daftarmerchant') 
{
	include_once('daftarmerchant.php');
}

if ($p=='condaftarmember') 
{
	include_once('controller/condaftarmember.php');
}

if ($p=='condaftarmerchant') 
{
	include_once('controller/condaftarmerchant.php');
}

?>