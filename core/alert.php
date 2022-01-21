<?php
$ket=isset($_GET['ket']) ? $_GET['ket'] : 'default';
if ($ket=="success") { ?>
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
	<strong>Sukses!</strong> Data Telah Berhasil Diperbaharui
</div>
<?php
}
else if ($ket == "failed") { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
	<strong>Gagal!</strong> Gagal Perbaharui Data
</div>
<?php 
} 
else if ($ket == "tidakcukup") { ?>
<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
	<strong>Gagal!</strong> STOCK TIDAK CUKUP
</div>
<?php } ?>