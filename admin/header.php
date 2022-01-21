<?php
ob_start();
?>
<div id="navbar" class="navbar">
	<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
		<span class="fa fa-bars"></span>
	</button>
	<a class="navbar-brand" href="#">
		<small>
			<i class="fa fa-desktop"></i>
		UMKM
		</small>
	</a>

	<!-- BEGIN Navbar Buttons -->
	<ul class="nav flaty-nav pull-right">

		<!-- BEGIN Button User -->
		<li class="user-profile">
			<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
				<img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />
				<span class="hhh" id="user_info">
					Admin
				</span>
				<i class="fa fa-caret-down"></i>
			</a>

			<!-- BEGIN User Dropdown -->
			<ul class="dropdown-menu dropdown-navbar" id="user_menu">

				<li class="divider visible-xs"></li>

				<li class="divider"></li>

				<li>
					<a href="core/logout.php">
						<i class="fa fa-off"></i>
						Logout
					</a>
				</li>
			</ul>
			<!-- BEGIN User Dropdown -->
		</li>
		<!-- END Button User -->
	</ul>
	<!-- END Navbar Buttons -->
</div>