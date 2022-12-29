@extends('layout.master')
@section('title')
    Shop
@endsection
@section('main')
<section>
    <div class="w-100 pt-30 position-relative">
        <div class="container">
            <div class="slider-area-wrap position-relative w-100">
                <div class="slider-caro nav-style1 pagi-style1">
                    <div class="slider-item overflow-hidden position-relative d-block w-100">
                        <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img1-1.jpg" alt="Slide Image 1">
                        <div class="slider-cap position-absolute">
                            <span class="d-block text-color4 animated fadeInUp">- Welcome to fashion</span>
                            <h1 class="mb-0 animated fadeInUp">We Offer the Best Products</h1>
                            <a class="theme-btn bg-color1 animated fadeInUp" href="product-detail3.blade.php" title="">Shop Now<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                    <div class="slider-item overflow-hidden position-relative d-block w-100">
                        <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img1-2.jpg" alt="Slide Image 2">
                        <div class="slider-cap position-absolute">
                            <span class="d-block text-white hidden">- Welcome to fashion</span>
                            <h1 class="mb-0 hidden text-white">We Offer the Best Products</h1>
                            <a class="theme-btn bg-color1 hidden" href="product-detail4.blade.php" title="">Shop Now<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                </div>
            </div><!-- Slider Area Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-60 position-relative">
        <div class="container">
            <div class="cards-wrap res-row position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="card-box overflow-hidden position-relative w-100">
                            <img class="img-fluid w-100" src="assets/images/resources/card-img1-1.jpg" alt="Card Image 1">
                            <div class="card-info position-absolute w-100">
                                <h2 class="mb-0">Up to <span class="position-relative off-badge">60%</span> <br> off Sale</h2>
                                <a class="simple-link" href="product-detail.blade.php" title="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="card-box overflow-hidden position-relative w-100">
                            <img class="img-fluid w-100" src="assets/images/resources/card-img1-2.jpg" alt="Card Image 2">
                            <div class="card-info position-absolute w-100">
                                <h2 class="mb-0">Men's <br> Collections</h2>
                                <a class="simple-link" href="product-detail2.blade.php" title="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="card-box overflow-hidden position-relative w-100">
                            <img class="img-fluid w-100" src="assets/images/resources/card-img1-3.jpg" alt="Card Image 3">
                            <div class="card-info position-absolute w-100">
                                <h2 class="mb-0">Women's <br> Collections</h2>
                                <a class="simple-link" href="product-detail3.blade.php" title="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Cards Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 pb-120 position-relative">
        <div class="container">
            <div class="sec-title position-relative text-center w-100">
                <span class="d-block text-color4">- Our Products</span>
                <h2 class="mb-0">Explore our Products</h2>
            </div><!-- Section Title -->
            <div class="tabs-wrap position-relative w-100">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1-1" type="button">New Product</button></li>
                    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab1-2" type="button">Featured Now</button></li>
                    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab1-3" type="button">Trending Now</button></li>
                    <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab1-4" type="button">Best Selling</button></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1-1">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-1.jpg" alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-2.jpg" alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit T-shirt</a></h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-3.jpg" alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long strappy dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-4.jpg" alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Round neck sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-5.jpg" alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Skinny mid-rise trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-6.jpg" alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Sweater with slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-7.jpg" alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">New Blend Field Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-8.jpg" alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit dress</a></h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-9.jpg" alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Cotton Baseball Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-10.jpg" alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-11.jpg" alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Grown cotton T-shirt</a></h4>
                                            <span class="price">$72</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-12.jpg" alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jacket with pouch pocket</a></h4>
                                            <span class="price">$55</span>
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
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="product-detail.blade.php" title="">View All Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                    <div class="tab-pane fade" id="tab1-2">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-2.jpg" alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit T-shirt</a></h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-1.jpg" alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-5.jpg" alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Skinny mid-rise trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-6.jpg" alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Sweater with slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-4.jpg" alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Round neck sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-7.jpg" alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">New Blend Field Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-3.jpg" alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long strappy dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-8.jpg" alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit dress</a></h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-10.jpg" alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-9.jpg" alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Cotton Baseball Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-12.jpg" alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jacket with pouch pocket</a></h4>
                                            <span class="price">$55</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-11.jpg" alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Grown cotton T-shirt</a></h4>
                                            <span class="price">$72</span>
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
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="product-detail2.blade.php" title="">View All Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                    <div class="tab-pane fade" id="tab1-3">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-1.jpg" alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-2.jpg" alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit T-shirt</a></h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-3.jpg" alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long strappy dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-4.jpg" alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Round neck sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-5.jpg" alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Skinny mid-rise trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-6.jpg" alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Sweater with slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-7.jpg" alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">New Blend Field Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-8.jpg" alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit dress</a></h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-9.jpg" alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Cotton Baseball Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-10.jpg" alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-11.jpg" alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Grown cotton T-shirt</a></h4>
                                            <span class="price">$72</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-12.jpg" alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jacket with pouch pocket</a></h4>
                                            <span class="price">$55</span>
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
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="product-detail3.blade.php" title="">View All Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                    <div class="tab-pane fade" id="tab1-4">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-2.jpg" alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit T-shirt</a></h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-1.jpg" alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-5.jpg" alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Skinny mid-rise trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-6.jpg" alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Sweater with slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-4.jpg" alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Round neck sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-7.jpg" alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">New Blend Field Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-3.jpg" alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long strappy dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-8.jpg" alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Long Fit dress</a></h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-10.jpg" alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jersey Graphic Tee Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-9.jpg" alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Cotton Baseball Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-12.jpg" alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Jacket with pouch pocket</a></h4>
                                            <span class="price">$55</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-11.jpg" alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.blade.php" title="">Grown cotton T-shirt</a></h4>
                                            <span class="price">$72</span>
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
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="product-detail4.blade.php" title="">View All Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                </div>                      
            </div><!-- Tabs Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 bg-color5 pb-120 position-relative">
        <div class="container">
            <div class="sec-title position-relative text-center w-100">
                <span class="d-block text-color4">- Our Reviews</span>
                <h2 class="mb-0">Customers are saying</h2>
            </div><!-- Section Title -->
            <div class="testi-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="testi-info-caro">
                            <div class="testi-info-item position-relative w-100">
                                <div class="testi-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/testi-img1-1.jpg" alt="Testimonial Image 1">
                                </div>
                                <div class="testi-info-cap position-absolute">
                                    <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                    <h4 class="mb-0">John Doe</h4>
                                    <em class="d-block">Doula and health Educator</em>
                                </div>
                            </div>
                            <div class="testi-info-item position-relative w-100">
                                <div class="testi-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/testi-img1-2.jpg" alt="Testimonial Image 2">
                                </div>
                                <div class="testi-info-cap position-absolute">
                                    <p class="mb-0">“This is the best website I have ordered something from.”</p>
                                    <h4 class="mb-0">Amy Smith</h4>
                                    <em class="d-block">Doula and health Educator</em>
                                </div>
                            </div>
                            <div class="testi-info-item position-relative w-100">
                                <div class="testi-img overflow-hidden position-relative w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/testi-img1-3.jpg" alt="Testimonial Image 3">
                                </div>
                                <div class="testi-info-cap position-absolute">
                                    <p class="mb-0">“This is the best website I have ordered something from. I highly recommend.”</p>
                                    <h4 class="mb-0">James Carter</h4>
                                    <em class="d-block">Doula and health Educator</em>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-6">
                        <div class="testi-imgs-caro nav-style1 v2 pagi-style1 mrg30">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="testi-img d-block overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/testi-img1-1.jpg" alt="Testimonial Image 1">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="testi-img d-block overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/testi-img1-2.jpg" alt="Testimonial Image 2">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <div class="testi-img d-block overflow-hidden w-100">
                                    <img class="img-fluid w-100" src="assets/images/resources/testi-img1-3.jpg" alt="Testimonial Image 3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Testimonials Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 pb-40 position-relative">
        <div class="container">
            <div class="sec-title position-relative w-100">
                <span class="d-block text-color4">- The Week's</span>
                <h2 class="mb-0">New Arrivals</h2>
            </div><!-- Section Title -->
            <div class="products-wrap position-relative w-100">
                <div class="row prod-caro nav-style1 v2 pagi-style2 nav-dots-bottom mrg30">
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-10.jpg" alt="Product Image 10"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Jersey Graphic Tee Dolce</a></h4>
                                <span class="price">$99</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-13.jpg" alt="Product Image 13"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img1-13.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Long strappy dress</a></h4>
                                <span class="price">$100</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-14.jpg" alt="Product Image 14"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img1-14.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Grown cotton T-shirt</a></h4>
                                <span class="price">$72</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-15.jpg" alt="Product Image 15"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img1-15.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Jacket with pouch pockett</a></h4>
                                <span class="price">$225</span>
                                <div class="products-color d-flex flex-wrap">
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-3">
                        <div class="product-box position-relative w-100">
                            <div class="product-img overflow-hidden position-relative w-100">
                                <a href="product-detail5.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/product-img1-16.jpg" alt="Product Image 16"></a>
                                <div class="product-btns position-absolute">
                                    <a class="wishlist-btn" href="wishlist.blade.php" title=""><i class="fi fi-rr-heart"></i></a>
                                    <a class="cart-btn" href="cart.blade.php" title=""><i class="fi-rr-shopping-bag"></i></a>
                                    <a class="expand-btn" href="assets/images/resources/product-img1-16.jpg" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                </div>
                            </div>
                            <div class="product-info w-100">
                                <h4 class="mb-0"><a href="product-detail5.blade.php" title="">Long Fit T-shirt</a></h4>
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
    <div class="w-100 pt-110 pb-120 position-relative">
        <div class="container">
            <div class="sec-title position-relative w-100">
                <span class="d-block text-color4">- Featured Items</span>
                <h2 class="mb-0">Latest Featured Product</h2>
            </div><!-- Section Title -->
            <div class="featured-products-wrap position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="featured-product-box overflow-hidden position-relative w-100">
                            <div class="featured-product-img overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="assets/images/resources/featured-product-img1-1.jpg" alt="Featured Product Image 1">
                            </div>
                            <div class="featured-product-cap position-absolute w-100">
                                <h1 class="mb-0"><a href="product-detail.blade.php" title="">Newest Styles</a></h1>
                                <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                                <a class="theme-btn mid-btn bg-white" href="product-detail.blade.php">Shop Now<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="featured-product-box overflow-hidden position-relative w-100">
                            <div class="featured-product-img overflow-hidden position-relative w-100">
                                <img class="img-fluid w-100" src="assets/images/resources/featured-product-img1-2.jpg" alt="Featured Product Image 2">
                            </div>
                            <div class="featured-product-cap position-absolute w-100">
                                <h1 class="mb-0"><a href="product-detail2.blade.php" title="">Newest Styles</a></h1>
                                <p class="mb-0">Trying something new is never pretty. But it is pretty awesome. Because no matter how many times.</p>
                                <a class="theme-btn mid-btn bg-white" href="product-detail2.blade.php">Shop Now<span></span><span></span><span></span><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Featured Itemss Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-80 bg-color5 pb-80 position-relative">
        <div class="container">
            <div class="sponsors-wrap position-relative w-100">
                <div class="row align-items-center mrg30">
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-1.png" alt="Sponsor Image 1"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-2.png" alt="Sponsor Image 2"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-3.png" alt="Sponsor Image 3"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-4.png" alt="Sponsor Image 4"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid" src="assets/images/resources/spnsr-img1-5.png" alt="Sponsor Image 5"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Sponsors Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pt-110 pb-120 position-relative">
        <div class="container">
            <div class="sec-title-wrap d-flex flex-wrap align-items-end justify-content-between w-100">
                <div class="sec-title position-relative">
                    <span class="d-block text-color4">- Blog</span>
                    <h2 class="mb-0">Explore Our Latest Blog</h2>
                </div><!-- Section Title -->
                <div class="sec-btn">
                    <a class="theme-btn bg-color1 brd-btn" href="blog.blade.php" title="">View All<span></span><span></span><span></span><span></span></a>
                </div>
            </div><!-- Section Title Wrap -->
            <div class="posts-wrap res-row position-relative w-100">
                <div class="row mrg30">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-1.jpg" alt="Post Image 1"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.blade.php" title="">They're born from love and bred for individuality</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-2.jpg" alt="Post Image 2"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.blade.php" title="">The Best High-Street Cleansing Creams</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="post-box w-100">
                            <div class="post-img overflow-hidden position-relative w-100">
                                <a href="blog-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img1-3.jpg" alt="Post Image 3"></a>
                            </div>
                            <div class="post-info w-100">
                                <h4 class="mb-0"><a href="blog-detail.blade.php" title="">Three Of The Best Red Lipsticks For Spring</a></h4>
                                <span class="post-date d-block"><a href="javascript:void(0);" title="">Jun 16, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Posts Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="w-100 pb-120 position-relative">
        <div class="container">
            <div class="newsletter-wrap bg-color5 position-relative w-100" style="background-image: url(assets/images/resources/newsletter-mockup.png);">
                <div class="row mrg30">
                    <div class="col-md-9 col-sm-12 col-lg-7">
                        <div class="sec-title position-relative">
                            <span class="d-block text-color4">- Our Newsletter</span>
                            <h2 class="mb-0">New Product Notifications</h2>
                        </div><!-- Section Title -->
                        <form id="subscribe-form" method="post" action="#">
                            <div class="field-box position-relative">
                                <i class="fi fi-rr-envelope"></i>
                                <input class="email" type="email" placeholder="Enter your email" name="email" required>
                            </div>
                            <div class="field-btn">
                                <button class="theme-btn bg-color1" type="submit" id="subscribe-button">Subscribe<span></span><span></span><span></span><span></span></button>
                            </div>
                            <div class="response w-100"></div>
                        </form>
                    </div>
                </div>
            </div><!-- Newsletter Wrap -->
        </div>
    </div>
</section>
@endsection
