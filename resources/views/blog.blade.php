@extends('layout.master')
@section('title')
    Blog
@endsection
@section('main')
    <section>
        <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.blade.php" title="">Home</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
                <div class="page-title w-100">
                    <span class="d-block text-color4">- Blog</span>
                    <h2 class="mb-0">Explore Our Blog</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="posts-wrap2 position-relative w-100">
                    <div class="post-box v2 text-center w-100">
                        <div class="post-info w-100">
                            <span class="post-cate d-block"><a href="javascript:void(0);" title="">fashion</a><a href="javascript:void(0);" title="">trend</a></span>
                            <h3 class="mb-0"><a href="blog-detail.blade.php" title="">Sustainable tote bag hashtag <span class="badge bg-color1 rounded-pill">Featured</span></a></h3>
                            <span class="post-date d-block">By <a class="text-color1" href="javascript:void(0);" title="">admin</a> on June 16, 2021</span>
                        </div>
                        <div class="post-img overflow-hidden position-relative w-100">
                            <a href="blog-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img2-1.jpg" alt="Post Image 1"></a>
                        </div>
                        <div class="post-cont w-100">
                            <p class="mb-0">We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives.</p>
                        </div>
                    </div>
                    <div class="post-box v2 text-center w-100">
                        <div class="post-info w-100">
                            <span class="post-cate d-block"><a href="javascript:void(0);" title="">trend</a><a href="javascript:void(0);" title="">fashion</a><a href="javascript:void(0);" title="">travel</a></span>
                            <h3 class="mb-0"><a href="blog-detail2.blade.php" title="">Mixtape hammock distillery</a></h3>
                            <span class="post-date d-block">By <a class="text-color1" href="javascript:void(0);" title="">admin</a> on June 16, 2021</span>
                        </div>
                        <div class="post-img overflow-hidden position-relative w-100">
                            <a href="blog-detail2.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img2-2.jpg" alt="Post Image 2"></a>
                        </div>
                        <div class="post-cont w-100">
                            <p class="mb-0">Were from the funny the century initial all the made, have spare to negatives.</p>
                        </div>
                    </div>
                    <div class="post-box v2 text-center w-100">
                        <div class="post-info w-100">
                            <span class="post-cate d-block"><a href="javascript:void(0);" title="">fashion</a></span>
                            <h3 class="mb-0"><a href="blog-detail.blade.php" title="">Brooklyn cold-pressed organic</a></h3>
                            <span class="post-date d-block">By <a class="text-color1" href="javascript:void(0);" title="">admin</a> on June 16, 2021</span>
                        </div>
                        <div class="post-img overflow-hidden position-relative w-100">
                            <a href="blog-detail.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img2-3.jpg" alt="Post Image 3"></a>
                        </div>
                        <div class="post-cont w-100">
                            <p class="mb-0">Our working workflow processes were from the funny the century initial all the made, have spare to negatives.</p>
                        </div>
                    </div>
                    <div class="post-box v2 text-center w-100">
                        <div class="post-info w-100">
                            <span class="post-cate d-block"><a href="javascript:void(0);" title="">fashion</a><a href="javascript:void(0);" title="">trend</a></span>
                            <h3 class="mb-0"><a href="blog-detail2.blade.php" title="">Gluten-free activated charcoal austin</a></h3>
                            <span class="post-date d-block">By <a class="text-color1" href="javascript:void(0);" title="">admin</a> on June 16, 2021</span>
                        </div>
                        <div class="post-img overflow-hidden position-relative w-100">
                            <a href="blog-detail2.blade.php" title=""><img class="img-fluid w-100" src="assets/images/resources/post-img2-4.jpg" alt="Post Image 4"></a>
                        </div>
                        <div class="post-cont w-100">
                            <p class="mb-0">Were from the funny the century initial all the made, have spare to negativesWe’ve created a full-stack structure.</p>
                        </div>
                    </div>
                </div><!-- Posts Wrap -->
                <div class="view-more d-block mt-60 position-relative text-center w-100">
                    <a class="theme-btn bg-color1 brd-btn" href="blog2.blade.php" title="">Load More<span></span><span></span><span></span><span></span></a>
                </div><!-- View More -->
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

 