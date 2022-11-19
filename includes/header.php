<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tiffin Batta</title>

    <link rel="icon" href="img/header-logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Barlow:wght@400;700&family=Cookie&family=Dancing+Script&family=DynaPuff&family=Gabriela&family=Great+Vibes&family=Heebo&family=Jost&family=Kalam&family=Karla:wght@300;400&family=Kaushan+Script&family=Lato&family=Lobster&family=Lovers+Quarrel&family=Mitr&family=Nunito:wght@400;900&family=Open+Sans:ital@0;1&family=PT+Sans+Narrow&family=PT+Sans:wght@400;700&family=Pacifico&family=Playfair+Display+SC:wght@700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,600;1,800&family=Poppins&family=Raleway:wght@400;500&family=Roboto&family=Roboto+Slab&family=Secular+One&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
</head>
<div class="header">

    <section class="nav-section py-2">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="img/header-logo.png" alt=""></a>
            </div>
            <div class="nav-wrapper py-2">
                <div class="close p-3"><i class="fa fa-times"></i></div>
                <ul class="navigation list-unstyled align-items-center justify-content-start mb-0">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="catering.php">Catering</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="d-md-none"> <a class="btn theme-btn big text-uppercase mt-3 px-3 w-75" href=""
                            data-bs-toggle="modal" data-bs-target="#user_login_Modal">Login / Register</a>
                    </li>
                </ul>
            </div>
            <ul class="list-unstyled nav-icons mb-0 pt-1 pt-lg-0">

                <!-- Before Login -->
                <li><a href="" data-bs-toggle="modal" data-bs-target="#user_login_Modal"
                        class="btn theme-btn text-uppercase ms-3 bg-orange text-nowrap d-none d-md-block">Login /
                        Register</a>
                </li>
                <!-- Before Login -->
                <!-- <li>
                    <div class="username"><a class="user-sub mr-md-3 text-dark text-nowrap" href="#">
                            <span class="d-none d-md-inline theme-color">Universal Pizza</span> <span
                                class="d-md-none"><i class="far fa-user fa-2x"></i></span> <i
                                class="fa fa-caret-down"></i></a>
                        <ul class="sub-menu list-unstyled mb-0 p-2">
                            <li><a class="text-nowrap" href="user-dashboard.php"><i
                                        class="fa fa-tachometer-alt me-2"></i> Dashboard</a></li>
                            <li><a class="text-nowrap" href="user-dashboard.php"><i class="fa fa-list me-2"></i> My
                                    Orders</a></li>
                            <li><a class="text-nowrap" href="user-dashboard.php"><i class="fa fa-bookmark me-2"></i>
                                    My Reservation</a></li>
                            <li><a class="text-nowrap" href="user-dashboard.php"><i class="fa fa-trophy me-2"></i>
                                    Loyalty Points</a></li>
                            <li><a class="text-nowrap" href="#" data-toggle="modal"
                                    data-target="#logout_confirm_Modal"><i class="fa fa-sign-out-alt me-2"></i>
                                    Logout</a></li>
                        </ul>
                    </div>
                </li> -->

                <li class="header-cart-icon">
                    <a class="cart-icon ms-3" href="#"><span
                            class="svg-cart-icon"><?php include 'img/cart.svg' ?></span>
                        <span class="cart-num">1</span></a>
                </li>
                <li><span id="menu-bar" class="d-inline-block ms-4"><i class="fa fa-bars text-dark fa-2x"></i></span>
                </li>
            </ul>

        </div>
    </section>
</div>
<?php
include 'login-modal.php';
include 'sticky-cart-content.php';
?>