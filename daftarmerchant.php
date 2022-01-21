<section>
    <div class="container my-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-md-5 text-white">
                <div class="login-form bg-info mt-4 p-4">
                    <form action="controller/condaftarmerchant.php" method="POST" class="row g-3">
                        <h4>DAFTAR PENJUAL</h4>

                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username..." required>
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password..." required>
                        </div>
                        <div class="col-12">
                            <label>Nama Toko</label>
                            <input type="text" name="namatoko" class="form-control" placeholder="Nama Toko..." required autofocus>
                        </div>
                        <div class="col-12">
                            <label>Jenis Kelamin</label>
                            <select class="form-select" name="jk">
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label>No Handphone</label>
                            <input type="text" name="nohp" class="form-control" placeholder="No Handphone..." required>
                        </div>
                        <div class="col-12">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat..." required>
                        </div>
                        <div class="col-12">
                            <label>Tanggal Daftar</label>
                            <input type="date" name="tgldaftar" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <!-- <a href="index.php?p=loginmerchant" class="btn btn-light float-end">Register</a> -->
                            <button type="submit" class="btn float-end btn-light">Register</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Sudah jadi penjual?
                            <a href="index.php?p=loginmerchant" class="text-dark">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    select {
        font-size: 12px !important;
        color: #7a7a7a !important;
        border-radius: 0 !important;
    }
</style>