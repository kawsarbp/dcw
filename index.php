<?php
require_once 'app/classes/autoload.php';
use App\Classes\Site;
$home = new Site();

$sliders = $home->getSliders();
$work_menus = $home->getWorkMenus();
$work_items = $home->getWorkItems();
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="bizes is a multipurpose buisness template suitable for agency, business, consultant, corporate, creative, finance, portfolio, startup, trading  or any other business website">
    <meta name="keywords" content="bizes, Bootstrap, Construction, finance, Real Estate, Corporate, Template ">
    <meta name="author" content="Masud Rana">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= basename($_SERVER['PHP_SELF'],'.php') ?></title>
    <link rel="shortcut icon" href="assets/public/img/favicon.ico">
    <link rel="stylesheet" href="assets/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/public/css/theme-plugins.css">
    <link rel="stylesheet" href="assets/public/style.css">
    <link rel="stylesheet" href="assets/public/css/responsive.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="preloader-wrap">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <span class="loading" data-name="Loading">Loading</span>
    </div>
</div>


<div class="wrapper">

    <header class="header-area primary-header">

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">

                        <ul class="top-contact-menu">
                            <li><strong>Phone:</strong> +880123 456 789</li>
                            <li><strong>Language:</strong> English <span class="caret"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Spanish</a></li>
                                    <li><a href="#">Hindi</a></li>
                                    <li><a href="#">Bengali</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="col-xs-12 col-sm-6">

                        <div class="top-social">
                            <ul class="list-inline">
                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-behance"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-dribble"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="navigation-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-sm-3 col-md-3">
                        <div class="logo">
                            <h2 class="uppercase"><a href="index.php">Bizes</a></h2>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-9 col-md-9">

                        <div class="main-menu-wrap">
                            <nav class="bizes-nav">
                                <ul class="menu">
                                    <li class="has-dropdown"><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home Version One</a></li>
                                            <li><a href="index-2.html">Home Version Two</a></li>
                                            <li><a href="index-3.html">Home Version Three</a></li>
                                            <li class="has-dropdown"><a href="#">Home Portfolios</a>
                                                <ul>
                                                    <li><a href="index-portfolios.html">Home Portfolio One</a></li>
                                                    <li><a href="index-portfolios-2.html.html">Home Portfolio Two</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li class="has-dropdown"><a href="#">About</a>
                                                <ul>
                                                    <li><a href="about.html">About Us One</a></li>
                                                    <li><a href="about-2.html">About Us two</a></li>
                                                    <li><a href="team.html">Team Members</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="#">Service</a>
                                                <ul>
                                                    <li><a href="service-1.html">Services One</a></li>
                                                    <li><a href="service-2.html">Services Two</a></li>
                                                    <li><a href="service-3.html">Services Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="#">Projects</a>
                                                <ul>
                                                    <li><a href="portfolio-1.html">Project One</a></li>
                                                    <li><a href="portfolio-2.html">Project Two</a></li>
                                                    <li><a href="portfolio-3.html">Project Three</a></li>
                                                    <li><a href="portfolio-single.html">Project Detail</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Mega Menu</a>

                                        <ul class="mega-menu three-column mega-center">

                                            <li class="mega-col"><span class="title">Mega Menu Title</span>
                                                <ul>
                                                    <li><a href="#">Accordions</a></li>
                                                    <li><a href="#">Buttons</a></li>
                                                    <li><a href="#">Call Action</a></li>
                                                    <li><a href="#">Google Map</a></li>
                                                    <li><a href="#">Font Icons</a></li>
                                                </ul>
                                            </li>


                                            <li class="mega-col"><span class="title">Mega Menu Title</span>
                                                <ul>
                                                    <li><a href="#">Lists</a></li>
                                                    <li><a href="#">Image Container</a></li>
                                                    <li><a href="#">Panels</a></li>
                                                    <li><a href="#">Pies Graph</a></li>
                                                    <li><a href="#">Pricing Tables</a></li>
                                                </ul>
                                            </li>


                                            <li class="mega-col"><span class="title">Mega Menu Title</span>
                                                <ul>
                                                    <li><a href="#">Social Buttons</a></li>
                                                    <li><a href="#">Tables</a></li>
                                                    <li><a href="#">Widgets</a></li>
                                                    <li><a href="#">Team Members</a></li>
                                                    <li><a href="#">Typography</a></li>
                                                </ul>
                                            </li>

                                        </ul>

                                    </li>
                                    <li class="has-dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                            <li><a href="blog-list.html">Blgo List View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>


                        <div class="mobile-menu-area"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="slider-area style-1">
        <div id="welcome-slide" class="slide-controls owl-carousel">
            <?php
            while ($slider = $sliders->fetch_assoc()) { ?>
            <div class="single-slide" style="background-image: url(uploads/<?= $slider['photo'] ?>);">

                <div class="slide-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">

                                <div class="slide-content-area">

                                    <div class="single-slide-content text-center">
                                        <h1><?= $slider['title'] ?></h1>
                                        <p><?= $slider['sub_title'] ?></p>
                                        <a href="<?= $slider['url'] ?>" class="btn btn-bizes eff-2">Get Started</a>
                                        <a href="<?= $slider['url'] ?>" class="btn btn-bizes eff-1">Get Started</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>


    <div class="about-area pt110-pb65">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-title text-center pb-70">
                        <h2>ABOUT US</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-carousle owl-carousel">

                        <div class="img-item">
                            <img src="assets/public/img/about/1.jpg" alt="">
                        </div>


                        <div class="img-item">
                            <img src="assets/public/img/about/1.jpg" alt="">
                        </div>


                        <div class="img-item">
                            <img src="assets/public/img/about/1.jpg" alt="">
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bizes-tab">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">WHAT WE DO</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">WHAT WE ARE</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">OUR MISSION</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="bizes-tab-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                    <a href="#" class="btn btn-bizes eff-2">Read More</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="bizes-tab-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                                    <a href="#" class="btn btn-bizes eff-2">Read More</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="bizes-tab-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                    <a href="#" class="btn btn-bizes eff-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="service-area bg-gray pt110-pb65">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">

                    <div class="section-title text-center pb-70">
                        <h2>OUR SERVICES</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing </p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">

                    <div class="single-service style-one text-center">
                        <i class="icofont icofont-anchor-alt"></i>
                        <h5>Creative Design</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">

                    <div class="single-service style-one text-center">
                        <i class="icofont icofont-briefcase-alt-1"></i>
                        <h5>EASY TO CUSTOMIZE</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">

                    <div class="single-service style-one text-center">
                        <i class="icofont icofont-responsive"></i>
                        <h5>RESPONSIVE DESIGN</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">

                    <div class="single-service style-one text-center">
                        <i class="icofont icofont-settings-alt"></i>
                        <h5>CORPORATE BRANDING</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">

                    <div class="single-service style-one text-center">
                        <i class="icofont icofont-support"></i>
                        <h5>24/7 SUPPORT</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">

                    <div class="single-service style-one text-center">
                        <i class="icofont icofont-code-alt"></i>
                        <h5>RESPONSIVE DESIGN</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="larest-work-area pt110-pb95">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title text-center pb-70">
                        <h2>LATEST WORKS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="filter-menu text-center">
                        <button class="active" data-filter="*">All</button>
                        <?php
                        while ($work_menu = mysqli_fetch_array($work_menus)){ ?>
                        <button data-filter=".<?= $work_menu['slug'] ?>"><?= $work_menu['name'] ?></button>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="portfolio-wrap">
                    <?php
                    while ($work_item = mysqli_fetch_array($work_items)) { ?>
                    <div class="col-md-4 col-sm-6 portfolio-item web <?= $work_item['slug'] ?>">
                        <div class="portfolio-img">
                            <a class="venobox" data-gall="gallery01" href="uploads/<?= $work_item['photo'] ?>">
                                <i class="icofont icofont-ui-zoom-in"></i>
                                <img src="uploads/<?= $work_item['photo'] ?>" alt="">
                            </a>
                        </div>

                        <div class="portfolio-info text-center">
                            <a href="#"><h6><?= $work_item['title'] ?></h6></a>
                            <p><?= $work_item['name'] ?></p>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>


    <div class="latest-news-area bg-gray pt110-pb65">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-title text-center pb-70">
                        <h2>LATEST NEWS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="home-blog-wraper owl-carousel">
                    <div class="col-md-4">

                        <div class="single-news">
                            <div class="post-thumbnail">
                                <a href="javascript:"><img src="assets/public/img/blog/1.jpg" alt=""></a>
                                <div class="post-date">15 jan 2016</div>
                            </div>
                            <div class="entry-header">
                                <h4 class="entry-title"><a href="javascript:">Springtime color schemes to try at home</a></h4>
                            </div>
                            <div class="entry-meta">
                                <span><i class="icofont icofont-user-male"></i> <a href="#">Admin</a></span>
                                <span><i class="icofont icofont-speech-comments"></i> <a href="#">5</a></span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="single-news">
                            <div class="post-thumbnail">
                                <a href="javascript"><img src="assets/public/img/blog/2.jpg" alt=""></a>
                                <div class="post-date">15 jan 2016</div>
                            </div>
                            <div class="entry-header">
                                <h4 class="entry-title"><a href="javascript">Springtime color schemes to try at home</a></h4>
                            </div>
                            <div class="entry-meta">
                                <span><i class="icofont icofont-user-male"></i> <a href="#">Admin</a></span>
                                <span><i class="icofont icofont-speech-comments"></i> <a href="#">5</a></span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="single-news">
                            <div class="post-thumbnail">
                                <a href="blog-detail.html"><img src="assets/public/img/blog/3.jpg" alt=""></a>
                                <div class="post-date">15 jan 2016</div>
                            </div>
                            <div class="entry-header">
                                <h4 class="entry-title"><a href="blog-detail.html">Springtime color schemes to try at home</a></h4>
                            </div>
                            <div class="entry-meta">
                                <span><i class="icofont icofont-user-male"></i> <a href="#">Admin</a></span>
                                <span><i class="icofont icofont-speech-comments"></i> <a href="#">5</a></span>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="single-news">
                            <div class="post-thumbnail">
                                <a href="blog-detail.html"><img src="assets/public/img/blog/3.jpg" alt=""></a>
                                <div class="post-date">15 jan 2016</div>
                            </div>
                            <div class="entry-header">
                                <h4 class="entry-title"><a href="blog-detail.html">Springtime color schemes to try at home</a></h4>
                            </div>
                            <div class="entry-meta">
                                <span><i class="icofont icofont-user-male"></i> <a href="#">Admin</a></span>
                                <span><i class="icofont icofont-speech-comments"></i> <a href="#">5</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-area ptb-110">
        <div class="container">
            <div class="row">
                <div class="contact-wrap">
                    <div class="col-md-4 col-sm-5">
                        <div class="contact-left">
                            <p><span><i class="icofont icofont-telephone"></i></span> +880123456789</p>
                            <p><span><i class="icofont icofont-ui-message"></i></span> <a href="https://bootitems.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                                                                          data-cfemail="463c2334292527363506212b272f2a6825292b">[email&#160;protected]</a></p>
                            <p><span><i class="icofont icofont-social-google-map"></i></span>71 Pilgrim Avenue, Chevy Chase, MD 20815.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7">
                        <form action="#" class="contact-us-form">

                            <div class="single-field half-field">
                                <input type="text" class="form-control" id="usr" placeholder="Name">
                            </div>


                            <div class="single-field half-field-last">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>


                            <div class="single-field">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Your messages..."></textarea>
                            </div>

                            <button class="btn btn-bizes eff-1" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-area pt90-pb100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget about-widget">
                        <h4 class="widget-title">About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur atque explicabo sunt aut voluptas totam consectetur eos magnam hic dolorem.</p>
                        <ul class="social-links">
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget contact-widget">
                        <h4 class="widget-title">CONTACT US</h4>
                        <ul>
                            <li><i class="icofont icofont-social-google-map"></i> Lane #22, House #12/E, NYC</li>
                            <li><i class="icofont icofont-telephone"></i>+880 1234 567 890</li>
                            <li><i class="icofont icofont-ui-message"></i> <a href="https://bootitems.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f38a9c86819d929e96b3949e929a9fdd909c9e">[email&#160;protected]</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-link">
                        <h4 class="widget-title">IMPORTANT LINKS</h4>
                        <ul>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>Home</a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>Portfolio</a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>About</a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>Contacts</a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>Latest Posts </a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>Clients</a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i>Testimonial</a></li>
                            <li><a href="#"><i class="icofont icofont-rounded-double-right"></i> Links</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">NEWSLETTER</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <form action="#" method="post" class="subscribe-form">
                            <input name="email" class="widget-input" placeholder="Enter Your Email..." type="email">
                            <button type="submit" class="widget-sbtn">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="copy-right-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy;2017. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>

</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/public/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/public/js/bootstrap.min.js"></script>
<script src="assets/public/js/plugins.js"></script>
<script src="assets/public/js/main.js"></script>
</body>

</html>
