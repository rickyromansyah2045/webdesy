<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title ?></title>
        <link href="<?= base_url() ?>/css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon.png" />
        <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                                <!-- Social login form-->
                                <div class="card my-5">
                                    <div class="card-body p-5 text-center">
                                        <div class="h3 font-weight-light mb-3">Sign In</div>
                                        <!-- Social login links-->
                                        <!-- off
                                        <a class="btn btn-icon btn-facebook mx-1" href="#!"><i class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-github mx-1" href="#!"><i class="fab fa-github fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-google mx-1" href="#!"><i class="fab fa-google fa-fw fa-sm"></i></a>
                                        <a class="btn btn-icon btn-twitter mx-1" href="#!"><i class="fab fa-twitter fa-fw fa-sm"></i></a>
                                        end off -->
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <!-- Login form-->
                                        <?= (session()->get('pesan') != '') ? "<p>".session()->get('pesan')."</p>" : ""?>
                                        <form action="<?= base_url()?>/xlogin/do_login" method="post">
                                            <!-- Form Group (email address)-->
                                            <div class="form-group">
                                                <label class="text-gray-600 small" for="emailExample">Username</label>
                                                <input name="username" class="form-control form-control-solid" type="text" placeholder="" aria-label="Email Address" aria-describedby="emailExample" />
                                            </div>
                                            <!-- Form Group (password)-->
                                            <div class="form-group">
                                                <label class="text-gray-600 small" for="passwordExample">Password</label>
                                                <input name="password" class="form-control form-control-solid" type="password" placeholder="" aria-label="Password" aria-describedby="passwordExample" />
                                            </div>
                                            <!-- Form Group (forgot password link)-->
                                            <!-- off
                                            <div class="form-group"><a class="small" href="auth-password-social.html">Forgot your password?</a></div>
                                            end off -->
                                            <!-- Form Group (login box)-->
                                            <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                                <!-- <div class="custom-control custom-control-solid custom-checkbox">
                                                    <input class="custom-control-input small" id="customCheck1" type="checkbox" />
                                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                                </div> -->
                                                <!-- <a class="btn btn-primary" type="submit" style="width:100%;">Login</a> -->
                                                <button class="btn btn-primary" type="submit" style="width:100%;">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body px-5 py-4">
                                        <div class="small text-center">
                                            <i class="fas fa-copyright"></i> <?= base_url()?> <?= date('Y')?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="footer mt-auto footer-dark">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>/js/scripts.js"></script>
    </body>
</html>
