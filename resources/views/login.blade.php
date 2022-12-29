@extends('layout.master')
@section('title')
    Login
@endsection
@section('main')
    <section>
        <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
            <div class="lg-rg-img position-relative">
                <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
                <div class="logo"><h1 class="mb-0"><a href="index.blade.php" title="Home"><img src="assets/images/logo.svg" alt="Logo"></a></h1></div><!-- Logo -->
            </div>
            <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
                <div class="lg-rg-form-top align-items-center justify-content-end d-flex flex-wrap w-100">
                    <p class="mb-0">Not a member? <a class="theme-btn bg-color4" href="signup.blade.php" title="">Sign Up Now<span></span><span></span><span></span><span></span></a></p>
                </div>
                <div class="lg-rg-form-inner w-100">
                    <h2 class="mb-0">Sign in to LIAMI</h2>
                    <p class="mb-0">Enter your detail below</p>
                    <form>
                        <div class="field-box v2 position-relative w-100">
                            <label>Email</label>
                            <input type="email">
                        </div>
                        <div class="field-box v2 position-relative w-100">
                            <label>Password</label>
                            <input type="password">
                        </div>
                        <div class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                            <button class="theme-btn bg-color1" type="submit">Sign In<span></span><span></span><span></span><span></span></button>
                            <a class="d-inline-block simple-btn" href="forgot-password.blade.php" title="">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Login & Register Wrap -->
    </section>
@endsection

