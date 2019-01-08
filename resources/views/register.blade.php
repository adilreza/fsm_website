
@extends('layout.master')

@section('page_title','Registration | Frontier Semiconductor')

@section('registration_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Register</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	  <li>Features</li>
      <li>Register</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper login-wrapper">
<div class="container">
<div class="login-box">
  <div class="login-title">
    <h3>Sign up</h3>
  </div>
  <form>
    <div class="single-login-field">
      <input placeholder="Full Name" type="text">
    </div>
    <div class="single-login-field">
      <input placeholder="Email Addresss" type="email">
    </div>
    <div class="single-login-field">
      <input placeholder="Choose Password" type="password">
    </div>
    <div class="single-login-field">
      <input placeholder="Confirm Password" type="password">
    </div>
    <div class="remember-row single-login-field clearfix">
      <p class="checkbox remember">
        <input class="checkbox-spin" id="Freelance" type="checkbox">
        <label for="Freelance"><span></span>accept terms &amp; condition</label>
      </p>
    </div>
    <div class="single-login-field">
      <button class="bttn" type="submit">Sign Up</button>
    </div>
  </form>
  <div class="dont_have"> <a href="login.html">Already have an account?</a> </div>
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
