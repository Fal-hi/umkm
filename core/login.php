<?php
ob_start();
session_start();
include "kon.php";
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">

    <meta name="description" content="SuperFlat Responsive Admin Template">
    <meta name="keywords" content="SuperFlat Admin, Admin, Template, Bootstrap">

    <title>Login Stock Apotik</title>

    <link rel="shortcut icon" type="image/png" href="../img/fav.png"/>
    <link rel="shortcut icon" type="image/png" href="http://https://stockobat-rstsolok.000webhostapp.com/img/fav.png"/>

    <link href="../vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <link href="../css/app.min.css" rel="stylesheet">
</head>

<body class="login-content">
    <!-- Login -->
    <div class="lc-block toggled" id="l-login">
        <div class="lcb-float"><i class="zmdi zmdi-pin-account"></i></div>
        <form role="form" method="post" action="">
            <fieldset>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>

                <!-- <a href="#" class="btn btn-block btn-primary btn-float m-t-25">Sign In</a> -->
                <button name="Submit" type="Submit" class="btn btn-lg btn-success btn-block">Login</button>
            </fieldset>
        </form>
        <?php // include'koneksi.php';
// include'koneksi.php';
?>if (isset($_POST["Submit"])) {
          $user = $_POST["username"];
          $pass = md5($_POST["password"]);
          $login = mysqli_query(
            $con,
            "SELECT * FROM user_login where username='$user' AND password='$pass'"
          );
          $cek = mysqli_num_rows($login);
          $data = mysqli_fetch_array($login); //1

          if ($cek) {
            session_start();
            $_SESSION["islogin"] = "1";
            $_SESSION["id_user"] = $data["id_user"];
            $_SESSION["username"] = $data["username"];
            $_SESSION["id_lvl"] = $data["id_lvl"];
            header("location:index.php");
          } else {
            echo "<script>alert('Periksa kembali username dan password')</script>";
          }
        } ?>



                    <ul class="login-navigation">
                        <li data-block="#l-register" class="bg-green">Silahkan Masukkan</li>
                        <li data-block="#l-forget-password" class="bg-orange">Username Password?</li>
                    </ul>
                </div>

                <!-- Older IE Warning Message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>   
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->
        
        <script src="../js/functions.js"></script>
    </body>

    <!-- Mirrored from 192.185.228.226/projects/sf/1-1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Nov 2015 09:23:21 GMT -->
    </html>