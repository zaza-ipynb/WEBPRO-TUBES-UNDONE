<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Bootstrap & CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Assets/Bootstrap/js/bootstrap.min.js')?>">
    <link rel="stylesheet" href="<?php echo base_url('Assets/Bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('Assets/css/Login.css');?>">

</head>
<body>
    <br></br>

    <!-- Log In Form -->
    <section class="log-in">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

                    <div class="card card-signin my-5" style="padding-left:20px; padding-right:20px;">
                        <div class="card-body">
                            <button class="justify-content-start " style="width: 120px; height:45px; background-color:#efefef; border-style: none; border-radius:15px;" type="submit">
                                <a href="<?php echo site_url('Pinterest/SignUp'); ?>" style="color: black; padding-top:10px;font-weight:Bold; text-decoration:none;">Daftar</a>
                            </button>
                        </div>
                        <div class="card-body">
                            <ul class="nav navbar-nav">
                                 <li class="card-title text-center"><img src="<?php echo base_url('assets/img/logo.png'); ?>" style="width: 80px"></li>
                            </ul>
                            <h2 class="card-title text-center "><b>Masuk untuk melihat lainnya</b></h2>
                            <h4 class="card-title text-center">Akses ide-ide terbaik Pinterest dengan akun gratis</h4>


                            <form action="<?php echo site_url('UserController/Login'); ?>" method="POST" class="register-form" id="login-form">
                                <div class="form-label-group">
                                    <input name="Email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="form-label-group">
                                    <input password="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                    <label for="inputPassword">Password</label>
                                </div>

                                </div>
                                <!-- SUBMIT -->
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Masuk</button>
                            </form>
                                <hr class="my-4">
                                <h5 class="card-title text-center">Atau</h5>
                                <button class="btn btn-lg btn-google btn-block text-uppercase"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                                <button class="btn btn-lg btn-facebook btn-block text-uppercase" ><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="nav navbar-nav">
                                        <li><a href="#">Lupa kata sandi?</a></li></label>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="nav navbar-nav">
                                        <li><a href="<?php echo site_url('Pinterest/SignUp'); ?>">Belum bergabung dengan pinterest? Daftar</a></li></label>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="page-footer font-small black pt-4">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-3 mt-md-0 mt-3">
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Tentang pinterest</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Bisnis</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Persyaratan Layanan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Kebijakan privasi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Bantuan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Aplikasi iphone</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Aplikasi android</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Pengguna</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-md-0 mb-3">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Koleksi</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </footer>
    </section>


</body>
</html>
