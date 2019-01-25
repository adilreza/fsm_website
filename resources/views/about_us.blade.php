@extends('layout.master')

@section('page_title','FSM | About Us')

@section('about_us_page')
@section('custome_static')
<link rel="stylesheet" href="{{URL::asset('fsm_all_web_file/assets/font-awesome/font-awesome/css/font-awesome.min.css')}}">
@endsection
 

<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>About Us</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
	  <li>Pages</li>
      <li>About Us</li>
    </ul>
  </div>
</div>

<style type="text/css">
  .facebook{
    padding:2px;
    text-align: center;
    font-size: 14px;
  }
</style>

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper about-wrapper">

  <div class="container">
    <h3 style="color:" class="text-primary">About Frontier Semiconductor</h3>
    <hr/>
    <p style="font-size:17px;">Frontier Semiconductor&nbsp;is the leading manufacturer of stress measurement tools for semiconductor, MEMS, optoelectronic, and flat panel applications. Stress and wafer bow maps can be acquired over the entire wafer surface, providing process engineers means to characterize and develop new processes using different thin film materials
    <br>
    <br>
    Frontier Semiconductor (FSM), offers a range of advanced metrology products and solutions for semiconductor, LED, Solar, FPD, Data Storage and MEMS applications. We have over 25 years experience in stress measurement, film adhesion testing, wafer topography metrology, and electrical characterization. Our latest offerings include unique technology to meet the metrology needs of 3DIC manufacturing and to monitor stress of large flat panels.


  </p>

  </div>

  <div class="container">
      
          <div class="heading">
            <h2>Meet Our Team</h2>
            <hr>
          </div>
          <div class="row text-center">
            <div class="col-md-3">

                <div data-animate="fadeInUp" class="team-member">
                <div class="image"><a href="team-member.html"><img style="height:220px; width:200px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member1.jpg')}}" alt="" class="img-fluid rounded-circle" ></a></div>
                    <h4><a href="team-member.html">Han Solo</a></h4>
                    <p class="role">Founder</p>
                    <ul class="social list-inline">
                      <li class="list-inline-item"><a href="#" class="external facebook"><i style="color:#3b5998;font-size:22px;" class="fab fa-facebook"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external gplus"><i style="color:tomato;font-size:22px;" class="fab fa-google-plus"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:##38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="email"><i class="fa  fa-envelope"></i></a></li>
                    </ul>
                    <div class="text">
                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div data-animate="fadeInUp" class="team-member">
                    <div class="image"><a href="team-member.html"><img style="height:220px;width:200px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member2.jpg')}}" alt="" class="img-fluid rounded-circle" ></a></div>
                        <h4><a href="team-member.html">ADIL REZA</a></h4>
                        <p class="role">CTO</p>
                        <ul class="social list-inline">
                          <li class="list-inline-item"><a href="#" class="external facebook"><i style="color:#3b5998;font-size:22px;" class="fab fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="external gplus"><i style="color:tomato;font-size:22px;" class="fab fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:##38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="email"><i class="fa  fa-envelope"></i></a></li>
                        </ul>
                        <div class="text">
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">

                <div data-animate="fadeInUp" class="team-member">
                    <div class="image"><a href="team-member.html"><img style="height:220px;width:200px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member3.jpg')}}" alt="" class="img-fluid rounded-circle" ></a></div>
                        <h4><a href="team-member.html">PRINCESS LEIA</a></h4>
                        <p class="role">Team Leader</p>
                        <ul class="social list-inline">
                          <li class="list-inline-item"><a href="#" class="external facebook"><i style="color:#3b5998 ;font-size:22px;" class="fab fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="external gplus"><i style="color:tomato;font-size:22px;" class="fab fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:##38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <div class="text">
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>

            </div>
            <div class="col-md-3">

                <div data-animate="fadeInUp" class="team-member">
                    <div class="image"><a href="team-member.html"><img style="height:220px;width:200px;" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member4.jpg')}}" alt="" class="img-fluid rounded-circle" ></a></div>
                        <h4><a href="team-member.html">LUKE SKYWAL</a></h4>
                        <p class="role">Lead Developer</p>
                        <ul class="social list-inline">
                          <li class="list-inline-item"><a href="#" class="external facebook"><i style="color:#3b5998 ;font-size:22px;" class="fab fa-facebook"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="external gplus"><i style="color:tomato;font-size:22px;" class="fab fa-google-plus"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="external twitter"><i style="background:##38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="email"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                        <div class="text">
                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                        </div>
                    </div>

            </div>
          </div>
          

  </div>





<div class="container">


<div class="row">

<div class="col-lg-12 col-md-12">
<div class="about-sec mt-5">
  <h3 class="text-center text-primary">31 Year’s of Experience</h3>
  <div class="separator mt-3"></div>
</div>
<div class="tab-box mb-30 text-center">
  <ul class="tab-list">
    <li><a href="#tab-one" class="tab-btn active-btn">Our Mision</a></li>
    <li><a href="#tab-two" class="tab-btn">Our Vision</a></li>
    <li><a href="#tab-three" class="tab-btn">Our Objectives</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-item active-tab" id="tab-one">
      <div class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
    </div>
    <div class="tab-item" id="tab-two">
      <div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</div>
    </div>
    <div class="tab-item" id="tab-three">
      <div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</div>
    </div>
  </div>
</div>
<!-- end tab -->
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
<!-- News Letter Wrapper End -->

@endsection