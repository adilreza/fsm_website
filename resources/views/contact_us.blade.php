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

        <h3>We are here to help you</h3>
        <hr style="width:70%;padding:0.5px;">
        <p>Are you curious about something? Do you have some kind of problem with our products? Want to contact with our team.
          <br>
          Please put down your Query and we will response soon.
        </p>
    
    </div>

    <br/>>
    <br/>
    <br/>

<div class="container">
<div class="row">
  <div class="col-lg-7 mb-30">
    <div class="default-form-area">
      <h1>Send A Message</h1>
    <form id="contact-form" name="contact_form" class="contact-form style-five" action="{{URL::to('/contact_us_message')}}" method="post" novalidate>
      <input name="_token" type="hidden" value="{{ csrf_token() }}"/>  
      <div class="row clearfix">
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Name <span style="color:red;">*</span></label>
              <input required name="contact_name" class="form-control" value="" placeholder="" required type="text">
            </div>
          </div>
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Email <span style="color:red;">*</span></label>
              <input required name="contact_email" class="form-control required email" value="" placeholder=""   type="email">
            </div>
          </div>
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Phone</label>
              <input required name="contact_phone" class="form-control" value="" placeholder="" type="text">
            </div>
          </div>
          <div class="col-md-6 column">
            <div class="form-group">
              <label>Services <span style="color:red;">*</span></label>
              <input required name="contact_subject" class="form-control" value="" placeholder="your service type" type="text">
            </div>
          </div>
          <div class="col-md-12 column">
            <div class="form-group">
              <label>Your Query</label>
              <textarea required name="contact_message" class="form-control textarea required" placeholder="" ></textarea>
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
  <h5 style="color:firebrick;">@if(!empty($successMsg)){{$successMsg}}@endif</h5>
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
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://web.facebook.com/fsmofp"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
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
<h2>Request for More Information</h2>
<a href="{{URL::to('/contact_us')}}" class="bttn">More Information</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->

@endsection
