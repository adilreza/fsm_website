@extends('layout.master')

@section('page_title','FAQ | Frontier Semiconductor')

@section('faq_page')
 
<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>FAQ</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Pages</li>
      <li>FAQ</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper faq-wrapper">
  <div class="container">
    <h2>Have a question?</h2>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="faq-block"> <span class="icon icofont-headphone-alt"></span>
          <h3>Contact us <br>
            <span>+ 01 555 222 457</span></h3>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="faq-block"> <span class="icon icofont-email"></span>
          <h3>Email us <br>
            <span>info@gmail.com</span></h3>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="faq-block"> <span class="icon icofont-support-faq"></span>
          <h3>Ask us <br>
            <span>Help Desk</span></h3>
        </div>
      </div>
    </div>
	<div class="row"> 
  <!-- Faq Section --> 
  <div class="col-lg-6 col-12">
    <div class="faq-accordion">
	<h3>FAQ’s</h3>
      <div id="accordion">
        <div class="card">
          <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="false" aria-controls="menuone">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
          <div id="menuone" class="collapse">
            <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
          <div id="menutwo" class="collapse">
            <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu3" aria-expanded="true" aria-controls="menu3">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
          <div id="menu3" class="collapse show">
            <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Faq Section --> 
  <!-- Testimonial Section -->
  <div class="col-lg-6 col-12">
    <div class="faq-testimoni">
	<h3>Testimonials</h3>
      <!-- Start Col -->
      <div class="col-12 faq-testi">
        <div id="testimonial-2" class="owl-carousel owl-theme">
          <div class="item">
            <div class="client-area text-center">
              <div class="faq-client-photo p-md-0  "> <img src="images/comments1.png" alt=""> </div>
              <div class="client-details p-md-0 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. , porta ac dui vel, porta ac dui vel elementum aliquet massa.</p>
                <span><strong>- Jhon Abraham</strong></span>
                <p>Envato Customer</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="client-area text-center">
              <div class="faq-client-photo p-md-0 "> <img src="images/comments2.png" alt=""> </div>
              <div class="client-details p-md-0 ">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. , porta ac dui vel, porta ac dui vel elementum aliquet massa.</p>
                <span><strong>- Jhon Abraham</strong></span>
                <p>Envato Customer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Col --> 
    </div>
  </div>
  <!-- Testimonial Section --> 
</div>
  </div>
</div>
<!-- Inner Page Wrapper End --> 
<!-- Our CTA Wrapper Start -->
<div class="our-cta-wrapper">
  <div class="container">
    <div class="cta-content">
      <h2>Do you Need This Template. Please Download Now!</h2>
      <a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a> </div>
  </div>
</div>
<!-- Our CTA Wrapper End -->

@endsection
