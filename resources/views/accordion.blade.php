@extends('layout.master')

@section('page_title','Accordion | Frontier Semiconductor')

@section('aacordion_page')
 


<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Accordion</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Extras</li>
      <li>Accordion</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper accordion-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12">
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
      <div class="col-lg-6 col-md-12">
        <div id="accordion" class="accordion-new">
          <div class="card">
            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menuonee" aria-expanded="false" aria-controls="menuone">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menuonee" class="collapse">
              <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
            </div>
          </div>
		  <br>
          <div class="card">
            <div class="card-header"> <a class="card-link current" data-toggle="collapse"  href="#menu31" aria-expanded="true" aria-controls="menu3">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menu31" class="collapse show">
              <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-header"> <a class="card-link" data-toggle="collapse"  href="#menutwoo" aria-expanded="false" aria-controls="menutwo">Which services you will get?<span class="collapsed"><i class='icofont-long-arrow-right'></i></span> <span class="expanded"><i class='icofont-long-arrow-down'></i></span></a> </div>
            <div id="menutwoo" class="collapse">
              <div class="card-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget fringilla erat. Morbi tempor diam a est cursus eleifend. Integer odio nisi, porta ac dui vel, elementum aliquet massa.Lorem ipsum dolor sit amet. </div>
            </div>
          </div>
        </div>
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
      <a href="#" class="bttn">RFI / RFP</a> </div>
  </div>
</div>
<!-- Our CTA Wrapper End --> 

@endsection