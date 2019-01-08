@extends('layout.master')

@section('page_title','Appointment | Frontier Semiconductor')

@section('appointment_page')
 


<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Appointment</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	  <li>Pages</li>
      <li>Appointment</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper appointment-wrapper">
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <form>
        <div class="row row-seven row-30">
          <div class="col-md-6">
            <div class="form-wrap">
              <input type="text" name="name" class="form-input form-control-has-validation">
              <label for="appointment-name" class="form-label rd-input-label">Name</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-wrap">
              <input type="email" name="email" class="form-input form-control-has-validation">
              <label for="appointment-email" class="form-label rd-input-label">Email</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-wrap">
              <input type="text" name="date" class="form-input form-control-has-validation">
              <label for="appointment-date" class="form-label rd-input-label">Date</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-wrap">
              <input type="text" class="form-input form-control-has-validation">
              <label for="appointment-time" class="form-label rd-input-label">Time Interval</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-wrap">
              <div class="textarea-lined-wrap has-error">
                <textarea name="message" class="form-input form-control-has-validation"></textarea>
                <label for="appointment-message" class="form-label rd-input-label">Message</label>
              </div>
            </div>
          </div>
		  <div class="col-md-12 clearfix">
			<button type="submit" class="bttn">Send</button>
		</div>
        </div>
      </form>
    </div>
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