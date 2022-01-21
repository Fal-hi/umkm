<?php
ob_start();
session_start();
include "kon.php";
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2015 01:29:26 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Login </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!--base css styles-->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

	<!--page specific css styles-->

	<!--flaty css styles-->
	<link rel="stylesheet" href="../css/flaty.css">
	<link rel="stylesheet" href="../css/flaty-responsive.css">

	<link rel="shortcut icon" href="../img/favicon.html">
</head>

<body class="login-page">

	<!-- BEGIN Main Content -->
	<div class="login-wrapper">
		<!-- BEGIN Login Form -->
		<form role="form" method="post" action="">
			<fieldset>
				<h3>Login to your account</h3>
				<hr />
				<div class="form-group">
					<div class="controls">
						<input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
					</div>
				</div>
				<div class="form-group">
					<div class="controls">
						<input type="password" class="form-control" placeholder="Password" name="password" required autofocus>
					</div>
				</div>
				<div class="form-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary form-control" name="Submit">Sign In</button>
					</div>
				</div>
		</form>
		<div class="form-group">
			<div class="controls">
				<a href="../../index.php">
					<h5>Kembali ke Halaman Utama</h5>
				</a>
			</div>
		</div>
		<hr />
		</fieldset>
		<!-- END Login Form -->
		<?php // include'koneksi.php';
		// include'koneksi.php';

		if (isset($_POST["Submit"])) {
			$user = $_POST["username"];
			$pass = md5($_POST["password"]);
			$login = mysqli_query(
				$con,
				"SELECT * FROM admin where username='$user' AND password='$pass'"
			);
			$cek = mysqli_num_rows($login);
			$data = mysqli_fetch_array($login); //1

			if ($cek) {
				session_start();
				$_SESSION["isloginn"] = "1";
				$_SESSION["idadminn"] = $data["idadmin"];
				$_SESSION["usernamee"] = $data["username"];
				$_SESSION["namalengkapp"] = $data["namalengkap"];
				header("location:index.php");
			} else {
				echo "<script>alert('Periksa kembali username dan password')</script>";
			}
		} ?>
		<!-- END Register Form -->
	</div>
	<!-- END Main Content -->


	<!--basic scripts-->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')
	</script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		function goToForm(form) {
			$('.login-wrapper > form:visible').fadeOut(500, function() {
				$('#form-' + form).fadeIn(500);
			});
		}
		$(function() {
			$('.goto-login').click(function() {
				goToForm('login');
			});
			$('.goto-forgot').click(function() {
				goToForm('forgot');
			});
			$('.goto-register').click(function() {
				goToForm('register');
			});
		});
	</script>
</body>

<!-- Mirrored from shamsoft.net/flaty/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2015 01:29:26 GMT -->

</html>