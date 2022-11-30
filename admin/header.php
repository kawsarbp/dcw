<?php

use App\Classes\Auth;

require_once '../app/classes/autoload.php';
$auth = new Auth();

if (!$auth->isLogin()) {
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')) ?></title>
    <!-- bootstrap  -->
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <!--datatable-->
    <link rel="stylesheet" href="../assets/datatable/css/jquery.dataTables.css">
    <!--datepicker-->
    <link rel="stylesheet" href="../assets/datepicker/css/datepicker.css">
    <!--toster-->
    <link rel="stylesheet" href="../assets/toastr/css/toastr.min.css">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css">
    <!-- css  -->
    <link rel="stylesheet" href="../assets/css/admin/style.css">
    <!--css-->
    <!-- jquery  -->
    <script src="../assets/js/jquery/jquery-3.6.1.min.js"></script>
    <script>
        const site_url = "http://localhost/dcw/";
    </script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
    <div class="container">
        <a class="navbar-brand" href="index.php">Faz Group</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?> "
                       aria-current="page" href="index.php"> <i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'sliders.php' ? 'active' : '' ?> <?= basename($_SERVER['PHP_SELF']) == 'add-slider.php' ? 'active' : '' ?> "
                       aria-current="page" href="sliders.php"> <i class="fa fa-sliders-h"></i> Sliders</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
                    <?= basename($_SERVER['PHP_SELF']) == 'work-menu.php' ? 'active' : '' ?>
                    <?= basename($_SERVER['PHP_SELF']) == 'work-menu-create.php' ? 'active' : '' ?>
                    <?= basename($_SERVER['PHP_SELF']) == 'work-item-create.php' ? 'active' : '' ?>
                    <?= basename($_SERVER['PHP_SELF']) == 'work-item.php' ? 'active' : '' ?>"

                       href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false"> <i class="fa fa-tasks"></i>
                        Works
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'work-menu-create.php' ? 'active' : '' ?> <?= basename($_SERVER['PHP_SELF']) == 'work-menu.php' ? 'active' : '' ?>"
                               href="work-menu.php">Menu</a></li>
                        <li>
                            <a class="dropdown-item <?= basename($_SERVER['PHP_SELF']) == 'work-item-create.php' ? 'active' : '' ?> <?= basename($_SERVER['PHP_SELF']) == 'work-item.php' ? 'active' : '' ?>"
                               href="work-item.php">Portfolio</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false"> <i class="fa fa-user"></i>
                        <?= strstr($_SESSION['user_name'], ' ', true) ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>