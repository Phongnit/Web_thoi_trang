@extends('layout.master')
@section('title')
    Checkout
@endsection
@section('main')
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="sec-title2 position-relative w-100">
                    <h3 class="mb-0">Checkout (2 items)</h3>
                </div><!-- Section Title -->
                <div class="checkout-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="not-bar bg-color5 w-100"><i class="fi fi-rr-user"></i>Returning customer? <a href="javascript:void(0);" title="">Click here to login <i class="fi fi-rr-angle-small-down"></i></a></div>
                            <div class="not-bar bg-color5 w-100"><i class="fi fi-rr-pencil"></i>Have a coupom? <a href="javascript:void(0);" title="">Click here to enter your code <i class="fi fi-rr-angle-small-down"></i></a></div>
                            <div class="checkout-form w-100">
                                <h3>Billing details</h3>
                                <form>
                                    <div class="row mrg30">
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>First Name *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Last Name *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Company Name</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Country / Region *</label>
                                                <select>
                                                    <option>United State (USA)</option>
                                                    <option>United Kingdom (UK)</option>
                                                    <option>Pakistan</option>
                                                    <option>India</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Street Address *</label>
                                                <input type="text" placeholder="House number and street name">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <input type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Town / City *</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Country</label>
                                                <input type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Phone *</label>
                                                <input type="tel">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="field-box v2 position-relative w-100">
                                                <label>Email Address *</label>
                                                <input type="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <div class="radio-box v2 position-relative w-100">
                                                <input id="create" type="radio">
                                                <label for="create">Create an account</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                            <h4>Ship to a different address?</h4>
                                            <div class="field-box v2 mb-0 position-relative w-100">
                                                <label>Other Notes (optional) *</label>
                                                <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="cart-total v2 w-100">
                                <h4>Your Order</h4>
                                <table>
                                    <tr><th>Product</th><th>Subtotal</th></tr>
                                    <tr><td>Commodo Blown Lamp <span>x1</span></td><td><span class="price">$117.00</span></td></tr>
                                    <tr><td>Commodo Blown Lamp <span>x1</span></td><td><span class="price">$198.00</span></td></tr>
                                    <tr><td>Subtotal</td><td><span class="price">$323.00</span></td></tr>
                                    <tr><td>Shipping</td><td><span class="radio-box"><label for="radio1-1">Free Shipping</label><input name="shipping" id="radio1-1" type="radio"></span><span class="radio-box"><label for="radio1-2">Local: $35.00</label><input name="shipping" id="radio1-2" type="radio"></span><span class="radio-box"><label for="radio1-3">Flat rate: $12.00</label><input name="shipping" id="radio1-3" type="radio"></span></td></tr>
                                    <tr><td>Total</td><td><strong class="price">$323.00</strong></td></tr>
                                </table>
                                <div class="payment-options w-100">
                                    <div class="radio-box2 position-relative w-100">
                                        <input id="payment-info1-1" name="payment" type="radio">
                                        <label for="payment-info1-1"><strong>Direct bank transfer</strong><span>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</span></label>
                                    </div>
                                    <div class="radio-box2 position-relative w-100">
                                        <input id="payment-info1-2" name="payment" type="radio">
                                        <label for="payment-info1-2"><strong>Cash on delivery</strong><span>Pay with cash upon delivery.</span></label>
                                    </div>
                                    <div class="radio-box2 position-relative w-100">
                                        <input id="payment-info1-3" name="payment" type="radio">
                                        <label for="payment-info1-3"><strong>Paypal</strong><span>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</span></label>
                                    </div>
                                </div>
                                <button class="theme-btn bg-color1" type="submit">Process to Checkout<span></span><span></span><span></span><span></span></button>
                            </div>
                        </div>
                    </div>
                </div><!-- Checkout Wrap -->
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

