@extends('layout.master')

@section('page_title','Log In | Frontier Semiconductor')

@section('login_page')
 


<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Login</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	  <li>Features</li>
      <li>Login</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper login-wrapper">
<div class="container">
<div class="login-box">
    <div class="login-title">
      <h3>Sign in</h3>
    </div>
    <form>
      <div class="single-login-field">
        <input placeholder="Email Address" type="email">
      </div>
      <div class="single-login-field">
        <input placeholder="Password" type="password">
      </div>
      <div class="remember-row single-login-field clearfix">
        <p class="checkbox remember">
          <input class="checkbox-spin" id="Freelance" type="checkbox">
          <label for="Freelance"><span></span>Keep Me Signed In</label>
        </p>
        <p class="lost-pass"> <a href="#">forgot password?</a> </p>
      </div>
      <div class="single-login-field">
        <button class="bttn" type="submit">Sign in</button>
      </div>
    </form>
    <div class="dont_have"> <a href="register.html">Don't have an account?</a> </div>
  </div>
</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Do you Need This Template. Please Download Now!</h2>
<a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection
