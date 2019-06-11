<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('page_title')</title>

<link href="{{ URL::asset('fsm_all_web_file/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/style.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/zestostyle.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/one.css') }}" id="style_theme" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/assets/owl-carousel/css/owl.carousel.min.css')}}" rel ="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}">

<style>
  #chet{
    display: none;
  }
  @media only screen and (max-width : 990px) {
    #chet{
    display: block;
    
  }
  #chet a{
    margin-left:20px;
    text-decoration: italic;
    font-size:15px; 
  }
}

</style>


<!-- page independent js or css file -->
  @yield('custome_static')

<!-- end of file inclusion -->


</head>
<body>
<!-- Pre Loader -->
<div id="dvLoadingg"></div>

<script>

</script>



<header class="daz-header header mobile-nav">
		<div class="topbar bg-default text-white" style="background:#f5f6fa;">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul class="top-author-link">
							<li><a href="about-1.html">Welcome To Frontier Semiconductor</a></li>
						
						</ul>
					</div>
					<div class="topbar-right topbar-social">
						<ul>
							<li><a href="#" class="site-button-link facebook hover"><i class="far fa-envelope" style="color:#4AC8ED;"></i> fsm100@frontiersemi.com</a></li>
							<li><a href="#" class="site-button-link facebook hover"><i class="fa fa-phone" style="color:#4AC8ED"></i> +1 408 432 8838</a></li>
						
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="header-sticky menu-bar-content navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="daz-logo">
                        <a class="main_sticky_main_l" href="{{route('index')}}" title="Frontier Semiconductor"><img src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}" alt="FSM"></a> 
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarLeft" aria-controls="navbarLeft" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    
                    <!-- Quik search -->
                    
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarLeft">
                        <ul class="nav navbar-nav">	
							<li class="active"><a href="{{route('index')}}">HOME</a>
								
							</li>
							<li><a href="{{URL::to('/product_list')}}">PRODUCTS</a>
								
							</li>
							<li><a href="{{URL::to('/application')}}">APPLICATIONS</a>
							
              </li>
              
							<li><a href="#">COMPANY<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="{{URL::to('/contact_us')}}" class="dez-page">Contact Us</a></li>
									<li><a href="{{route('about_us')}}" class="dez-page">About Us</a></li>
								
								</ul>
              </li>


              <li id="chet"><a href="{{URL::to('/contact_us')}}">Contact Us </a></li>
              <li id="chet"><a href="{{route('about_us')}}">About Us </a></li>

              <li><a href="{{URL::to('/library')}}">LIBRARY </a></li>
              
							
                @if(empty(session('user_name')))
                <li><a href="#">MY ACCOUNT<i class="fa fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                      <li><a href="{{URL::to('/user/register')}}" class="dez-page">REGISTRATION</a></li>
                      <li><a href="{{URL::to('/user/login')}}" class="dez-page">LOGIN</a></li>
                        
                  </ul>
                </li>
                <li id="chet"><a href="{{URL::to('/user/register')}}" class="dez-page">REGISTRATION</a></li>
                <li id="chet"><a href="{{URL::to('/user/login')}}" class="dez-page">LOGIN</a></li>
                @endif
                @if(!empty(session('user_name')))
                  <li class=""><a href="{{URL::to('/fsm_client/dashboard')}}">MY ACCOUNT</a></li>
                @endif  
								
							
             
              
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>










@yield('index_page')

@yield('about_us_page')
@yield('contact_us_page')
@yield('login_page')
@yield('registration_page')
@yield('privacy_policy_page')
@yield('faq_page')
@yield('services_page')


@yield('aacordion_page')
@yield('product_fullwidth_page')
@yield('product_fullwidth2_page')
@yield('product_fullwidth3_page')

@yield('product_list_page')
@yield('product_list2_page')


@yield('appointment_page')

@yield('blog_classic_page')

@yield('product_details_page')

@yield('our_team_page')

@yield('m404_page')
@yield('m503_page')
@yield('film_stress_page')
@yield('tsv_process_control_page')
@yield('laser_scanning_page')
@yield('film_adhesion_page')
@yield('raman_spectroscopy')
@yield('thin_wafer_metrology')
@yield('low_coherence')
@yield('electrical_characterization')

@yield('application_page')
@yield('library_page')








<!-- common footer start -->

  <section class="newsletter" style="background:#F1F2F6!important">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-12">
          <h4><span class="text-primary">Subscribe</span> <br>
            For Latest <span class="text-primary">Update</span></h4>
        </div>
        <div class="col-lg-9 col-12">
        <form method="post" action="{{URL::to('/thank_you')}}" >
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
              <input required class="form-control" id="exampleInputName" placeholder="Your name" type="text" name="subscriber_name">
            </div>
            <div class="form-group">
              <input required class="form-control" id="exampleInputEmail" placeholder="Your email" type="email" name="subscriber_email">
            </div>
            <button type="submit" class="bttn">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- News Letter Wrapper End -->
  <!-- Testimonials Wrapper End -->
  <!-- Footer Wrapper End -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="footer-text"> 
           <a class="footer-logo" href="{{route('index')}}" title="Frontier Semiconductor"><img src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}" width="120px" height="60px" alt=""></a> 

            <p>Frontier Semiconductor is the leading manufacturer of stress measurement tools for semiconductor, MEMS, optoelectronic, and flat panel applications.</p>
            <div class="social-icons">  <a href="https://www.linkedin.com/company/frontier-semiconductor-fsm-/about/" class="bttn"><i class="fab fa-linkedin"></i></a> <a href="https://web.facebook.com/fsmofp" class="bttn"> <i class="fab fa-facebook"></i> </a> </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-3">
          <div class="links">
            <h3>Links</h3>
            <ul class="">
            <li><a href="{{route('index')}}">Home Page</a></li>
            <li><a href="{{route('about_us')}}">About Us</a></li>
            <li><a href="{{route('contact_us')}}">Contact Us</a></li>
            <li><a href="{{route('services')}}">Our Services</a></li>
           
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-md-3">
          <div class="location">
            <h3>Location</h3>
            <ul>
              <li>Corporate Head Office. </li>
              <li><i class="fa fa-home"></i>165 Topaz st., Milpitas, CA 95035 </li>
              <li><i class="fa fa-phone"></i> <a href="#">+1 408 432 8838</a></li>
              <li><i class="fa fa-envelope"></i> <a href="mailto:">fsm100@frontiersemi.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-md-12">
          <div class="instagram">
            <h3>Instagram</h3>
            <hr style="width:90%;background:darkgrey;">
            <ul class="row gram-image">
              <li class="col-xs-4 col-4"><a href="#"><img  style="height:110px;width:80px;"  alt="" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C.PNG')}}"></a></li>
              <li class="col-xs-4 col-4"><a href="#"><img  style="height:110px;width:80px;"  alt="" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_C2C.png')}}"></a></li>
              <li class="col-xs-4 col-4"><a href="#"><img  style="height:110px;width:80px;"  alt="" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_VIT_C2C.PNG')}}"></a></li>
              
            </ul>
          </div>
        </div>
        
        <!-- BACK TO TOP BUTTON --> 
        <!-- COPY RIGHT --> 
      </div>
      <div class="copyright">
        <hr>
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <div class="copyRight_text text-center">
              <p>Copyright  &copy; <span id="year"></span> Frontier Semiconductor.  All rights reserved </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery-min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/plugins.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery.animateNumber.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/bootstrap/js/bootstrap.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/owl-carousel/js/owl.carousel.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/wow/wow.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery.mainmenu.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/jquery.nivo.slider.pack.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/assets/jquery/magnific-popup.min.js') }}"></script> 
  <script src="{{ URL::asset('fsm_all_web_file/js/custom.js') }}"></script>
  
  @yield('custome_js_file')

  </body>
  </html>