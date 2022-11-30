<?php
use App\Classes\Auth;
require_once '../app/classes/autoload.php';
$auth = new Auth();

if($auth->isLogin()){
    header('location: index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <!-- bootstrap  -->
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css">
    <!-- css  -->
    <link rel="stylesheet" href="../assets/css/admin/login.css">
    <!-- jquery  -->
    <script src="../assets/js/jquery/jquery-3.6.1.min.js"></script>
</head>
<body>
    


<div class="container">
    <!-- admin login form start -->
    <div class="row justify-content-center h-100vh" id="login-form-box" style="display: show;">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h3>Login to your account</h3>
                    <hr class="my-3">
                    <div id="loginError"></div>
                    <form action="#" method="POST" id="login-form">
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email1" value="<?= isset($_COOKIE['user_email']) ? $_COOKIE['user_email']:'' ?>" placeholder="Email" required="" >
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" name="password" value="<?= isset($_COOKIE['user_password']) ? $_COOKIE['user_password']:'' ?>" placeholder="Password" required="">
                        </div>
                        <div class="my-2">
                            <div class="form-check float-start">
                                <input class="form-check-input" type="checkbox" name="rememberMe" id="rememberMe" <?= isset($_COOKIE['user_email']) ? 'checked':'' ?> >
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <div class="float-end">
                                <a href="javascript:" class="text-decoration-none" id="showForgetForm">Forget Password ?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="my-3 d-grid gap-2">
                        <input type="submit" id="loginBtn" value="Sign In" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
                <div class="card p-4 text-center" style="background: #363C43;">
                    <h3 class="text-white font-weight-bold">Welcome Back!</h3>
                    <hr class="my-3 text-white">
                    <p class="text-light lead">
                        Please log in using your email and password. if you haven`t registered yet, you can register for free
                    </p>
                    <button class="btn btn-outline-light align-self-center btn-lg mt-4" id="showSignUpForm">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <!-- admin login form end -->

    
    <!-- register form start -->
    <div class="row justify-content-center h-100vh" id="register-form-box" style="display: none;">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h3>Create new Account</h3>
                    <hr class="my-3">
                    <div id="registerError"></div>
                    <form action="#" method="POST" id="register-form">
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" >
                            <div class="invalid-feedback">Name filed is require.</div>
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="" >
                            <div class="invalid-feedback">Email filed is require.</div>
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="r_password" name="r_password" placeholder="Password" required="" >
                            <div class="invalid-feedback">Password filed is require.</div>
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Confirm Password" required="" >
                            <div class="invalid-feedback">Confirm password is required.</div>
                        </div>
                        <div class="passerror text-danger"></div>
                        <div class="my-3 d-grid gap-2">
                            <!-- <button type="submit" class="btn btn-primary" id="registerUser" >Register</button> -->
                            <input type="submit" id="registerUser" value="Register" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
                <div class="card p-4 text-center" style="background: #363C43;">
                    <h3 class="text-white font-weight-bold">Welcome Back!</h3>
                    <hr class="my-3 text-white">
                    <p class="text-light lead">
                        Please log in using your email and password. if you haven`t registered yet, you can register for free
                    </p>
                    <button class="btn btn-outline-light align-self-center btn-lg mt-4" id="showSignInForm">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <!-- register account form end -->
    
    <!-- admin Forgotton Password form start -->
    <div class="row justify-content-center h-100vh" id="forgotton-form-box" style="display: none;">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h3>Forgotton Password ?</h3>
                    <hr class="my-3">
                    <div id="resetPasswordError"></div>
                    <form action="#" method="POST" id="forgotton-form">
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" required="" >
                        </div>
                        <div class="my-3 d-grid gap-2">
                            <input type="submit" id="resetPassword" value="Reset Password" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
                <div class="card p-4 text-center" style="background: #363C43;">
                    <h3 class="text-white font-weight-bold">Welcome Back!</h3>
                    <hr class="my-3 text-white">
                    <p class="text-light lead">
                        Enter your email and check your inbox for instruction. please also check your spam folder.
                    </p>
                    <button class="btn btn-outline-light align-self-center btn-lg mt-4" id="back">Back</button>
                </div>
            </div>
        </div>
    </div>
    <!-- admin lForgotton Password form end -->



</div>



<script src="../assets/js/bootstrap/popper.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../assets/js/admin/login.js"></script>


</body>
</html>