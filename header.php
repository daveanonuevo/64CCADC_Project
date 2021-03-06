<head>
    <title>Selling &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="/https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/style.css">

    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache" />

    <?php
    header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0', FALSE);
    header('Pragma: no-cache');
    ?>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <div class="top-bar py-3 bg-light" id="home-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 text-left">
                    <ul class="social-media">
                        <li><a href="/" class=""><span class="icon-facebook"></span></a></li>
                        <li><a href="/" class=""><span class="icon-twitter"></span></a></li>
                        <li><a href="/" class=""><span class="icon-instagram"></span></a></li>
                        <li><a href="/" class=""><span class="icon-linkedin"></span></a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <p class="mb-0 float-right">
                        <span class="mr-3"><a href="/tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+65) 9227 3586</span></a></span>
                        <span><a href="/#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">S10187605@connect.np.edu.sg</span></a></span>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="/index.php" class="text-black mb-0">Selling<span class="text-primary">.</span> </a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/#products-section" class="nav-link">Products</a></li>
                            <li><a href="/#about-section" class="nav-link">About Us</a></li>
                            <li><a href="/#special-section" class="nav-link">Special</a></li>

                            <?php
                            if (isset($_SESSION['email'])) {
                                echo '<li><a href="/account.php" class="nav-link">Account</a></li>';
                            }
                            ?>

                            <?php
                            if (!isset($_SESSION['email'])) {
                                echo '<li><a href="/login.php" class="nav-link">Login</a></li>';
                                echo '<li><a href="/register.php" class="nav-link">Register</a></li>';
                            }
                            ?>
                            <?php
                                if (isset($_SESSION['email'])) {
                                    echo '<li><a href="/includes/logout.php" class="nav-link">Logout</a></li>';
                                }
                                ?>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>
    <br />
    <br />