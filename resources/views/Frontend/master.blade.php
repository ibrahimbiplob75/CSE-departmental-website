<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>Cse department website | NITER </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Cse department website | NITER" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{asset('/frontend_assets/images/favicon/logo.ico')}}" type="image/png">

    <link rel="stylesheet" href="{{asset('/frontend_assets/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend_assets/css/plugins/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend_assets/css/style.min.css')}}">


     <link rel="stylesheet" href="{{asset('/frontend_assets/css/style.css')}}" />

</head>

<body>

    <!-- Top Bar -->

    <div class="header-to-bar"> HELLO EVERYONE! welcome to NITER CSE department </div>

    <!-- Top Bar -->
    <!-- Header Area Start -->


    <header>
        <div class="header-main sticky-nav ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{asset('/frontend_assets/images/logo/logo.jpg')}}" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <div class="col align-self-center d-none d-lg-block">
                        <div class="main-menu">
                            <ul>
                                <li ><a href="{{url('/')}}">Home </a>
                                </li>
                                @Auth
                                <li class="dropdown position-static"><a href="#">Study Material<i
                                            class="pe-7s-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">

                                                <li class="title"><a href="#">1st semester</a></li>
                                                <li><a href="shop-4-column.html">Leve-1 Term-1</a></li>
                                                <li><a href="shop-left-sidebar.html">Level-1 Term-2</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">2nd semester</a></li>
                                                <li><a href="single-product.html">Leve-2 Term-1</a></li>
                                                <li><a href="single-product-variable.html">Leve-2 Term-2</a></li>
                                            </ul>

                                            <ul class="d-block">
                                                <li class="title"><a href="#">3rd semester</a></li>
                                                <li><a href="cart.html">Leve-3 Term-1</a></li>
                                                <li><a href="checkout.html">Leve-3 Term-2</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">4th semester</a></li>
                                                <li><a href="404.html">Leve-4 Term-1</a></li>
                                                <li><a href="privacy-policy.html">Leve-4 Term-1</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                            </ul>
                                        </li>
                                        <li>

                                            <ul class="menu-banner w-100">
                                                <li>
                                                    <a class="p-0" href=""><img
                                                            class="img-responsive w-100"
                                                            src="" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="p-0" href=""><img
                                                            class="img-responsive w-100"
                                                            src="" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="p-0" href=""><img
                                                            class="img-responsive w-100"
                                                            src="" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                @endauth
                                <li><a href="#">Faculties </a></li>
                                <li><a href="#">Notice </a></li>
                                @Auth
                                <li><a href="">Future Career  </a></li>
                                @endauth
                                <li><a href="{{route('contact_us')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Action Start -->
                    <div class="col col-lg-auto align-self-center pl-0">
                        <div class="header-actions">
                            @Auth
                            <a href="{{route('my_profile')}}" class="header-action-btn"
                               >{{Auth::user()->name}}
                            </a>
                            @else
                            <a href="login.html" class="header-action-btn login-btn" data-bs-toggle="modal"
                               data-bs-target="#loginActive">Sign In</a>
                            @endauth
                            <!-- Single Wedge Start -->
{{--                            <a href="#" class="header-action-btn" data-bs-toggle="modal" data-bs-target="#searchActive">--}}
{{--                                <i class="pe-7s-search"></i>--}}
{{--                            </a>--}}
                            <!-- Single Wedge End -->

                            <a href="#offcanvas-mobile-menu"
                                class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                            <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                <i class="pe-7s-add-user"></i>
                                <span class="header-action-num">00</span>
                            </a>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart"
                               class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-user"></i>


                            </a>
                            <a href="#offcanvas-mobile-menu"
                               class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="pe-7s-menu"></i>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Following</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/"
                                alt=" Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Md Ibrahim</a>
                            <span class="quantity-price"><span class="amount">+880 123456789</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/"
                                alt="Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Sakib Hasan</a>
                            <span class="quantity-price"><span class="amount">+880 123456789</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Page Admin</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/"
                                alt="CR Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Mohammad Ibrahim Biplob</a>
                            <span class="quantity-price"><span class="amount">+880 1571286724</span></span>
                            <a href="#" class="remove"></a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/"
                                alt="CR Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Md Sakib Hasan</a>
                            <span class="quantity-price"><span class="amount">+880 1521366612</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="head">
                <span class="title">CR List</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/"
                                                                         alt="CR Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Mahrave uddin sorkar OVI</a>
                            <span class="quantity-price"><span class="amount">+880 123456789</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/"
                                                                         alt="CR Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Barnali</a>
                            <span class="quantity-price"><span class="amount">+880 123456789</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li class="title"><a href="#">Shop Page</a></li>
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.html">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="{{route('about_us')}}">About Us</a></li>
                    <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->

    @yield('content')

    <!-- Footer Area Start -->
    <div class="footer-area m-lrb-30px">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                            <div class="single-wedge">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/images/logo/logo.jpg" alt=""></a>
                                </div>
                                <p class="about-text">National Institute of Textile Engineering and Research is also known as NITER.
                                    Located in Savar, Dhaka District, it is one of the largest undergraduate textile engineering campus in Bangladesh.

                                </p>
                                <ul class="link-follow">


                                    <li>
                                        <a title="Facebook" href="#"><i class="fa fa-laptop" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" href="#"><i class="fa fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a title="Facebook" href="#"><i class="fa fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-sm-6 col-lg-2 mb-md-30px mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Quick Links</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="#">Support
                                                </a></li>
                                            <li class="li"><a class="single-link" href="#">Helpline</a></li>
                                            <li class="li"><a class="single-link" href="#">Courses</a></li>
                                            <li class="li"><a class="single-link" href="about.html">About</a></li>
                                            <li class="li"><a class="single-link" href="#">Event</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Other Page</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html"> About </a>
                                            </li>
                                            <li class="li"><a class="single-link" href="blog-grid.html">Blog</a></li>
                                            <li class="li"><a class="single-link" href="#">Speakers</a></li>
                                            <li class="li"><a class="single-link" href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-3 col-lg-2 col-sm-6 mb-lm-30px pl-lg-50px">
                            <div class="single-wedge">
                                <h4 class="footer-herading">Company</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="contact.html">Contact us</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="login.html">Log in</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-lg-3 col-sm-6">
                            <div class="single-wedge">

                                <h4 class="footer-herading">Contact Information.</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <p class="address">2023 Your Address Goes Here. <br>
                                        Kohinoor gate, Dhaka - Aricha Hwy, Dhaka</p>
                                    <p class="phone">Phone/Fax:<a href="tel:0123456789">01755-060275</a></p>
                                    <p class="mail">Email:<a href="cse@niter.edu.bd">cse@niter.edu.bd</a></p>

                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copy-text"> © 2023 <strong></strong> All Right Reserve CSE Department || NITER <i class="fa fa-book"
                                    aria-hidden="true"></i> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    <div class="modal popup-login-style" id="loginActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <h2>Log in</h2>
                            <h3>Log in your account</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <div class="remember-forget-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                </div>
                                <button type="submit">Log in</button>
                                <div class="member-register">
                                    <p> Not a member? <a href="{{route('register_student')}}"> Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->
    <!-- Modal -->
    <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container zoom-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/zoom-image/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto"
                                            src="assets/images/product-image/small-image/4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Ardene Microfiber Tights</h2>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 5 Customer Review
                                            )</a></span>
                                </div>
                                <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                                    eiusmod tempor incidi ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco
                                    laboris nisi
                                    ut aliquip ex ea commodo </p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart" href="#"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-compare">
                                        <a href="compare.html"><i class="pe-7s-refresh-2"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                    <span>SKU: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Fashion.</a>
                                        </li>
                                        <li>
                                            <a href="#">eCommerce</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->



    <script src="{{asset('/frontend_assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('/frontend_assets/js/plugins/plugins.min.js')}}"></script>

    <!-- Main Js -->
    <script src="{{asset('/frontend_assets/js/main.js')}}"></script>
</body>

</html>
