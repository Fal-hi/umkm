<?php
ob_start();
include 'core/session.php';
?>
<div id="sidebar" class="navbar-collapse collapse">
	<!-- BEGIN Navlist -->
	<ul class="nav nav-list">
		<!-- BEGIN Search Form -->
		<!-- <li>
			<form target="#" method="GET" class="search-form">
				<span class="search-pan">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
					<input type="text" name="search" placeholder="Search ..." autocomplete="off" />
				</span>
			</form>
		</li> -->
		<!-- END Search Form -->
		<li>
			<font color="white">
				<label>&nbsp;&nbsp;&nbsp;Username :</label>
				<h5 align="left">&nbsp;&nbsp;&nbsp;<?php echo $namalengkap; ?> </h5>
			</font>
		</li>
		<br><br>
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<span>Home</span>
			</a>
		</li>

		

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-edit"></i>
				<span>Produk</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=produk">Daftar Data</a></li>
				<li><a href="index.php?p=tambahproduk">Tambah</a></li>
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-edit"></i>
				<span>Penjual</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=penjual">Daftar Penjual</a></li>
				<!-- <li><a href="index.php?p=tambahproduk">Tambah</a></li> -->
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-edit"></i>
				<span>Anggota</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=anggota">Daftar Data</a></li>
				<!-- <li><a href="index.php?p=tambahproduk">Tambah</a></li> -->
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-edit"></i>
				<span>Ongkos Kirim</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=ongkoskirim">Daftar Data</a></li>
				<li><a href="index.php?p=tambahongkoskirim">Tambah</a></li>
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-edit"></i>
				<span>Order</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=orderall">Daftar Seluruh Order</a></li>
				<li><a href="index.php?p=orderkonfirmasi">Order Konfirmasi</a></li>
				<!-- <li><a href="index.php?p=tambahongkoskirim">Tambah</a></li> -->
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-edit"></i>
				<span>User Control</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=admin">Daftar Seluruh Admin</a></li>
				<!-- <li><a href="index.php?p=tambahongkoskirim">Tambah</a></li> -->
			</ul>
			<!-- END Submenu -->
		</li>

		<li>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-list"></i>
				<span>Laporan</span>
				<b class="arrow fa fa-angle-right"></b>
			</a>

			<!-- BEGIN Submenu -->
			<ul class="submenu">	
				<li><a href="index.php?p=cetaklaporan">Cetak Laporan </a></li>
			</ul>
			<!-- END Submenu -->
		</li>

	</ul>
	<!-- END Navlist -->

	<!-- BEGIN Sidebar Collapse Button -->
	<div id="sidebar-collapse" class="visible-lg">
		<i class="fa fa-angle-double-left"></i>
	</div>
	<!-- END Sidebar Collapse Button -->
</div>