
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Goru – Ecommerce HTML5 Responsive Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Include All CSS -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/themewar-icons.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/animate.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/settings.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/lightcase.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/preset.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/ignore_in_wp.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/theme.css')}}"/>
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="front/images/favicon.png">
        <!-- Favicon Icon -->
    </head>
    <body>
        <!-- Preloader Start -->
        <div class="preloader" id="preloader">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start -->
        <header class="header-01 fix-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="front/images/logo.png" alt="Goru"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <nav class="mainmenu mobile-menu">
                            <div class="mobile-btn">
                                <a href="javascript: void(0);"><span>Menu</span><i class="twi-bars"></i></a>
                            </div>
                            <ul>
                                <li class="active menu-item-has-children">
                                    <a href="javascript:void(0);">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One</a></li>
                                        <li><a href="index2.html">Home Two</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                        <li><a href="single-product.html">Shop Details</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="wishlist.html">Wishlist Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Page</a></li>
                                        <li><a href="newsletter.html">Newsletter Page</a></li>
                                        <li><a href="login-register.html">Login Register Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="javascript:void(0);">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-right-sidebar.html">News Right Sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">News Left Sidebar</a></li>
                                        <li><a href="blog-fullwidth.html">News Full Width</a></li>
                                        <li><a href="blog-details.html">News Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="header-cogs">
                            <a class="search search-toggles" href="javascript:void(0);"><i class="twi-search"></i></a>
                            <a class="select-country" href="javascript:void(0);"><img src="front/images/flag.png" alt=""/>Eng</a>
                            <a class="select-currency" href="javascript:void(0);"><i class="twi-dollar-sign"></i>Usd</a>
                            <a class="user-login" href="javascript:void(0);"><i class="twi-user-circle"></i><span>Account</span></a>
                            <a class="carts" href="javascript:void(0);"><span>4</span><img src="front/images/cart.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Popup Search -->
        <section class="popup-search-sec">
            <div class="popup-search-overlay"></div>
            <div class="overlay-popup">
                <a href="javascript:void(0);" class="search-closer">x</a><!-- Close Popup Btn -->
                <div class="middle-search">
                    <div class="popup-search-form"><!-- Search Form Start -->
                        <form method="get" action="#">
                            <input type="search" name="s" id="s" placeholder="Search...">
                            <button type="submit"><i class="twi-search"></i></button>
                        </form><!-- Search Form End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Popup Search -->

@yield('content')

        <!-- Footer Start -->
        <footer class="footer-01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <aside class="widget about-widget">
                            <div class="foo-logo">
                                <a href="index.html"><img src="front/images/logo.png" alt=""/></a>
                            </div>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus er sit voluptatem accusantium dolore.ea commo
                                do consequat. Duis aute irure dolor in re
                                prehenderit in.
                            </p>
                            <div class="ab-social">
                                <a href="#"><i class="twi-facebook"></i></a>
                                <a href="#"><i class="twi-twitter"></i></a>
                                <a href="#"><i class="twi-instagram"></i></a>
                                <a href="#"><i class="twi-linkedin"></i></a>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-custome-1">
                        <aside class="widget">
                            <h3 class="widget-title">Useful Links</h3>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Return Policy</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-4 col-custome-2">
                        <aside class="widget">
                            <h3 class="widget-title">Account</h3>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Log in</a></li>
                                <li><a href="#">Sign Up</a></li>
                                <li><a href="#">Purchases</a></li>
                                <li><a href="#">Shipping Address</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-2 col-md-6 col-custome-3">
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">Contact & Address</h3>
                            <p>
                                123 Street, Gandy Street, Syracuse
                                New York - 13221.
                            </p>
                            <p>
                                Phone: +1 315-234-3812
                                Email: info@goru.com
                            </p>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-6 col-custome-4">
                        <aside class="widget">
                            <h3 class="widget-title">Subscribe</h3>
                            <form class="subscribe-form" action="#" method="post">
                                <input type="email" name="email" placeholder="admin@mail.com">
                                <button type="submit">Subscribe<i class="twi-long-arrow-alt-right"></i></button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Ened -->

        <!-- Coryight Start -->
        <section class="copyright-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <ul class="menu-link">
                           <li><a href="#">Privacy Policy</a></li> |
                           <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="copys-text"><i class="twi-copyright"></i>Copyright WpSmasher 2020 | All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Coryight End -->

        <!-- Back To Top -->
        <a href="#" id="backtotop"><i class="twi-angle-double-up2"></i></a>

        <!-- Include All JS -->
        <script src="{{asset('front/js/jquery.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/js/modernizr.custom.js')}}"></script>
        <script src="{{asset('front/js/jquery.appear.js')}}"></script>
        <script src="{{asset('front/js/jquery-ui.js')}}"></script>
        <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.shuffle.min.js')}}"></script>
        <script src="{{asset('front/js/lightcase.js')}}"></script>
        <script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('front/js/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('front/js/tweenmax.min.js')}}"></script>

        <script src="{{asset('front/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.themepunch.revolution.min.js')}}"></script>

        <!-- Rev slider Add on Start -->
        <script src="{{asset('front/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('front/js/extensions/revolution.extension.video.min.js')}}"></script>
        <!-- Rev slider Add on End -->

        <script src="{{asset('front/js/theme.js')}}"></script>
        @include('sweetalert::alert')
    </body>
</html>
