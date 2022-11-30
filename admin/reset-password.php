<?php
use App\Classes\Auth;
require_once '../app/classes/autoload.php';
$auth = new Auth();

if($auth->isLogin()){
    header('location: index.php');
}
if(isset($_GET['email']) && isset($_GET['token']))
{
    $email = $_GET['email'];
    $token = $_GET['token'];
    $result = $auth->chekToken($email,$token)->num_rows;
    if($result !== 1){
        header('location: login.php');   
    }
}else{
    header('location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
    <!-- revocer password form start -->
    <div class="row justify-content-center h-100vh" id="forgot-password-form-box" style="display: block;">
        <div class="col-lg-10 my-auto">
            <div class="card-group">
                <div class="card p-4">
                    <h3>Reset Your Password</h3>
                    <hr class="my-3">
                    <div id="forgotError"></div>
                    <form action="#" method="POST" id="forgot-password-form">
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="New Password" required="">
                            <input type="hidden" name="email" value="<?= $email; ?>" >
                            <input type="hidden" name="token" value="<?= $token; ?>" >
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required="">
                        </div>
                        <div class="my-3 d-grid gap-2">
                        <input type="submit" id="forgotBtn" value="Reset Password" class="btn btn-block btn-primary">
                        </div>
                    </form>
                </div>
                <div class="card p-4 text-center" style="background: #363C43;">
                    <h3 class="text-white font-weight-bold">Welcome Back!</h3>
                    <hr class="my-3 text-white">
                    <p class="text-light lead">
                        Please log in using your email and password. if you haven`t registered yet, you can register for free
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- revocer password form end -->


</div>



<script src="../assets/js/bootstrap/popper.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../assets/js/admin/login.js"></script>


</body>
</html>