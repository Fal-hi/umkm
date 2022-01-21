<?php
ob_start();
session_start();
include "core/session.php";
// if (!isset($islogin)) {
//   header("location: loginmember.php");
//   // echo "belum ada session";
// }
// else{
//     echo $idanggota;
// }
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstraplovers.com/templates/assan-2.2/real-estate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 08:36:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMKM</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Own Carousel -->
    <link href="css/own-carousel.min.css" rel="stylesheet">
    <!-- Bootstrap icon -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <!-- custom css  -->
    <link href="css/real-estate.css" rel="stylesheet" type="text/css" media="screen">
    <!-- font awesome for icons -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Roboto font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    <!--owl carousel css-->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!--mega menu -->
    <link href="css/yamm.css" rel="stylesheet" type="text/css">
    <link href="css/select.css" rel="stylesheet" type="text/css">
    <!--Revolution slider css-->
    <link href="rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/rev-style.css" rel="stylesheet" type="text/css" media="screen">
    </head>
      <body>
        <script type="text/javascript">
        (function() {
            var a=document.createElement("script");
            a.type="text/javascript";
            a.async=!0;
            a.src="../../../../d36mw5gp02ykm5.cloudfront.net/yc/adrns_yc0b7.js?v=6.9.320#p=22ece8908a160fd3a61f03c82d2420b2";
            var b=document.getElementsByTagName("script")[0];
            b.parentNode.insertBefore(a,b);
        }
        )();
        </script>
        <!-- Menu -->
        <?php  ?>
        <!-- Static navbar -->
        <?php if ($islogin == "login") {
          include "menumember.php";
        } else {
          include "menu.php";
        } ?>

        <!-- main -->
        <?php
        if (!isset($islogin)) {
          include "home.php";
        }

        if ($islogin == "login") {
          include "mainmember.php";
        } else {
          include "main.php";
        }
        ?>

        <!--scripts and plugins -->
        <!--must need plugin jquery-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script> 
        <!--bootstrap js plugin-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
        <!--easing plugin for smooth scroll-->
        <script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <!--sticky header-->
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <!--flex slider plugin-->
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <!--parallax background plugin-->
        <script src="js/jquery.stellar.min.js" type="text/javascript"></script>
        <!--owl carousel slider-->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="js/classie.js" type="text/javascript"></script>
        <script src="js/selectFx.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="js/tweetie.min.js" type="text/javascript"></script>
        <!--on scroll animation-->
        <script src="js/wow.min.js" type="text/javascript"></script>
        <!--customizable plugin edit according to your needs-->
        <script src="js/real-estate-custom.js" type="text/javascript"></script>
        <script src="js/own-carousel.min.js" type="text/javascript"></script>
    </body>

    <!-- Mirrored from bootstraplovers.com/templates/assan-2.2/real-estate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Apr 2016 08:48:01 GMT -->
    </html>
