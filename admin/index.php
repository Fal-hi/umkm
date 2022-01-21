<?php
ob_start();
session_start();
if(!isset($_SESSION['isloginn']))
{
    header("location: core/login.php");
}
// ob_end_flush();
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from shamsoft.net/flaty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2015 01:26:31 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>UMKM</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<!--base css styles-->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

	<!--page specific css styles-->
	<link rel="stylesheet" href="assets/data-tables/bootstrap3/dataTables.bootstrap.css" />
	<!-- Form -->
	<link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="assets/jquery-pwstrength/jquery.pwstrength.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.css" />
	<link rel="stylesheet" type="text/css" href="assets/dropzone/downloads/css/dropzone.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

	<!--flaty css styles-->
	<link rel="stylesheet" href="css/flaty.css">
	<link rel="stylesheet" href="css/flaty-responsive.css">

	<link rel="shortcut icon" href="img/favicon.html">
</head>
<body>

	<!-- BEGIN Navbar -->
	<?php
	include 'header.php';
	?>
	<!-- END Navbar -->/

	<!-- BEGIN Container -->
	<div class="container" id="main-container">
		<!-- BEGIN Sidebar -->
		<?php
		include 'menu.php';
		?>	
		<!-- END Sidebar -->

		<!-- BEGIN Content -->
		<div id="main-content">
			<!-- BEGIN Page Title -->

			<?php
			include 'main.php';
			?>

			

			<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		</div>
		<footer>
				<p>2020 © FLATY Admin Template.</p>
			</footer>
		<!-- END Content -->
	</div>
	<!-- END Container -->


	<!--basic scripts-->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/jquery-cookie/jquery.cookie.js"></script>

	<!--page specific plugin scripts-->
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>
	<script src="assets/flot/jquery.flot.pie.js"></script>
	<script src="assets/flot/jquery.flot.stack.js"></script>
	<script src="assets/flot/jquery.flot.crosshair.js"></script>
	<script src="assets/flot/jquery.flot.tooltip.min.js"></script>
	<script src="assets/sparkline/jquery.sparkline.min.js"></script>

	<!--page specific plugin scripts-->
	<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>
	<!-- Form  -->
	<!--page specific plugin scripts-->
	<script type="text/javascript" src="assets/chosen-bootstrap/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
	<script type="text/javascript" src="assets/jquery-pwstrength/jquery.pwstrength.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js"></script>
	<script type="text/javascript" src="assets/dropzone/downloads/dropzone.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
	<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script> 

	<!--flaty scripts-->
	<script src="js/flaty.js"></script>
	<script src="js/flaty-demo-codes.js"></script>

</body>

<!-- Mirrored from shamsoft.net/flaty/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Dec 2015 01:27:15 GMT -->
</html>
