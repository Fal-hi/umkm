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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Roboto font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/popper.min.js"></script>     
        <script src="js/own-carousel.min.js" type="text/javascript"></script>
    </body>
    </html>
