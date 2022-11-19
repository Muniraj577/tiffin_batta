<?php
$pageTitle = "Home";
?>
<?php include 'includes/header.php'?>

<div id="homeCarouselSlider" class="carousel slide indexpage" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item hero-header active">
            <div class="container py-5 mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 text-center text-lg-start text-media">
                        <div class="free_delivery animated slideInLeft mb-3">
                            <div class="text-white text-sub text-uppercase">Subscribe our meal plans</div>
                        </div>
                        <h1 class="display-3 animated slideInLeft heading1">Different spice for a
                            <br>Different taste
                        </h1>

                        <ul class="list_data ps-0 animated slideInLeft pt-3 pb-3">
                            <li class="padd_list">
                                <a href="" target="_blank"><i class="fas fa-check-circle me-2"></i>No.1 Pizza in
                                    the Neighborhood </a>
                            </li>
                            <li class="padd_list">
                                <a href="" target="_blank"><i class="fas fa-check-circle me-2"></i>Online Ordering
                                    Made Simple </a>
                            </li>
                            <li class="padd_list">
                                <a href="" target="_blank"><i class="fas fa-check-circle me-2"></i>Earn Loyalty
                                    Rewards Points </a>
                            </li>
                        </ul>
                        <a href="order.php" class="btn btn-main py-sm-3 px-sm-4 me-3 animated slideInLeft"><i
                                class="fa-solid fa-cart-shopping me-2"></i>Order Now</a>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="banner">
                            <img src="img/1.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item hero-header">
            <div class="container py-5 mb-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 col-md-6 text-center text-lg-start text-media">
                        <div class="free_delivery animated slideInLeft mb-3">
                            <div class="text-white text-sub">PickUp & Delivery with Us</div>
                        </div>
                        <h1 class="display-3 animated slideInLeft heading1">Enjoy Our<br>Delicious Meal</h1>

                        <ul class="list_data ps-0 animated slideInLeft pt-3 pb-3">
                            <li class="padd_list">
                                <a href="" target="_blank"><i class="fas fa-check-circle me-2"></i>No.1 Pizza in
                                    the Neighborhood </a>
                            </li>
                            <li class="padd_list">
                                <a href="" target="_blank"><i class="fas fa-check-circle me-2"></i>Online Ordering
                                    Made Simple </a>
                            </li>
                            <li class="padd_list">
                                <a href="" target="_blank"><i class="fas fa-check-circle me-2"></i>Earn Loyalty
                                    Rewards Points </a>
                            </li>
                        </ul>


                        <a href="order.php" class="btn btn-main py-sm-3 px-sm-4 me-3 animated slideInLeft"><i
                                class="fa-solid fa-cart-shopping me-2"></i>Order Now</a>
                    </div>
                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="banner">
                            <img src="img/1.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-button carousel-control-prev prev-next-button previous" type="button"
        data-bs-target="#homeCarouselSlider" data-bs-slide="prev">
        <span class="prev">Prev</span>
    </button>
    <button class="carousel-button carousel-control-next prev-next-button nextbtn" type="button"
        data-bs-target="#homeCarouselSlider" data-bs-slide="next">
        <span class="next">Next</span>
    </button>
    <div class="ban_image img-1 wow animate__slideInRight" data-wow-duration="1s" data-wow-delay="0.2s">
        <img src="img/bg.png" alt="" class="img-fluid">
    </div>

    <div class="ban_image img-3 wow animate__slideInLeft" data-wow-delay="0.4s" data-wow-duration="1s">
        <img src="./img/slider_shape2.png" alt="" class="img-fluid">
    </div>

</div>
<section class="about pt-50 pb-50">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="image-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="place-holder-1">
                                <img src="img/about.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 ml--10">
                            <div class="place-holder-2">
                                <img src="img/a1.jpg" alt="">
                            </div>
                            <img src="img/a2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="mb-2">It all starts with a box.</h1>
                <h4 class="text-animation bg-b text-font-d mb-3">Impressively easy meals from just Rs. 290 per
                    serving</h4>
                <p class="mb-4">TiffineBatta.com is an emerging Nutritional based subscription food delivery platform
                    dealing in an extensive range of Food menu provided on a single platform to bring a reliable,
                    hassle-free, and convenient experience. Our goal at TiffineBatta.com is providing ultimate modern
                    solution for customers to Health oriented Nutrition food problem for quality product and Better
                    delivery
                    <br>
                    Customer satisfaction, trust, transparency, and commitment are the terms that define us and we work
                    day and night to make your Online food experience
                </p>
                <a class="btn btn-main py-3 px-5 mt-2" href="">Know More <i class="fas fa-arrow-right ml-3"></i>
                    </i></a>
            </div>
        </div>
</section>
<section class="special-menu section-gap mt-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="headding-part text-center pb-5">
                    <p class="headding-sub mb-3">Our Meal Plan</p>
                    <h1 class="fw-bold">Delicious Deals for Delicious Meals
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="special-tab text-center">
                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="text-uppercase fw-bold tab-link current" data-tab="tab-1"><a
                                href="#tab_1" role="tab" data-bs-toggle="tab" class="active" aria-selected="true">
                                Momo</a></li>
                        <li role="presentation" class="text-uppercase fw-bold tab-link" data-tab="tab-2"><a
                                href="#tab_2" role="tab" data-bs-toggle="tab" class="" aria-selected="false"> Drinks</a>
                        </li>
                        <li role="presentation" class="text-uppercase fw-bold tab-link" data-tab="tab-3"><a
                                href="#tab_3" role="tab" data-bs-toggle="tab" class="" aria-selected="false"> salads</a>
                        </li>
                        <li role="presentation" class="text-uppercase fw-bold tab-link" data-tab="tab-4"><a
                                href="#tab_4" role="tab" data-bs-toggle="tab" class="" aria-selected="false"> pasta</a>
                        </li>
                        <li role="presentation" class="text-uppercase fw-bold tab-link" data-tab="tab-5"><a
                                href="#tab_5" role="tab" data-bs-toggle="tab" class="" aria-selected="false">
                                burgers</a>
                        </li>
                        <li role="presentation" class="text-uppercase fw-bold tab-link" data-tab="tab-6"><a
                                href="#tab_6" role="tab" data-bs-toggle="tab" class="" aria-selected="false">
                                deserts</a>
                        </li>
                        <li role="presentation" class="text-uppercase fw-bold tab-link" data-tab="tab-7"><a
                                href="#tab_7" role="tab" data-bs-toggle="tab"> pizzas</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="pt-70 tab-pane fade in active show" id="tab_1">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center">
                                    <a href="#"><img src="img/menu1.jpg" alt="menu" class="menu-image"></a>

                                </div>
                                <a href="#" class="menu-title text-capitalize">margherita pizza</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img  text-center"><a href="#"><img src="img/menu2.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Rum With Soda</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center menu-img"><a href="#"><img src="img/menu2.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Ceaser Salad</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center menu-img"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Sea Food Pasta</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu4.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Chocolate Cookies</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu6.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Pepperoni Pizza</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu1.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">bismarck pizza</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu1.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Valdostana pizza</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div role="tabpanel" class="pt-70 tab-pane fade" id="tab_2">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Rum With Soda</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="pt-70 tab-pane fade" id="tab_3">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu4.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Ceaser Salad</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="pt-70 tab-pane fade" id="tab_4">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu2.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Sea Food Pasta</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="pt-70 tab-pane fade" id="tab_5">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu4.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">VALDOSTANA PIZZA</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">BISMARCK PIZZA</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img  text-center"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">PEPPERONI PIZZA</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">ORIENTAL PIZZA</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu2.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">BARBECUE PIZZA</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="pt-70 tab-pane fade" id="tab_6">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu2.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Chocolate Cookies</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Rum With Soda</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab_7">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu4.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Vegetarian</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu1.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">margheritapizza</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 pt-20">
                        <div class="card">
                            <div class="card-body">
                                <div class="menu-img text-center"><a href="#"><img src="img/menu3.jpg" alt="menu"
                                            class="menu-image"></a>
                                </div>
                                <a href="#" class="menu-title text-capitalize">Four Cheese</a>
                                <p class="menu-des">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                </p>
                                <span class="menu-price">$20.50</span>
                                <span>
                                    <a href="" class="btn btn-cart float-end"><i class="fas fa-shopping-basket"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="off mt-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="display-3 text-white animated slideInLeft mb-4">We Have <span
                        class="color-sec">Excellent</span>
                    Of <span class="color-sec">Quality</span> Pizza</h1>

                <a href="" class="btn btn-main py-sm-3 px-sm-5 me-3 animated slideInLeft">See All Menu <i
                        class="fas fa-arrow-right ml-3"></i></a>
            </div>
            <div class="col-lg-6 text-center text-lg-right overflow-hidden">
                <div class="off-section-main" data-aos="fade-up" data-aos-duration="2000">
                    <div class="off-container">
                        <div class="sec-title style3">
                            <div class="sec-title-holder">
                                <h2 class="off-title"><span class="primary-color">Hot &</span>Spicy</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="off-img">
                    <img class="img-fluid" data-aos="fade-up" data-aos-duration="2000" src="img/off.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="count-section pt-5 pb-5">
    <div class="container">
        <div class="row padding-class me-0 ml-0">
            <!-- <div class="col-md-3">
                <div class="count_detail text-center">
                    <i class="fa-solid fa-seedling"></i>
                    <h3 class="timer pt-4 pb-2 count-number text-white" data-to="100" data-speed="1500"></h3>
                    <h5 class="text-white">Ingredients</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="count_detail text-center">
                    <i class="fa-regular fa-user"></i>
                    <h3 class="timer pt-4 pb-2 count-number text-white" data-to="500" data-speed="1500"></h3>
                    <h5 class="text-white"> Clients Daily</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="count_detail text-center">
                    <i class="fa-solid fa-landmark"></i>
                    <h3 class="timer pt-4 pb-2 count-number text-white" data-to="25" data-speed="1500"></h3>
                    <h5 class="text-white">Years of Experience</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="count_detail text-center">
                    <i class="fa-regular fa-heart"></i>
                    <h3 class="timer pt-4 pb-2 count-number text-white" data-to="150" data-speed="1500"></h3>
                    <h5 class="text-white">Fresh & Halal</h5>
                </div>
            </div> -->
            <div class="col-md-12">
                <h3 class="text-white heading2">SKIP THE LINE, ORDER ONLINE NOW...</h3>
                <div class="text-center mt-3">
                    <a href="order.php" class="btn btn-main py-sm-2 px-sm-5 text-center">Order Now</a>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial pt-50 pb-50 index-testi">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="itest_img">
                    <img src="img/client.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 my-auto padding-left">
                <div class="sec-title-holder">
                    <p class="sub-title">TESTIMONIALS</p>
                    <h2 class="c-title">What Our Client Says</h2>
                </div>
                <div class="owl-carousel owl-theme testi pt-4">

                    <div class="item">
                        <div class="shadow-class row">
                            <div class="col-lg-12 col-md-12">
                                <div class="info_client">
                                    <div class="profile-desc">
                                        <p> This place is great!! We have ordered from here several times and are always
                                            happy. The universal works pizza is awesome, cheesesteaks are great, and I
                                            love the mozz sticks. Always fast and hot, no need to go anywhere else.</p>
                                    </div>
                                    <div class="profile1">
                                        <div class="information">
                                            <h6 class="c-name">Jake Schneider</h6>
                                            <!-- <span>CEO</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="shadow-class row">
                            <div class="col-lg-12 col-md-12">
                                <div class="user_info">
                                    <div class="profile-desc">
                                        <p> The food was great! I was very tempted to order again especially because of
                                            the pizza, the wings was amazing too, wish I ordered from them sooner
                                        </p>
                                    </div>
                                    <div class="profile1">
                                        <div class="information">
                                            <h6 class="c-name">Marcus Bullock</h6>
                                            <!-- <span>CEO</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shadow-class row">
                            <div class="col-lg-12 col-md-12">
                                <div class="user_info">
                                    <div class="profile-desc">
                                        <p> You can think of this as just another local pizza and sub shop, but it's
                                            their service that will impressed me. Been going for years,and I keep coming
                                            back.<br>
                                            The wings, though. Big and meaty, with wide variety of flavors. My favorite?
                                            Key west lime flavor.</p>
                                    </div>
                                    <div class="profile1">
                                        <div class="information">
                                            <h6 class="c-name">Alon Seal</h6>
                                            <span>Local Guide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shadow-class row">
                            <div class="col-lg-12 col-md-12">
                                <div class="user_info">
                                    <div class="profile-desc">
                                        <p> Nice hole in the wall establishment with great food and great prices. I
                                            would suggest calling ahead because they are SUPER BUSY! I also made the
                                            mistake of getting the 10 piece wings with fries and a small cheese
                                            pizza...way too much food for me but both were delicious. When I'm back here
                                            for business, I'll make it a must that I return!</p>
                                    </div>
                                    <div class="profile1">
                                        <div class="information">
                                            <h6 class="c-name">Timothy Mercer</h6>
                                            <span>Local Guide</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="shadow-class row">
                            <div class="col-lg-12 col-md-12">
                                <div class="user_info">
                                    <div class="profile-desc">
                                        <p> My husband and I really enjoyed our food from here. This was our second time
                                            eating here and both times the pizza was equally good. We got the white
                                            pizza both times and it was yummy. I wish it had ricotta, but it was still
                                            good and very cheesy. We also had Philly cheesesteak sub and it was better
                                            than any we've had locally and very delicious. Given we are very familiar
                                            with cheesesteaks as it's one of our go to's it is saying a lot with how
                                            much we enjoyed it. Very impressed! The guy who took the order and the one
                                            that cashed us out was equally as nice and friendly. Service was quick. Very
                                            happy and will be revisiting.</p>
                                    </div>
                                    <div class="profile1">
                                        <div class="information">
                                            <h6 class="c-name">Ashley Gallaher</h6>
                                            <!-- <span>CEO</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="free-delivery-section pb-50">
    <div class="container free-delivery-content">
        <div class="row">
            <div class="col-md-12 col-lg-4">
                <div class="free_delivery_detail text-center">
                    <img src="img/bike.png" alt="" height="307" width="479">
                </div>

            </div>
            <div class="col-md-6 col-lg-4 my-auto ps-5 media-padding">
                <div class="content-free">
                    <h2 class="text-white fw-bold">Get Free Delivery!</h2>
                    <p class="text-white mb-0">As well known and we are very busy all days beforeso we can guarantee
                        your
                        seat.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 my-auto mx-auto media-style text-center">
                <h3 class="phone"><span><i class="fa-solid fa-phone me-2"></i>Call:</span> <a href="tel:(410) 668-9150">
                        (410) 668-9150</a></h3>
            </div>

        </div>
    </div>
</section> -->
<?php
include 'includes/footer.php';
include 'includes/script.php'

?>