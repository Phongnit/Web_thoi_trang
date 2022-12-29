@extends('layout.master')
@section('title')
    wishlist
@endsection
@section('main')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="sec-title2 d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <h3 class="mb-0">My wishlist on Esell</h3>
                </div><!-- Section Title 2 -->
                <div class="cart-wrap position-relative w-100">
                    <form>
                        <table class="cart-table w-100">
                            <thead>
                                <tr><th>Product</th><th>Unit Price</th><th>Stock Status</th><th></th></tr>
                            </thead>
                            <tbody>
                                <tr class="cart-item">
                                    <td>
                                        <a class="remove-product d-inline-block rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                        <div class="cart-product-box d-flex flex-wrap align-items-center">
                                            <div class="cart-product-img overflow-hidden"><a href="product-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/cart-img1-1.jpg" alt="Cart Image 1"></a></div>
                                            <h5 class="mb-0"><a href="product-detail.blade.php" title="">Digital Product</a></h5>
                                        </div>
                                    </td>
                                    <td><span class="price">$124.00</span></td>
                                    <td>In Stock</td>
                                    <td><button class="theme-btn bg-color1 brd-btn mb-0" type="submit">Add to Cart<span></span><span></span><span></span><span></span></button></td>
                                </tr>
                                <tr class="cart-item">
                                    <td>
                                        <a class="remove-product d-inline-block rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                        <div class="cart-product-box d-flex flex-wrap align-items-center">
                                            <div class="cart-product-img overflow-hidden"><a href="product-detail2.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/cart-img1-2.jpg" alt="Cart Image 2"></a></div>
                                            <h5 class="mb-0"><a href="product-detail2.blade.php" title="">Digital Product</a></h5>
                                        </div>
                                    </td>
                                    <td><span class="price">$124.00</span></td>
                                    <td>In Stock</td>
                                    <td><button class="theme-btn bg-color1 brd-btn mb-0" type="submit">Add to Cart<span></span><span></span><span></span><span></span></button></td>
                                </tr>
                                <tr class="cart-item">
                                    <td>
                                        <a class="remove-product d-inline-block rounded-circle" href="javascript:void(0);" title=""><i class="fi fi-rr-cross-small"></i></a>
                                        <div class="cart-product-box d-flex flex-wrap align-items-center">
                                            <div class="cart-product-img overflow-hidden"><a href="product-detail3.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/cart-img1-3.jpg" alt="Cart Image 3"></a></div>
                                            <h5 class="mb-0"><a href="product-detail3.blade.php" title="">Digital Product</a></h5>
                                        </div>
                                    </td>
                                    <td><span class="price">$124.00</span></td>
                                    <td>In Stock</td>
                                    <td><button class="theme-btn bg-color1 brd-btn mb-0" type="submit">Add to Cart<span></span><span></span><span></span><span></span></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div><!-- Cart Wrap -->
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

