@extends('layout.master')
@section('title')
    Product-detail
@endsection
@section('main')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="product-detail position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="product-detail-imgs position-relative w-100">
                                <span class="bg-color4 rounded-pill position-absolute">20% OFF</span>
                                <ul class="product-detail-img-nav list-unstyled mb-0">
                                    <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="assets/images/resources/product-detail-mini-img1-1.jpg" alt="Product Detail Mini Image 1"></div></li>
                                    <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="assets/images/resources/product-detail-mini-img1-2.jpg" alt="Product Detail Mini Image 2"></div></li>
                                    <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="assets/images/resources/product-detail-mini-img1-3.jpg" alt="Product Detail Mini Image 3"></div></li>
                                    <li><div class="product-detail-mini-img overflow-hidden"><img class="img-fluid w-100" src="assets/images/resources/product-detail-mini-img1-4.jpg" alt="Product Detail Mini Image 4"></div></li>
                                </ul>
                                <ul class="product-detail-big-imgs list-unstyled mb-0">
                                    <li><div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-1.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/product-detail-big-img1-1.jpg" alt="Product Detail Big Image 1"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                    <li><div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-2.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/product-detail-big-img1-2.jpg" alt="Product Detail Big Image 2"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                    <li><div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-3.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/product-detail-big-img1-3.jpg" alt="Product D   etail Big Image 3"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                    <li><div class="product-detail-big-img overflow-hidden"><a href="assets/images/resources/product-detail-big-img1-4.jpg" data-fancybox="gallery" title=""><img class="img-fluid w-100" src="assets/images/resources/product-detail-big-img1-4.jpg" alt="Product Detail Big Image 4"><i class="fi fi-rr-eye rounded-circle"></i></a></div></li>
                                </ul>
                            </div><!-- Product Detail Images -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-5">
                            <div class="product-detail-info position-relative w-100">
                                <div class="product-rate-review d-flex flex-wrap align-items-center">
                                    <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star off"></i></span>
                                    <a class="d-inline-block review-link" href="javascript:void(0);" title="">(1 customer review)</a>
                                </div>
                                <h2 class="mb-0">New Summer Collection</h2>
                                <span class="d-block price">$155.00 - $255.00</span>
                                <ul class="product-stock-info list-unstyled mb-0">
                                    <li>In stock</li>
                                    <li>Free delivery available</li>
                                    <li>Sales 30% Off Use Code: MOTIVE30</li>
                                </ul>
                                <p class="mb-0">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, hendrerit in rutrum quis, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>
                                <div class="products-color d-flex flex-wrap align-items-center w-100">
                                    <span>Colors:</span>
                                    <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                    <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                </div>
                                <div class="products-size d-flex flex-wrap align-items-center w-100">
                                    <span>Size:</span>
                                    <a href="javascript:void(0);" title="">XS</a>
                                    <a href="javascript:void(0);" title="">S</a>
                                    <a href="javascript:void(0);" title="">M</a>
                                    <a href="javascript:void(0);" title="">L</a>
                                    <a href="javascript:void(0);" title="">XL</a>
                                </div>
                                <div class="product-bottom d-flex flex-wrap align-items-center w-100">
                                    <div class="product-quanty">
                                        <input type="number" class="qty" value="01">
                                    </div>
                                    <button class="theme-btn bg-color1" type="submit">Add to Cart<span></span><span></span><span></span><span></span></button>
                                    <a class="heart-btn d-inline-block rounded-circle" href="wishlist.blade.php" title=""><i class="fi-rr-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Product Detail -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 bg-color5 pb-120 position-relative">
            <div class="container">
                <div class="product-tabs position-relative w-100">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-1" type="button">Description</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-2" type="button">Additional Information</button></li>
                        <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#product-detail-tab1-3" type="button">Reviews</button></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-detail-tab1-1">
                            <div class="product-detail-tab-content w-100">
                                <div class="row mrg30">
                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                        <h4 class="mb-0">Specifications:</h4>
                                        <p class="mb-0">We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather, initial all the made, have spare to negatives.</p>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-lg-5">
                                        <h4 class="mb-0">Care & Maintenance:</h4>
                                        <p class="mb-0">Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <ul class="product-detail-list d-flex flex-wrap list-unstyled mb-0">
                                            <li>
                                                <div class="product-desc-info-box w-100">
                                                    <span class="rounded-circle"><i class="fi fi-rr-box-alt"></i></span>
                                                    <h4 class="mb-0">Easy Returns</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-desc-info-box w-100">
                                                    <span class="rounded-circle"><i class="fi fi-rr-thumbs-up"></i></span>
                                                    <h4 class="mb-0">Quality Service</h4>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="product-desc-info-box w-100">
                                                    <span class="rounded-circle"><i class="fi fi-rr-shield-check"></i></span>
                                                    <h4 class="mb-0">Original Product</h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-detail-tab1-2">
                            <div class="product-detail-tab-content w-100">
                                <div class="product-detail-info-table w-100">
                                    <table>
                                        <tr>
                                            <th>Stand Up</th>
                                            <td>35″L x 24″W x 37-45″H(front to back wheel)</td>
                                        </tr>
                                        <tr>
                                            <th>Folded (w/o wheels)</th>
                                            <td>32.5″L x 18.5″W x 16.5″H</td>
                                        </tr>
                                        <tr>
                                            <th>Folded (w/ wheels)</th>
                                            <td>32.5″L x 24″W x 18.5″H</td>
                                        </tr>
                                        <tr>
                                            <th>Door Pass Through</th>
                                            <td>24</td>
                                        </tr>
                                        <tr>
                                            <th>Frame</th>
                                            <td>Aluminum</td>
                                        </tr>
                                        <tr>
                                            <th>Weight (w/o wheels)</th>
                                            <td>20 LBS</td>
                                        </tr>
                                        <tr>
                                            <th>Weight Capacity</th>
                                            <td>60 LBS</td>
                                        </tr>
                                        <tr>
                                            <th>Width</th>
                                            <td>24″</td>
                                        </tr>
                                        <tr>
                                            <th>Handle height (ground to handle)</th>
                                            <td>37-45″</td>
                                        </tr>
                                        <tr>
                                            <th>Wheels</th>
                                            <td>Aluminum</td>
                                        </tr>
                                        <tr>
                                            <th>Size</th>
                                            <td>S, M, X, XL</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-detail-tab1-3">
                            <div class="product-detail-tab-content w-100">
                                <div class="row mrg30">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <h4 class="mb-0">01 Review for this product</h4>
                                        <ul class="comments list-unstyled mb-0 w-100">
                                            <li>
                                                <div class="comment d-flex flex-wrap w-100">
                                                    <img class="img-fluid rounded-circle" src="assets/images/resources/review-img1.jpg" alt="Review Image 1" height="60" width="60">
                                                    <div class="comment-detail">
                                                        <h5>Eleanor Pena</h5>
                                                        <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star off"></i></span>
                                                        <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ”</p>
                                                    </div>
                                                </div><!-- Comments -->
                                            </li>
                                            <li>
                                                <div class="comment d-flex flex-wrap w-100">
                                                    <img class="img-fluid rounded-circle" src="assets/images/resources/review-img2.jpg" alt="Review Image 2" height="60" width="60">
                                                    <div class="comment-detail">
                                                        <h5>Devon Lane</h5>
                                                        <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i></span>
                                                        <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ”</p>
                                                    </div>
                                                </div><!-- Comments -->
                                            </li>
                                            <li>
                                                <div class="comment d-flex flex-wrap w-100">
                                                    <img class="img-fluid rounded-circle" src="assets/images/resources/review-img3.jpg" alt="Review Image 3" height="60" width="60">
                                                    <div class="comment-detail">
                                                        <h5>Courtney Henry</h5>
                                                        <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i class="fas fa-star off"></i><i class="fas fa-star off"></i></span>
                                                        <p>“We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. ”</p>
                                                    </div>
                                                </div><!-- Comments -->
                                            </li>
                                        </ul><!-- Comments -->
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <h4 class="mb-0">Add a Review</h4>
                                        <p class="mb-0">Your email address will not be published. Required fields are marked *</p>
                                        <form>
                                            <label>Your Rating * <span class="d-inline-block rate"><i class="fas fa-star off"></i><i class="fas fa-star off"></i><i class="fas fa-star off"></i><i class="fas fa-star off"></i><i class="fas fa-star off"></i></span></label>
                                            <div class="row mrg30">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="field-box v2 position-relative w-100">
                                                        <label>Other Notes (optional)</label>
                                                        <textarea placeholder="“We’ve created a full-stack ........"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <div class="field-box v2 position-relative w-100">
                                                        <label>Name *</label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                    <div class="field-box v2 position-relative w-100">
                                                        <label>Email *</label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <div class="field-btn position-relative w-100">
                                                        <button class="theme-btn bg-color1" type="submit">Submit Now<span></span><span></span><span></span><span></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>                      
                </div><!-- Product Tabs -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title-wrap d-flex flex-wrap align-items-end justify-content-between w-100">
                    <div class="sec-title position-relative">
                        <span class="d-block text-color4">- The Week's</span>
                        <h2 class="mb-0">Related Products</h2>
                    </div><!-- Section Title -->
                    <div class="sec-btn">
                        <a class="theme-btn bg-color1 brd-btn" href="product-detail.blade.php" title="">View More Products<span></span><span></span><span></span><span></span></a>
                    </div>
                </div><!-- Section Title Wrap -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
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
                    </div>
                </div><!-- Products Wrap -->
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
