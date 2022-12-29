@extends('layout.master')
@section('title')
    about
@endsection
@section('main')
    <section>
        <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.blade.php" title="">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
                <div class="page-title w-100">
                    <span class="d-block text-color4">- Want to Know</span>
                    <h2 class="mb-0">About Us</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="about-wrap position-relative w-100">
                    <h2 class="mb-0">We convert your <br> idea into a reality</h2>
                    <div class="about-img w-100"><img class="img-fluid w-100" src="assets/images/resources/about-img.jpg" title="About Image"></div>
                    <div class="about-desc bg-white position-absolute">
                        <h3>About our online store</h3>
                        <p class="mb-0">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                        <p class="mb-0">Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                        <p class="mb-0">Eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                    </div>
                </div><!-- About Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pb-120 position-relative">
            <div class="container">
                <div class="services-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="serv-box v2 w-100">
                                <span class="d-inline-block rounded-circle"><i class="fi fi-rr-box-alt"></i></span>
                                <h4 class="mb-0">Free Shipping</h4>
                                <p class="mb-0">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget bland nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpa.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="serv-box v2 w-100">
                                <span class="d-inline-block rounded-circle"><i class="fi fi-rr-shield-check"></i></span>
                                <h4 class="mb-0">Secured Payments</h4>
                                <p class="mb-0">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget bland nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpa.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="serv-box v2 w-100">
                                <span class="d-inline-block rounded-circle"><i class="fi fi-rr-headphones"></i></span>
                                <h4 class="mb-0">Support Coustomer</h4>
                                <p class="mb-0">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget bland nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpa.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- Services Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 bg-color5 pb-120 position-relative">
            <div class="container">
                <div class="our-mission-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <img class="img-fluid w-100" src="assets/images/resources/our-mission-img.jpg" alt="Our Mission Image">
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                            <div class="our-mission-desc w-100">
                                <h2 class="mb-0">Our Mission</h2>
                                <p class="mb-0">Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue.</p>
                                <p class="mb-0">Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis.</p>
                                <strong>“Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.”</strong>
                                <div class="post-detail-mini-author align-items-center d-flex flex-wrap">
                                    <img class="img-fluid rounded-circle" src="assets/images/resources/author-img.jpg" alt="Author Image 1" height="50" width="50">
                                    <div class="post-detail-min-author-info">
                                        <h5 class="mb-0">Jems Anderson</h5>
                                        <span class="d-block">CEO, Microsoft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Our Mission Wrap -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-80 pb-80 position-relative">
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
        <hr class="h-1 my-0">
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title position-relative text-center w-100">
                    <span class="d-block text-color4">- Our Team</span>
                    <h2 class="mb-0">Let's Meet Our Incredible Team</h2>
                </div><!-- Section Title -->
                <div class="team-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box position-relative w-100">
                                <div class="team-img overflow-hidden position-relative w-100"><a class="team-trigger1" href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-1.jpg" alt="Team Image 1"></a></div>
                                <div class="team-info w-100">
                                    <h4 class="mb-0"><a class="team-trigger1" href="javascript:void(0);" title="">Jems Anderson</a></h4>
                                    <span class="d-block">Creative Director</span>
                                    <p class="mb-0">Our current service rout portfolio ranges a area that covers primarily the Middle Est.</p>
                                    <a class="d-inline-block team-trigger1" href="javascript:void(0);" title="">Read Full Bio</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box position-relative w-100">
                                <div class="team-img overflow-hidden position-relative w-100"><a class="team-trigger2" href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-2.jpg" alt="Team Image 2"></a></div>
                                <div class="team-info w-100">
                                    <h4 class="mb-0"><a class="team-trigger2" href="javascript:void(0);" title="">Jacob Jones</a></h4>
                                    <span class="d-block">Creative Director</span>
                                    <p class="mb-0">Our current service rout portfolio ranges a area that covers primarily the Middle Est.</p>
                                    <a class="d-inline-block team-trigger2" href="javascript:void(0);" title="">Read Full Bio</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box position-relative w-100">
                                <div class="team-img overflow-hidden position-relative w-100"><a class="team-trigger3" href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-3.jpg" alt="Team Image 3"></a></div>
                                <div class="team-info w-100">
                                    <h4 class="mb-0"><a class="team-trigger3" href="javascript:void(0);" title="">Guy Hawkins</a></h4>
                                    <span class="d-block">Creative Director</span>
                                    <p class="mb-0">Our current service rout portfolio ranges a area that covers primarily the Middle Est.</p>
                                    <a class="d-inline-block team-trigger3" href="javascript:void(0);" title="">Read Full Bio</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="team-box position-relative w-100">
                                <div class="team-img overflow-hidden position-relative w-100"><a class="team-trigger4" href="javascript:void(0);" title=""><img class="img-fluid w-100" src="assets/images/resources/team-img1-4.jpg" alt="Team Image 4"></a></div>
                                <div class="team-info w-100">
                                    <h4 class="mb-0"><a class="team-trigger4" href="javascript:void(0);" title="">Annette Black</a></h4>
                                    <span class="d-block">Creative Director</span>
                                    <p class="mb-0">Our current service rout portfolio ranges a area that covers primarily the Middle Est.</p>
                                    <a class="d-inline-block team-trigger4" href="javascript:void(0);" title="">Read Full Bio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Team Wrap -->
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
                            <div class="testi-imgs-caro nav-style1 v2 mrg30">
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
        <div class="w-100 pt-120 pb-120 position-relative">
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


