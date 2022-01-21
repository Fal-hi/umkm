<?php
ob_start();
include "core/kon.php";
?>

<section>
  <div class="container my-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-5 text-white">
                <div class="login-form bg-info mt-4 p-4">
                    <form action="" method="POST" class="row g-3">
                        <h4>SELAMAT DATANG PENJUAL</h4>
                        <!-- username: Pina | password: pinaumkm -->
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="Submit" class="btn btn-light float-end">Sign In</button>
                        </div>
                    </form>
                    <?php
                    include "core/kon.php";
                    if (isset($_POST["Submit"])) {
                      $user = $_POST["user"];
                      $pass = $_POST["password"];
                      $login = mysqli_query(
                        $con,
                        "SELECT * FROM merchant WHERE password='$pass'"
                        // "SELECT * FROM merchant WHERE username='$user' AND password='$pass' AND status = 1"
                      );
                      $cek = mysqli_num_rows($login);
                      $data = mysqli_fetch_array($login); //1

                      if ($cek) {
                        session_start();
                        $_SESSION["isloginn"] = "login"; //1
                        $_SESSION["idadminn"] = $data["idmerchant"]; //1
                        $_SESSION["usernamee"] = $data["username"]; //3
                        $_SESSION["namalengkapp"] = $data["namatoko"]; //4
                        header("location:merchant/index.php");
                      } else {
                        echo "<script>
                                alert('Periksa kembali username dan password Anda')
                            </script>";
                      }
                    }
                    ?>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Belum punya akun? 
                          <a href="index.php?p=daftarmerchant" class="text-dark">Sign Up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>