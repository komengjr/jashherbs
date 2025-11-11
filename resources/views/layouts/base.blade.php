<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="JASH HERBS ORGANIC">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logox.png" type="image/x-icon" />
    <title>JASH HERBS ORGANIC | OFFICIAL</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/elegant-icons.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/nice-select.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/jquery-ui.min.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/slicknav.min.css', []) }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/style.css', []) }}" type="text/css">
    <meta name="google-adsense-account" content="ca-pub-4154628728879232">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4154628728879232"
     crossorigin="anonymous"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            {{-- <div class="header__cart__price">item: <span>$150.00</span></div> --}}
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    {{-- <li><a href="#">Spanis</a></li> --}}
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ url('login', []) }}"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="{{ url('/', []) }}">Home</a></li>
                <li><a href="{{ url('listproduct', []) }}">Shop</a></li>

                <li><a href="{{ url('blog', []) }}">Blog</a></li>
                <li><a href="{{ url('contact', []) }}">About Us</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://www.facebook.com/profile.php?id=100086603481742&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/jashherbsorganic?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/jash-herbs-5614b4244"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>jashherbs@gmail.com</li>
                <li>Free Shipping for all Order</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> jashherbs@gmail.com</li>
                                <li>Free Shipping for all Order </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/profile.php?id=100086603481742&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
                                <a href="https://instagram.com/jashherbsorganic?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/jash-herbs-5614b4244"><i class="fa fa-linkedin"></i></a>
                                {{-- <a href="#"><i class="fa fa-pinterest-p"></i></a> --}}
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    {{-- <li><a href="#">Spanis</a></li> --}}
                                    <li><a href="#"></a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{ url('login', []) }}"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/', []) }}"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{ url('/', []) }}">Home</a></li>
                            <li><a href="{{ url('listproduct', []) }}">Shop</a></li>

                            <li><a href="{{ url('blog', []) }}">Blog</a></li>
                            <li><a href="{{ url('contact', []) }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        {{-- <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div> --}}
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')


    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Jalan Budi Utomo Komplek Surya kencana 2 Blok B No. 22</li>
                            <li>Phone: +62 887-4363-15126</li>
                            <li>Email: jashherbs@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="{{ url('/', []) }}">Home Dashboard</a></li>
                            <li><a href="{{ url('listproduct', []) }}">Product List</a></li>
                            <li><a href="{{ url('blog', []) }}">Blog</a></li>
                            <li><a href="{{ url('contact', []) }}">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="https://www.facebook.com/profile.php?id=100086603481742&mibextid=LQQJ4d"><i class="fa fa-facebook"></i></a>
                            <a href="https://instagram.com/jashherbsorganic?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/jash-herbs-5614b4244"><i class="fa fa-linkedin"></i></a>
                            {{-- <a href="#"><i class="fa fa-pinterest"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by <a href="{{ url('/', []) }}" target="_blank">Al Code Development</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ url('js/jquery-3.3.1.min.js', []) }}"></script>
    <script src="{{ url('js/bootstrap.min.js', []) }}"></script>
    <script src="{{ url('js/jquery.nice-select.min.js', []) }}"></script>
    <script src="{{ url('js/jquery-ui.min.js', []) }}"></script>
    <script src="{{ url('js/jquery.slicknav.js', []) }}"></script>
    <script src="{{ url('js/mixitup.min.js', []) }}"></script>
    <script src="{{ url('js/owl.carousel.min.js', []) }}"></script>
    <script src="{{ url('js/main.js', []) }}"></script>



</body>

</html>
