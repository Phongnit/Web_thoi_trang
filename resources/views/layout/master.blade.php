<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.cwsthemes.com/liami/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 01:23:04 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="{{asset('fontend/images/favicon.png')}}" sizes="32x32" type="image/png')}}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('fontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/uicons-regular-rounded.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/jquery.bootstrap-touchspin.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/css/responsive.css')}}">
</head>

<body>
    <main>
        <header class="style3 w-100">
            <div class="topbar position-relative w-100">
                <div class="container">
                    <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="topbar-left d-flex flex-wrap align-items-center">
                            <div class="social-links d-flex flex-wrap">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                            <ul class="links-list d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <li><a href="{{url('/about')}}" title="">About</a></li>
                                <li><a href="{{url('/contact')}}" title="">Contact</a></li>
                            </ul>
                        </div><!-- Top Left -->
                        <div class="topbar-right">
                            <ul class="links-list d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <li><a href="faq.blade.php" title="">Help</a></li>
                                <li><a href="{{url('/signup')}}" title="">Join Us</a></li>
                                <li><a href="{{url('/login')}}" title="">Sign In</a></li>
                            </ul>
                        </div><!-- Top Right -->
                    </div><!-- Topbar Inner -->
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-wrap position-relative w-100">
                <div class="container">
                    <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">
                            <span class="sidepanel-trigger"><i class="fi fi-rr-align-justify"></i></span>
                            <div class="logo">
                                <h1 class="mb-0"><a href="{{url('/')}}" title="Home"><img src="{{asset('fontend/images/logo.svg')}}" alt="Logo"></a></h1>
                            </div><!-- Logo -->
                        </div>
                        <div class="logo-menu-inner-mid">
                            <nav class="colored-hover">
                                <ul>
                                    <li class="menu-item-has-children megamenu-item"><a href="javascript:void(0);" title="">Layouts</a>
                                        <div class="megamenu-wrap position-absolute w-100">
                                            <div class="container">
                                                <div class="megamenu-inner position-relative w-100">
                                                    <div class="row mrg30">
                                                        <div class="col-md-7 col-sm-12 col-lg-7">
                                                            <div class="megamenu-box-wrap position-relative w-100">
                                                                <div class="row mrg30">
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <h4>Home Style</h4>
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="{{url('/')}}" title="">Home Style 1</a></li>
                                                                                <li><a href="{{url('/')}}" title="">Home Style 2</a></li>
                                                                                <li><a href="{{url('/')}}" title="">Home Style 3 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <h4>Blog Style</h4>
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 1 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 2</a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 3 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 4</a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 5</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <h4>Product Style</h4>
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="{{url('/shop/product')}}" title="">Product Style 1</a></li>
                                                                                <li><a href="{{url('/shop/product')}}" title="">Product Style 2</a></li>
                                                                                <li><a href="{{url('/shop/product')}}" title="">Product Style 3</a></li>
                                                                                <li><a href="{{url('/shop/product')}}" title="">Product Style 4 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="{{url('/shop/product')}}" title="">Product Style 5</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <h4>Header Style</h4>
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="{{url('/')}}" title="">Header Style 1</a></li>
                                                                                <li><a href="{{url('/')}}" title="">Header Style 2 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="{{url('/')}}" title="">Header Style 3</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- Megamenu Box Wrap -->
                                                        </div>
                                                        <div class="col-md-5 col-sm-12 col-lg-5">
                                                            <div class="megamenu-cards-wrap position-relative w-100">
                                                                <div class="row mrg20">
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                            <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-1.jpg')}}" alt="Megamenu Post Image 1"></div>
                                                                            <div class="post-info2 position-absolute">
                                                                                <h6 class="mb-0"><a href="javascript:void(0);" title="">Special Offer</a></h6>
                                                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                            <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-2.jpg')}}" alt="Megamenu Post Image 2"></div>
                                                                            <div class="post-info2 position-absolute">
                                                                                <h6 class="mb-0"><a href="javascript:void(0);" title="">New Product</a></h6>
                                                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                            <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-3.jpg')}}" alt="Megamenu Post Image 3"></div>
                                                                            <div class="post-info2 position-absolute">
                                                                                <h6 class="mb-0"><a href="javascript:void(0);" title="">Featured Product</a></h6>
                                                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                        <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                            <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-4.jpg')}}" alt="Megamenu Post Image 4"></div>
                                                                            <div class="post-info2 position-absolute">
                                                                                <h6 class="mb-0"><a href="javascript:void(0);" title="">Coming Soon</a></h6>
                                                                                <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- Megamenu Cards Wrap -->
                                                        </div>
                                                    </div>
                                                </div><!-- Megamenu Inner -->
                                            </div>
                                        </div><!-- Megamenu Wrap -->
                                    </li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                                        <ul class="children position-absolute list-unstyled mb-0 w-100">
                                            <li><a href="{{url('/cart')}}" title="">Cart</a></li>
                                            <li><a href="{{url('/checkout')}}" title="">Checkout</a></li>
                                            <li><a href="{{url('/wishlist')}}" title="">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Product</a>
                                        <ul class="children position-absolute list-unstyled mb-0 w-100">
                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 1</a></li>
                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 2</a></li>
                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 3</a></li>
                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 4</a></li>
                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                                        <ul class="children position-absolute list-unstyled mb-0 w-100">
                                            <li><a href="{{url('/about')}}" title="">About</a></li>
                                            <li><a href="faq.blade.php" title="">FAQ</a></li>
                                            <li><a href="{{url('/login')}}" title="">Login</a></li>
                                            <li><a href="{{url('/signup')}}" title="">Sign Up</a></li>
                                            <li><a href="forgot-password.blade.php" title="">Forgot Password</a></li>
                                            <li><a href="content-elements.blade.php" title="">Content Elements</a></li>
                                            <li><a href="{{url('/contact')}}" title="">Contact Style 1</a></li>
                                            <li><a href="{{url('/contact')}}" title="">Contact Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children megamenu-item"><a href="javascript:void(0);" title="">Blog</a>
                                        <div class="megamenu-wrap position-absolute w-100">
                                            <div class="container">
                                                <div class="megamenu-inner position-relative w-100">
                                                    <div class="row mrg30">
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div class="megamenu-box-wrap position-relative w-100">
                                                                <div class="row mrg30">
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 1 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 2</a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 3 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 4</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="{{url('/blog')}}" title="">Blog Style 5</a></li>
                                                                                <li><a href="{{url('/blog-detail')}}" title="">Blog Single 1</a></li>
                                                                                <li><a href="{{url('/blog-detail')}}" title="">Blog Single 2</a></li>
                                                                                <li><a href="audio.blade.php" title="">Audio</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="megamenu-item w-100">
                                                                            <ul class="list-unstyled mb-0 w-100">
                                                                                <li><a href="video.blade.php" title="">Video <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                                <li><a href="quote.blade.php" title="">Quote</a></li>
                                                                                <li><a href="gallery.blade.php" title="">Gallery</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- Megamenu Box Wrap -->
                                                        </div>
                                                    </div>
                                                </div><!-- Megamenu Inner -->
                                            </div>
                                        </div><!-- Megamenu Wrap -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                            <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <li>
                                    <a class="search-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-search"></i></a>
                                </li>
                                <li>
                                    <a class="whishlist-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-heart"></i></a>
                                    <div class="mini-cart-dropdown position-absolute w-100">
                                        <div class="mini-cart-dropdown-inner w-100">
                                            <div class="mini-cart-head d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <h4>Wishlist</h4>
                                                <a class="mini-cart-close d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                            </div>
                                            <ul class="mini-cart-list mb-0 list-unstyled position-relative w-100">
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-1.jpg')}}" alt="Mini Cart Image 1"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-2.jpg')}}" alt="Mini Cart Image 2"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-3.jpg')}}" alt="Mini Cart Image 3"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-4.jpg')}}" alt="Mini Cart Image 4"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="mini-cart-bottom w-100">
                                                <div class="mini-cart-total d-flex flex-wrap align-items-center justify-content-between">
                                                    <span>Subtotal:</span>
                                                    <span class="price">$524.00</span>
                                                </div>
                                                <div class="btns-group d-flex flex-wrap align-items-center justify-content-between">
                                                    <a class="theme-btn bg-color1 brd-btn" href="{{url('/cart')}}" title="">View Cart<span></span><span></span><span></span><span></span></a>
                                                    <a class="theme-btn bg-color1" href="{{url('/checkout')}}" title="">Checkout<span></span><span></span><span></span><span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Logo Menu Wrap -->
        </header><!-- Header -->
        <div class="sticky-header w-100">
            <div class="container">
                <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">
                        <div class="logo">
                            <h1 class="mb-0"><a href="{{url('/')}}" title="Home"><img src="{{asset('fontend/images/logo.svg" alt="Logo')}}"></a></h1>
                        </div><!-- Logo -->
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                        <nav>
                            <ul>
                                <li class="menu-item-has-children megamenu-item"><a href="javascript:void(0);" title="">Layouts</a>
                                    <div class="megamenu-wrap position-absolute w-100">
                                        <div class="container">
                                            <div class="megamenu-inner position-relative w-100">
                                                <div class="row mrg30">
                                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                                        <div class="megamenu-box-wrap position-relative w-100">
                                                            <div class="row mrg30">
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Home Style</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{url('/')}}" title="">Home Style 1</a></li>
                                                                            <li><a href="{{url('/')}}" title="">Home Style 2</a></li>
                                                                            <li><a href="{{url('/')}}" title="">Home Style 3 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Blog Style</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 1 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 2</a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 3 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 4</a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Product Style</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 1</a></li>
                                                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 2</a></li>
                                                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 3</a></li>
                                                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 4 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="{{url('/shop/product')}}" title="">Product Style 5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <h4>Header Style</h4>
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{url('/')}}" title="">Header Style 1</a></li>
                                                                            <li><a href="{{url('/')}}" title="">Header Style 2 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="{{url('/')}}" title="">Header Style 3</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Megamenu Box Wrap -->
                                                    </div>
                                                    <div class="col-md-5 col-sm-12 col-lg-5">
                                                        <div class="megamenu-cards-wrap position-relative w-100">
                                                            <div class="row mrg20">
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                        <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-1.jpg')}}" alt="Megamenu Post Image 1"></div>
                                                                        <div class="post-info2 position-absolute">
                                                                            <h6 class="mb-0"><a href="javascript:void(0);" title="">Special Offer</a></h6>
                                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                        <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-2.jpg')}}" alt="Megamenu Post Image 2"></div>
                                                                        <div class="post-info2 position-absolute">
                                                                            <h6 class="mb-0"><a href="javascript:void(0);" title="">New Product</a></h6>
                                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                        <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-3.jpg')}}" alt="Megamenu Post Image 3"></div>
                                                                        <div class="post-info2 position-absolute">
                                                                            <h6 class="mb-0"><a href="javascript:void(0);" title="">Featured Product</a></h6>
                                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                                    <div class="post-box2 overflow-hidden position-relative text-center w-100">
                                                                        <div class="post-img2 overflow-hidden w-100"><img class="img-fluid w-100" src="{{asset('fontend/images/resources/megamenupost-img1-4.jpg')}}" alt="Megamenu Post Image 4"></div>
                                                                        <div class="post-info2 position-absolute">
                                                                            <h6 class="mb-0"><a href="javascript:void(0);" title="">Coming Soon</a></h6>
                                                                            <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Megamenu Cards Wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- Megamenu Inner -->
                                        </div>
                                    </div><!-- Megamenu Wrap -->
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                                    <ul class="children position-absolute list-unstyled mb-0 w-100">
                                        <li><a href="{{url('/cart')}}" title="">Cart</a></li>
                                        <li><a href="{{url('/checkout')}}" title="">Checkout</a></li>
                                        <li><a href="{{url('/wishlist')}}" title="">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Product</a>
                                    <ul class="children position-absolute list-unstyled mb-0 w-100">
                                        <li><a href="{{url('/shop/product')}}" title="">Product Style 1</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Product Style 2</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Product Style 3</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Product Style 4</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Product Style 5</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                                    <ul class="children position-absolute list-unstyled mb-0 w-100">
                                        <li><a href="{{url('/about')}}" title="">About</a></li>
                                        <li><a href="faq.blade.php" title="">FAQ</a></li>
                                        <li><a href="{{url('/login')}}" title="">Login</a></li>
                                        <li><a href="{{url('/signup')}}" title="">Sign Up</a></li>
                                        <li><a href="forgot-password.blade.php" title="">Forgot Password</a></li>
                                        <li><a href="content-elements.blade.php" title="">Content Elements</a></li>
                                        <li><a href="{{url('/contact')}}" title="">Contact Style 1</a></li>
                                        <li><a href="{{url('/contact')}}" title="">Contact Style 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children megamenu-item"><a href="javascript:void(0);" title="">Blog</a>
                                    <div class="megamenu-wrap position-absolute w-100">
                                        <div class="container">
                                            <div class="megamenu-inner position-relative w-100">
                                                <div class="row mrg30">
                                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                                        <div class="megamenu-box-wrap position-relative w-100">
                                                            <div class="row mrg30">
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 1 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 2</a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 3 <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 4</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="{{url('/blog')}}" title="">Blog Style 5</a></li>
                                                                            <li><a href="{{url('/blog-detail')}}" title="">Blog Single 1</a></li>
                                                                            <li><a href="{{url('/blog-detail')}}" title="">Blog Single 2</a></li>
                                                                            <li><a href="audio.blade.php" title="">Audio</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="megamenu-item w-100">
                                                                        <ul class="list-unstyled mb-0 w-100">
                                                                            <li><a href="video.blade.php" title="">Video <span class="badge bg-color4 rounded-pill">New</span></a></li>
                                                                            <li><a href="quote.blade.php" title="">Quote</a></li>
                                                                            <li><a href="gallery.blade.php" title="">Gallery</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Megamenu Box Wrap -->
                                                    </div>
                                                </div>
                                            </div><!-- Megamenu Inner -->
                                        </div>
                                    </div><!-- Megamenu Wrap -->
                                </li>
                            </ul>
                        </nav>
                        <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                            <li>
                                <a class="search-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-search"></i></a>
                            </li>
                            <li>
                                <a class="whishlist-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-heart"></i></a>
                                <div class="mini-cart-dropdown position-absolute w-100">
                                    <div class="mini-cart-dropdown-inner w-100">
                                        <div class="mini-cart-head d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <h4>Wishlist</h4>
                                            <a class="mini-cart-close d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                        </div>
                                        <ul class="mini-cart-list mb-0 list-unstyled position-relative w-100">
                                            <li>
                                                <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                    <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                    <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-1.jpg')}}" alt="Mini Cart Image 1"></a></div>
                                                    <div class="mini-cart-info">
                                                        <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                        <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                            <span class="price">$275.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                    <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                    <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-2.jpg')}}" alt="Mini Cart Image 2"></a></div>
                                                    <div class="mini-cart-info">
                                                        <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                        <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                            <span class="price">$275.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                    <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                    <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-3.jpg')}}" alt="Mini Cart Image 3"></a></div>
                                                    <div class="mini-cart-info">
                                                        <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                        <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                            <span class="price">$275.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                    <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                    <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-4.jpg')}}" alt="Mini Cart Image 4"></a></div>
                                                    <div class="mini-cart-info">
                                                        <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                        <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                            <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                            <span class="price">$275.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mini-cart-bottom w-100">
                                            <div class="mini-cart-total d-flex flex-wrap align-items-center justify-content-between">
                                                <span>Subtotal:</span>
                                                <span class="price">$524.00</span>
                                            </div>
                                            <div class="btns-group d-flex flex-wrap align-items-center justify-content-between">
                                                <a class="theme-btn bg-color1 brd-btn" href="{{url('/cart')}}" title="">View Cart<span></span><span></span><span></span><span></span></a>
                                                <a class="theme-btn bg-color1" href="{{url('/checkout')}}" title="">Checkout<span></span><span></span><span></span><span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Sticky Header -->
        <div class="mini-cart-wrap position-fixed w-100">
            <div class="mini-cart-dropdown w-100">
                <div class="mini-cart-dropdown-inner w-100">
                    <div class="mini-cart-head d-flex flex-wrap align-items-center justify-content-between w-100">
                        <h4>Cart review</h4>
                        <a class="mini-cart-close d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                    </div>
                    <ul class="mini-cart-list mb-0 list-unstyled position-relative w-100">
                        <li>
                            <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-1.jpg')}}" alt="Mini Cart Image 1"></a></div>
                                <div class="mini-cart-info">
                                    <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                    <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                        <span class="price">$275.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-2.jpg')}}" alt="Mini Cart Image 2"></a></div>
                                <div class="mini-cart-info">
                                    <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                    <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                        <span class="price">$275.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-3.jpg')}}" alt="Mini Cart Image 3"></a></div>
                                <div class="mini-cart-info">
                                    <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                    <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                        <span class="price">$275.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-4.jpg')}}" alt="Mini Cart Image 4"></a></div>
                                <div class="mini-cart-info">
                                    <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                    <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                        <span class="price">$275.00</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="mini-cart-bottom w-100">
                        <div class="mini-cart-total d-flex flex-wrap align-items-center justify-content-between">
                            <span>Subtotal:</span>
                            <span class="price">$524.00</span>
                        </div>
                        <div class="btns-group d-flex flex-wrap align-items-center justify-content-between">
                            <a class="theme-btn bg-color1 brd-btn" href="{{url('/cart')}}" title="">View Cart<span></span><span></span><span></span><span></span></a>
                            <a class="theme-btn bg-color1" href="{{url('/checkout')}}" title="">Checkout<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Mini Cart Wrap -->
        <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
            <span class="search-close-btn d-inline-flex flex-wrap justify-content-center align-items-center"><i class="fi fi-rr-cross-small"></i></span>
            <form>
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fi fi-rr-search"></i></button>
            </form>
        </div><!-- Header Search -->
        <div class="responsive-header position-relative w-100">
            <div class="responsive-topbar w-100">
                <div class="container">
                    <div class="responsive-topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo">
                            <h1 class="mb-0"><a href="{{url('/')}}" title="Home"><img src="{{asset('fontend/images/logo.svg" alt="Logo')}}"></a></h1>
                        </div><!-- Logo -->
                        <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                            <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <li>
                                    <a class="whishlist-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-heart"></i></a>
                                    <div class="mini-cart-dropdown position-absolute w-100">
                                        <div class="mini-cart-dropdown-inner w-100">
                                            <div class="mini-cart-head d-flex flex-wrap align-items-center justify-content-between w-100">
                                                <h4>Wishlist</h4>
                                                <a class="mini-cart-close d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                            </div>
                                            <ul class="mini-cart-list mb-0 list-unstyled position-relative w-100">
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-1.jpg')}}" alt="Mini Cart Image 1"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-2.jpg')}}" alt="Mini Cart Image 2"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-3.jpg')}}" alt="Mini Cart Image 3"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mini-cart-item d-flex flex-wrap position-relative w-100">
                                                        <a class="remove-cart position-absolute rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                                        <div class="mini-cart-img overflow-hidden"><a href="{{url('/shop/product')}}" title=""><img class="img-fluid w-100" src="{{asset('fontend/images/resources/mini-cart-img1-4.jpg')}}" alt="Mini Cart Image 4"></a></div>
                                                        <div class="mini-cart-info">
                                                            <h6 class="mb-0"><a href="{{url('/shop/product')}}" title="">Commodo Blown Lamp</a></h6>
                                                            <div class="mini-cart-btm d-flex flex-wrap align-items-center justify-content-between">
                                                                <div class="product-quanty"><input type="number" class="qty" value="01"></div>
                                                                <span class="price">$275.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="mini-cart-bottom w-100">
                                                <div class="mini-cart-total d-flex flex-wrap align-items-center justify-content-between">
                                                    <span>Subtotal:</span>
                                                    <span class="price">$524.00</span>
                                                </div>
                                                <div class="btns-group d-flex flex-wrap align-items-center justify-content-between">
                                                    <a class="theme-btn bg-color1 brd-btn" href="{{url('/cart')}}" title="">View Cart<span></span><span></span><span></span><span></span></a>
                                                    <a class="theme-btn bg-color1" href="{{url('/checkout')}}" title="">Checkout<span></span><span></span><span></span><span></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="cart-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-shopping-bag"></i></a>
                                </li>
                                <li>
                                    <a class="responsive-menu-trigger d-inline-block" href="javascript:void(0);" title=""><i class="fi fi-rr-align-justify"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Responsive Topbar -->
        </div><!-- Responsive Header -->
        <div class="responsive-menu w-100">
            <a class="responsive-menu-close position-absolute" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
            <ul class="mb-0 list-unstyled w-100">
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Home</a>
                    <ul class="children mb-0 list-unstyled w-100">
                        <li><a href="{{url('/')}}" title="">Home Style 1</a></li>
                        <li><a href="{{url('/')}}" title="">Home Style 2</a></li>
                        <li><a href="{{url('/')}}" title="">Home Style 3</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Shop</a>
                    <ul class="children mb-0 list-unstyled w-100">
                        <li><a href="{{url('/shop/product')}}" title="">Product Style 1</a></li>
                        <li><a href="{{url('/shop/product')}}" title="">Product Style 2</a></li>
                        <li><a href="{{url('/shop/product')}}" title="">Product Style 3</a></li>
                        <li><a href="{{url('/shop/product')}}" title="">Product Style 4</a></li>
                        <li><a href="{{url('/shop/product')}}" title="">Product Style 5</a></li>
                        <li><a href="{{url('/cart')}}" title="">Cart</a></li>
                        <li><a href="{{url('/checkout')}}" title="">Checkout</a></li>
                        <li><a href="{{url('/wishlist')}}" title="">Wishlist</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Blog</a>
                    <ul class="children mb-0 list-unstyled w-100">
                        <li><a href="{{url('/blog')}}" title="">Blog Style 1</a></li>
                        <li><a href="{{url('/blog')}}" title="">Blog Style 2</a></li>
                        <li><a href="{{url('/blog')}}" title="">Blog Style 3</a></li>
                        <li><a href="{{url('/blog')}}" title="">Blog Style 4</a></li>
                        <li><a href="{{url('/blog')}}" title="">Blog Style 5</a></li>
                        <li><a href="{{url('/blog-detail')}}" title="">Blog Single 1</a></li>
                        <li><a href="{{url('/blog-detail')}}" title="">Blog Single 2</a></li>
                        <li><a href="audio.blade.php" title="">Audio</a></li>
                        <li><a href="video.blade.php" title="">Video</a></li>
                        <li><a href="quote.blade.php" title="">Quote</a></li>
                        <li><a href="gallery.blade.php" title="">Gallery</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Pages</a>
                    <ul class="children mb-0 list-unstyled w-100">
                        <li><a href="{{url('/about')}}" title="">About</a></li>
                        <li><a href="faq.blade.php" title="">FAQ</a></li>
                        <li><a href="{{url('/login')}}" title="">Login</a></li>
                        <li><a href="{{url('/signup')}}" title="">Sign Up</a></li>
                        <li><a href="forgot-password.blade.php" title="">Forgot Password</a></li>
                        <li><a href="content-elements.blade.php" title="">Content Elements</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Contact</a>
                    <ul class="children mb-0 list-unstyled w-100">
                        <li><a href="{{url('/contact')}}" title="">Contact Style 1</a></li>
                        <li><a href="{{url('/contact')}}" title="">Contact Style 2</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- Responsive Menu -->

        <!-- main -->
        @yield('main')
        <!-- end-main -->

        <footer>
            <div class="w-100 position-relative">
                <div class="container">
                    <hr class="mt-0 mb-70">
                    <div class="footer-data position-relative w-100">
                        <div class="row mrg30">
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget w-100">
                                    <div class="logo">
                                        <h1 class="mb-0"><a href="{{url('/')}}" title="Home"><img class="img-fluid" src="{{asset('fontend/images/logo.svg')}}" alt="Logo"></a></h1>
                                    </div><!-- Logo -->
                                    <div class="social-links d-flex flex-wrap">
                                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a href="https://www.pinterest.com/" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget w-100">
                                    <h5>Shop</h5>
                                    <ul>
                                        <li><a href="{{url('/shop/product')}}" title="">Long Fit T-shirt</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Short Fit T-shirt</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Long Fit Pant</a></li>
                                        <li><a href="{{url('/shop/product')}}" title="">Short Fit Pant</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget w-100">
                                    <h5>Blog</h5>
                                    <ul>
                                        <li><a href="{{url('/blog-detail')}}" title="">Standard</a></li>
                                        <li><a href="audio.blade.php" title="">Audio</a></li>
                                        <li><a href="video.blade.php" title="">Video</a></li>
                                        <li><a href="quote.blade.php" title="">Quote</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-lg-3">
                                <div class="widget w-100">
                                    <h5>Company</h5>
                                    <ul>
                                        <li><a href="{{url('/about')}}" title="">About</a></li>
                                        <li><a href="content-elements.blade.php" title="">Content Elements</a></li>
                                        <li><a href="faq.blade.php" title="">Help</a></li>
                                        <li><a href="{{url('/contact')}}" title="">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Data -->
                    <hr class="mt-70 mb-0">
                    <div class="bottom-bar d-flex flex-wrap align-items-center justify-content-between w-100">
                        <ul class="bottom-links d-flex flex-wrap align-items-center list-unstyled mb-0">
                            <li><a href="javascript:void(0);" title="">Privacy Policy</a></li>
                            <li><a href="javascript:void(0);" title="">Terms of Service</a></li>
                            <li>&copy; <a href="{{url('/')}}" title="">Liami</a> All rights reserved.</li>
                        </ul><!-- Bottom Links -->
                        <div class="payment-opt d-flex flex-wrap align-items-center">
                            <span>Accept for</span>
                            <img class="img-fluid" src="{{asset('fontend/images/payment-opt-img.png')}}" alt="Payment Options Image">
                        </div><!-- Payment Options -->
                    </div><!-- Bottom Bar -->
                </div>
            </div>
        </footer><!-- Footer -->
    </main><!-- Main Wrapper -->

    <script src="{{asset('fontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('fontend/js/aos.min.js')}}"></script>
    <script src="{{asset('fontend/js/counterup.min.js')}}"></script>
    <script src="{{asset('fontend/js/particles.min.js')}}"></script>
    <script src="{{asset('fontend/js/tilt.jquery.min.js')}}"></script>
    <script src="{{asset('fontend/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('fontend/js/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('fontend/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('fontend/js/slick.min.js')}}"></script>
    <script src="{{asset('fontend/js/custom-scripts.js')}}"></script>
</body>

<!-- Mirrored from html.cwsthemes.com/liami/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2022 01:23:28 GMT -->

</html>