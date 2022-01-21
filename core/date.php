<?php
date_default_timezone_set("Asia/Bangkok");
$tanggal = date('d');
$bulan = date('m');
$tahun = date('Y');
$date = $tahun."-".$bulan."-".$tanggal;
$dateformat = $tanggal."-".$bulan."-".$tahun;
$jam = date('H:i:s');

$jj=date('H');
$mm=date('i');
$ss=date('s');

$idorder = $tahun.$bulan.$tanggal.$jj.$mm.$ss;
?>