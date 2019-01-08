@extends('layout.master')

@section('page_title','Contact Us | Frontier Semiconductor')

@section('contact_us_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Contact Us</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Contact Us</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper contactus-wrapper">
<div class="container">
<div class="row">
  <div class="col-lg-7 mb-30">
    <div class="default-form-area">
      <h1>Send A Message</h1>
      <form id="contact-form" name="contact_form" class="contact-form style-five" action="inc/sendmail.php" method="post" novalidate>
        <div class="row clearfix">
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Name</label>
              <input name="form_name" class="form-control" value="" placeholder="" required type="text">
            </div>
          </div>
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Email</label>
              <input name="form_email" class="form-control required email" value="" placeholder="" required  type="email">
            </div>
          </div>
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Phone</label>
              <input name="form_phone" class="form-control" value="" placeholder="" type="text">
            </div>
          </div>
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Services</label>
              <input name="form_subject" class="form-control" value="" placeholder="" type="text">
            </div>
          </div>
          <div class="col-md-12 column">
            <div class="form-group">
              <label>Message</label>
              <textarea name="form_message" class="form-control textarea required" placeholder="" ></textarea>
            </div>
          </div>
        </div>
        <div class="contact-section-btn">
          <div class="form-group style-two">
            <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
            <button class="bttn" type="submit" data-loading-text="Please wait...">Submit Now</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="col-lg-5 mb-md-5 pl-lg-5">
    <div class="title">
      <h4>Address Information</h4>
      <div class="text mb-3">Frontier Semiconductor moved to its new location: 165 Topaz St., Milpitas, CA 95035, USA.
        May 01, 2018</div>
    </div>
    <ul class="contact-info-list">
      <li><span class="fa fa-map"></span><b>Address</b>165 Topaz st., Milpitas, CA 95035</li>
      <li><span class="fa fa-envelope"></span><b>Email</b>fsm100@frontiersemi.com</li>
      <li><span class="fa fa-phone"></span><b>Phone / Fax</b>+1 408 432 8838</li>
    </ul>
    <ul class="social-icon-three">
      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
  </div>
</div>

</div>
</div>
<!-- Inner Page Wrapper End -->
<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
<div class="container">
<div class="cta-content">
<h2>Your request for Information or proposal</h2>
<a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">RFP / RFI</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection
