@extends('layout.master')
@section('title')
	Home
@endsection
@section('main')
    <section>
    <div class="w-100 position-relative">
        <div class="slider-area-wrap v2 position-relative w-100">
            <div class="slider-caro2 nav-style1">
                <div class="slider-item v2 overflow-hidden position-relative d-block w-100">
                    <picture class="img-fluid d-block w-100">
                        <source media="(max-width:850px)" srcset="{{asset('fontend/images/resources/slide-mobile-img3-1.jpg')}}">
                        <img class="img-fluid d-block w-100" src="{{asset('fontend/images/resources/slide-img3-1.jpg')}}"
                            alt="Slide Image 1">
                    </picture>
                    <div class="slider-cap v2 text-center text-white position-absolute">
                        <h1 class="mb-0 animated fadeInUp">Ultimate Shoes For <br> Everything</h1>
                        <p class="mb-0 animated fadeInUp">Trying something new is never pretty. But it is pretty awesome.
                            <br> Because no matter how many times.</p>
                        <a class="theme-btn bg-color1 animated fadeInUp" href="javascript:void(0);" title="">Preorder
                            Running Sneakers Now<span></span><span></span><span></span><span></span></a>
                    </div>
                </div>
                <div class="slider-item v2 overflow-hidden position-relative d-block w-100">
                    <picture class="img-fluid d-block w-100">
                        <source media="(max-width:850px)" srcset="{{asset('fontend/images/resources/slide-mobile-img3-2.jpg')}}">
                        <img class="img-fluid d-block w-100" src="{{asset('fontend/images/resources/slide-img3-2.jpg')}}"
                            alt="Slide Image 2">
                    </picture>
                    <div class="slider-cap v2 text-center text-white position-absolute">
                        <h1 class="mb-0 hidden">Ultimate Shoes For <br> Everything</h1>
                        <p class="mb-0 hidden">Trying something new is never pretty. But it is pretty awesome. <br> Because
                            no matter how many times.</p>
                        <a class="theme-btn bg-color1 hidden" href="javascript:void(0);" title="">Preorder Running
                            Sneakers Now<span></span><span></span><span></span><span></span></a>
                    </div>
                </div>
            </div>
        </div><!-- Slider Area Wrap -->
    </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="sales-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-7 col-sm-12 col-lg-7">
                            <div class="sale-box d-flex flex-wrap align-items-center justify-content-center text-white position-relative text-center w-100"
                                style="background-image: url({{asset('fontend/images/resources/sale-banner-img1.jpg')}});">
                                <div class="sale-inner d-inline-block">
                                    <h2 class="mb-0">Sneakers Day's</h2>
                                    <span class="d-inline-block">30% off all order</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-lg-5">
                            <div
                                class="sale-box bg-color5 d-flex flex-wrap align-items-center justify-content-center position-relative text-center w-100">
                                <div class="sale-inner d-inline-block">
                                    <h4 class="mb-0">Hello Summer 2021</h4>
                                    <h2 class="mb-0">Sale 50% off</h2>
                                    <p class="mb-0">“This is the best website I have ordered something from. I highly
                                        recommend.”</p>
                                    <a class="theme-btn bg-color1 animated fadeInUp" href="product-detail5.blade.php"
                                        title="">Shop Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Sales Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="fixed-bg" style="background-image: url({{asset('fontend/images/bg-img2.jpg')}});"></div>
            <div class="container">
                <div class="sec-title mb-0 text-center position-relative w-100">
                    <h1 class="mb-0">Running & <span class="text-color4">Streetwear Shoes</span></h1>
                    <p class="mb-0">Running shoes that combine performance and style for the fashion-conscious runner.</p>
                    <span class="d-block mt-3"><svg width="54" height="20" viewBox="0 0 54 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M6.81149 0.848653C3.35125 4.91227 0.0335383 9.95152 0.000270098 13.7182C-0.012687 15.1354 0.43976 16.3726 1.525 17.3097C3.08685 18.6594 4.80769 19.1353 6.52013 19.1381C9.02259 19.1416 11.5075 18.132 13.4532 17.3535C16.73 16.0431 52.9513 0.313561 52.9513 0.313561C53.3008 0.138465 53.2353 -0.0797028 52.7979 0.0292066C52.6214 0.0733307 13.3653 10.7118 13.3653 10.7118C12.6217 10.9221 11.8534 11.0321 11.0807 11.0389C8.06377 11.0567 5.37921 9.38211 5.40092 5.85323C5.40932 4.47243 5.832 2.80727 6.81149 0.848653Z"
                                fill="black" />
                        </svg></span>
                </div><!-- Section Title -->
                <div class="rn-shw-wrap position-relative w-100">
                    <div class="rn-shw-img position-relative">
                        <img class="img-fluid" src="{{asset('fontend/images/resources/streetwear-shoe-img.png')}}"
                            alt="Streetwear Shoe Image">
                        <div class="rn-shw-box-wrap rn-shw-box-1 position-absolute">
                            <span class="ripple-anim rounded-circle position-relative"><i></i></span>
                            <div class="rn-shw-box position-absolute">
                                <h4 class="mb-0">Style: BQ9241-001</h4>
                                <p class="mb-0">Sriracha la croix poutine, af try-hard readymade chambray pinterest vape
                                    glossier mlkshk you probably haven’t heard of them cray. Franzen 8-bit mixtape master
                                    cleanse swag trust fund.</p>
                            </div>
                        </div>
                        <div class="rn-shw-box-wrap rn-shw-box-2 position-absolute">
                            <span class="ripple-anim rounded-circle position-relative"><i></i></span>
                            <div class="rn-shw-box position-absolute">
                                <h4 class="mb-0">Style: BQ9241-002</h4>
                                <p class="mb-0">Sriracha la croix poutine, af try-hard readymade chambray pinterest vape
                                    glossier mlkshk you probably haven’t heard of them cray. Franzen 8-bit mixtape master
                                    cleanse swag trust fund.</p>
                            </div>
                        </div>
                        <div class="rn-shw-box-wrap rn-shw-box-3 position-absolute">
                            <span class="ripple-anim rounded-circle position-relative"><i></i></span>
                            <div class="rn-shw-box position-absolute">
                                <h4 class="mb-0">Style: BQ9241-003</h4>
                                <p class="mb-0">Sriracha la croix poutine, af try-hard readymade chambray pinterest vape
                                    glossier mlkshk you probably haven’t heard of them cray. Franzen 8-bit mixtape master
                                    cleanse swag trust fund.</p>
                            </div>
                        </div>
                    </div>
                    <div class="rn-shw-info position-absolute">
                        <span class="d-inline-block text-color1">Hot Deal Week</span>
                        <h2 class="mb-0">Night Summer Sneakers</h2>
                        <span class="d-block price"><ins class="text-color4">$200</ins> <del>$250</del></span>
                        <a class="theme-btn bg-color4" href="product-detail5.blade.php" title="">Shop
                            Now<span></span><span></span><span></span><span></span></a>
                    </div>
                </div><!-- Running & Streetwear Shoes Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 position-relative">
            <div class="container">
                <div class="ex-sim-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-8 col-sm-12 col-lg-8 order-md-1">
                            <div class="img-box overflow-hidden position-relative w-100"><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/ex-sim-img.jpg')}}" alt="Exercise Simplicity Image"></div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="text-box w-100">
                                <h2 class="mb-0">An exercise <br> in simplicity.</h2>
                                <p class="mb-0">The Fitness + sneaker allows you to train quickly and easily or be more
                                    productive. More than 25 new sneakers are added every month. And there are specific
                                    fitness shoe models worth checking out.</p>
                                <a class="theme-btn bg-color4 brd-btn" href="product-detail5.blade.php" title="">View
                                    All Shoes <span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Exercies Simplicity Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-70 pb-130 position-relative">
            <div class="container">
                <div class="products-wrap position-relative w-100">
                    <div class="row prod-caro3 nav-style1 v2 pagi-style2 nav-dots-bottom mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-1.jpg')}}" alt="Product Image 1"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-1.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Dark Gray Sneakers
                                            Fit</a></h4>
                                    <span class="price">$150</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-2.jpg')}}" alt="Product Image 2"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-2.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Yellow Sneakers
                                            Fit</a></h4>
                                    <span class="price">$250</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-3.jpg')}}" alt="Product Image 3"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-3.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Black Sneakers
                                            Fit</a></h4>
                                    <span class="price">$125</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-4.jpg')}}" alt="Product Image 4"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-4.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Purple Sneakers
                                            Fit</a></h4>
                                    <span class="price">$100</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Products Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-30 pb-80 position-relative">
            <div class="container">
                <div class="motiv-reward-wrap position-relative w-100">
                    <img class="img-fluid w-100" src="{{asset('fontend/images/resources/motiv-reward-img.jpg')}}"
                        alt="Motivation Rewarded Image">
                    <div class="motiv-info position-absolute w-100">
                        <h1 class="mb-0">All motivation. Get Rewarded For Being Active</h1>
                        <h3 class="mb-0">Enjoy early access to new products, shop exclusive collections and get invites
                            to Member-only events and experiences.</h3>
                        <a data-type="video" href="https://player.vimeo.com/video/349648714" data-fancybox
                            title=""><i class="fi fi-rr-play bg-color4 rounded-circle"></i> Watch the preview</a>
                    </div>
                </div><!-- Motivation Reward Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-110 position-relative">
            <div class="container">
                <div class="sponsors-wrap position-relative w-100">
                    <div class="row align-items-center mrg30">
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="{{asset('fontend/images/resources/spnsr-img1-1.png')}}" alt="Sponsor Image 1"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="{{asset('fontend/images/resources/spnsr-img1-2.png')}}" alt="Sponsor Image 2"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="{{asset('fontend/images/resources/spnsr-img1-3.png')}}" alt="Sponsor Image 3"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="{{asset('fontend/images/resources/spnsr-img1-4.png')}}" alt="Sponsor Image 4"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="spnsr-item text-center w-100">
                                <a href="javascript:void(0);" title=""><img class="img-fluid"
                                        src="{{asset('fontend/images/resources/spnsr-img1-5.png')}}" alt="Sponsor Image 5"></a>
                            </div>
                        </div>
                    </div>
                </div><!-- Sponsors Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-110 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <span class="d-block text-color1">- Featured Items</span>
                    <h2 class="mb-0"><span class="text-color4">The Best</span> of LIAMI</h2>
                    <h3 class="mb-0 font-weight-medium">From the latest products to the most exciting Liami <br> stories,
                        it's your daily destination for the world of sport.</h3>
                </div><!-- Section Title -->
                <div class="featured-products-wrap position-relative w-100">
                    <div class="row feat-prd-caro mrg">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="{{asset('fontend/images/resources/featured-product-img3-1.jpg')}}"
                                        alt="Featured Product Image 1">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail5.blade.php" title="">Clearance Sales</a>
                                    </h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome.
                                        Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail5.blade.php">Shop
                                        Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="{{asset('fontend/images/resources/featured-product-img3-2.jpg')}}"
                                        alt="Featured Product Image 2">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail5.blade.php" title="">Classic and casual
                                            sneakers</a></h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome.
                                        Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail5.blade.php">Shop
                                        Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="{{asset('fontend/images/resources/featured-product-img3-3.jpg')}}"
                                        alt="Featured Product Image 3">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail5.blade.php" title="">Newest Styles for
                                            Future</a></h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome.
                                        Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail5.blade.php">Shop
                                        Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <div class="featured-product-box overflow-hidden position-relative w-100">
                                <div class="featured-product-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="{{asset('fontend/images/resources/featured-product-img3-4.jpg')}}"
                                        alt="Featured Product Image 4">
                                </div>
                                <div class="featured-product-cap position-absolute w-100">
                                    <h2 class="mb-0"><a href="product-detail5.blade.php" title="">Newest Styles for
                                            Summer</a></h2>
                                    <p class="mb-0">Trying something new is never pretty. But it is pretty awesome.
                                        Because no matter how many times.</p>
                                    <a class="theme-btn mid-btn bg-white" href="product-detail5.blade.php">Shop
                                        Now<span></span><span></span><span></span><span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Featured Itemss Wrap -->
                <div
                    class="off-bar bg-color10 d-flex flex-wrap align-items-center justify-content-center position-relative w-100">
                    <h5 class="mb-0">Save Up To 40%</h5>
                    <a href="product-detail5.blade.php" title="">Shop All our New Collections</a>
                </div><!-- Off Bar -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <h1 class="mb-0">Leave it all <br> on the screen.</h1>
                    <h3 class="mb-0 font-weight-medium">Get early access to our latest products, for subscribers only our
                        <br> products and your favourite categories you can see here.</h3>
                    <a class="theme-btn bg-color4 brd-btn" href="product-detail5.blade.php" title="">View All
                        Products<span></span><span></span><span></span><span></span></a>
                </div><!-- Section Title -->
            </div>
            <div class="sn-cat-wrap pt-30 position-relative w-100">
                <div class="sn-cat-bg w-100" style="background-image: url({{asset('fontend/images/sn-cat-bg.jpg')}});"></div>
                <div class="container">
                    <div class="sn-cat-boxes overlap130 position-relative w-100">
                        <div class="row mrg30">
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="sn-cat-box w-100">
                                    <div class="sn-cat-img d-block overflow-hidden position-relative w-100"><a
                                            href="product-detail5.blade.php" title=""><img
                                                class="img-fluid d-block w-100"
                                                src="{{asset('fontend/images/resources/sn-cat-img1-1.jpg')}}"
                                                alt="Sneaker Category Image 1"></a></div>
                                    <div class="sn-cat-info w-100">
                                        <h5 class="mb-0"><a href="product-detail5.blade.php" title="">Women
                                                Jackets</a></h5>
                                        <p class="mb-0">Your ultimate sneaker source.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="sn-cat-box w-100">
                                    <div class="sn-cat-img d-block overflow-hidden position-relative w-100"><a
                                            href="product-detail5.blade.php" title=""><img
                                                class="img-fluid d-block w-100"
                                                src="{{asset('fontend/images/resources/sn-cat-img1-2.jpg')}}"
                                                alt="Sneaker Category Image 2"></a></div>
                                    <div class="sn-cat-info w-100">
                                        <h5 class="mb-0"><a href="product-detail5.blade.php" title="">SNKRS</a></h5>
                                        <p class="mb-0">Your ultimate sneaker source.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="sn-cat-box w-100">
                                    <div class="sn-cat-img d-block overflow-hidden position-relative w-100"><a
                                            href="product-detail5.blade.php" title=""><img
                                                class="img-fluid d-block w-100"
                                                src="{{asset('fontend/images/resources/sn-cat-img1-3.jpg')}}"
                                                alt="Sneaker Category Image 3"></a></div>
                                    <div class="sn-cat-info w-100">
                                        <h5 class="mb-0"><a href="product-detail5.blade.php" title="">Denim Stylish
                                                Shorts</a></h5>
                                        <p class="mb-0">Your ultimate sneaker source.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Sneakers Categories Boxes -->
                </div>
            </div><!-- Sneakers Categories Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div class="testi-wrap2 p-0 position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="sec-title position-relative w-100">
                                <span class="d-block text-color1">- Our Reviews</span>
                                <h2 class="mb-0">Collect <span class="text-color4">Reviews</span> <br> from Your <br>
                                    Existing Clients.</h2>
                            </div><!-- Section Title -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="testi-inner position-relative w-100">
                                <div class="testi-caro">
                                    <div class="testi-item d-block w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid"
                                                src="{{asset('fontend/images/resources/testi-img2-1.jpg')}}"
                                                alt="Testimonial Image 1"></span>
                                        <h4 class="mb-0">Amy Smith</h4>
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly
                                            recommend.”</p>
                                    </div>
                                    <div class="testi-item d-block w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid"
                                                src="{{asset('fontend/images/resources/testi-img2-2.jpg')}}"
                                                alt="Testimonial Image 2"></span>
                                        <h4 class="mb-0">John Doe</h4>
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly
                                            recommend.”</p>
                                    </div>
                                    <div class="testi-item d-block w-100">
                                        <span class="rounded-circle d-inline-block"><img class="img-fluid"
                                                src="{{asset('fontend/images/resources/testi-img2-3.jpg')}}"
                                                alt="Testimonial Image 3"></span>
                                        <h4 class="mb-0">Jane Wilson</h4>
                                        <p class="mb-0">“This is the best website I have ordered something from. I highly
                                            recommend.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Testimonials Wrap 2 -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div
                    class="call-action-box grad-bg1 d-flex flex-wrap justify-content-center align-items-center text-center w-100">
                    <div class="call-action-box-inner">
                        <h2 class="mb-0">Your perfect running partner</h2>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typsetting industry. The
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it.</p>
                        <a class="theme-btn bg-color1" href="javascript:void(0);" title="">Preorder
                            now<span></span><span></span><span></span><span></span></a>
                    </div>
                </div><!-- Call To Action Box -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div class="toggles-wrap position-relative w-100">
                    <div class="toggle w-100" id="toggle">
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">What kind of support do you offer?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an
                                    automated system. Our live support service are offered 24/7, so you can get in contact
                                    with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please
                                    email us straight away. If you are having difficulties in redeeming a card, or have any
                                    general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">Why did I only receive part of my order?<i class="fi fi-rr-plus-small"></i>
                            </h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an
                                    automated system. Our live support service are offered 24/7, so you can get in contact
                                    with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please
                                    email us straight away. If you are having difficulties in redeeming a card, or have any
                                    general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">What do I do if my order is damaged?<i class="fi fi-rr-plus-small"></i>
                            </h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an
                                    automated system. Our live support service are offered 24/7, so you can get in contact
                                    with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please
                                    email us straight away. If you are having difficulties in redeeming a card, or have any
                                    general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">Can I expedite my shipping?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an
                                    automated system. Our live support service are offered 24/7, so you can get in contact
                                    with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please
                                    email us straight away. If you are having difficulties in redeeming a card, or have any
                                    general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                        <div class="toggle-item w-100">
                            <h4 class="mb-0">Can I exchange my order?<i class="fi fi-rr-plus-small"></i></h4>
                            <div class="toggle-content w-100">
                                <p class="mb-0">Your email/chat request will be dealt with by a live agent and not by an
                                    automated system. Our live support service are offered 24/7, so you can get in contact
                                    with us at anytime.</p>
                                <p class="mb-0">If you have not received your card and it has been over 1 hour please
                                    email us straight away. If you are having difficulties in redeeming a card, or have any
                                    general question we will be glad to hear from you.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Toggles Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <span class="d-block text-color1">- Instagram Shop</span>
                    <h2 class="mb-0">#ClickBuy <span class="text-color4">Your Looks</span></h2>
                </div><!-- Section Title -->
            </div>
            <div class="insta-wrap position-relative w-100">
                <div class="row insta-caro nav-style1 v2 pagi-style2 nav-dots-bottom mrg20">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="{{asset('fontend/images/resources/insta-img2-1.jpg')}}" data-fancybox="gallery"
                                title=""><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/insta-img2-1.jpg')}}" alt="Instagram Image 1"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="{{asset('fontend/images/resources/insta-img2-2.jpg')}}" data-fancybox="gallery"
                                title=""><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/insta-img2-2.jpg')}}" alt="Instagram Image 2"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="{{asset('fontend/images/resources/insta-img2-3.jpg')}}" data-fancybox="gallery"
                                title=""><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/insta-img2-3.jpg')}}" alt="Instagram Image 3"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="{{asset('fontend/images/resources/insta-img2-4.jpg')}}" data-fancybox="gallery"
                                title=""><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/insta-img2-4.jpg')}}" alt="Instagram Image 4"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="{{asset('fontend/images/resources/insta-img2-5.jpg')}}" data-fancybox="gallery"
                                title=""><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/insta-img2-5.jpg')}}" alt="Instagram Image 5"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="insta-item d-block overflow-hidden position-relative w-100">
                            <a href="{{asset('fontend/images/resources/insta-img2-6.jpg')}}" data-fancybox="gallery"
                                title=""><img class="img-fluid w-100"
                                    src="{{asset('fontend/images/resources/insta-img2-6.jpg')}}" alt="Instagram Image 6"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Instagram Wrap -->
        </div>
    </section>
    <section>
        <div class="w-100 pt-80 position-relative">
            <div class="container">
                <div class="services-wrap position-relative text-center w-100">
                    <div class="row mrg30">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color1"><i class="fi fi-rr-truck-side"></i></span>
                                <h4 class="mb-0">Free Shipping</h4>
                                <p class="mb-0">On all orders over $50 CAD/USD</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color1"><i class="fi fi-rr-time-forward"></i></span>
                                <h4 class="mb-0">30 days return</h4>
                                <p class="mb-0">Possibility of returning goods</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color1"><i class="fi fi-rr-heart"></i></span>
                                <h4 class="mb-0">We are Inclusive</h4>
                                <p class="mb-0">Representing all</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="serv-box text-center w-100">
                                <span class="d-inline-block text-color1"><i class="fi fi-rr-plane"></i></span>
                                <h4 class="mb-0">International warrantly</h4>
                                <p class="mb-0">Postal items to countries</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title position-relative w-100">
                    <span class="d-block text-color4">- The Week's</span>
                    <h2 class="mb-0">Best Shoes <span class="text-color4">for You</span></h2>
                </div><!-- Section Title -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-5.jpg')}}" alt="Product Image 5"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-5.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Orange Trendy
                                            Sneakers</a></h4>
                                    <span class="price">$100</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-6.jpg')}}" alt="Product Image 6"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-6.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Green Trendy
                                            Sneakers</a></h4>
                                    <span class="price">$100</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-4">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100"
                                            src="{{asset('fontend/images/resources/product-img3-7.jpg')}}" alt="Product Image 7"></a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.blade.php" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.blade.php" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="{{asset('fontend/images/resources/product-img3-7.jpg')}}"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"><a href="product-detail5.blade.php" title="">White Trendy
                                            Sneakers</a></h4>
                                    <span class="price">$100</span>
                                    <div class="products-color d-flex flex-wrap">
                                        <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                        <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Products Wrap -->
            </div>
        </div>
    </section>
@endsection
