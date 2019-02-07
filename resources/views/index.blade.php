@extends('layout.master')

@section('page_title', "Homepage | Frontier Semicondructor")
@section('custome_static')
<link href="{{ URL::asset('fsm_all_web_file/css/customer_slider_css.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/fsm_work/dist/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
@endsection

@section('index_page')
    


 <!-- SLIDER  AREA Start -->
<div class="main-slider-area">
  <div class="container-fluid">
    <div class="row">
      <div class="sb-nivo-slider-wrapper kc-elm kc-css-242493">
        <div id="mainSlider" class="nivoSlider sb-slider-image"> 
        <img  src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/slider/back_slide7e.jpg')}}" alt="" title="#htmlcaption1_30"/>
		<img src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/slider/back_slide8e.jpg')}}" alt="" title="#htmlcaption1_28" /> </div>
        <!-- sb-slider style-1 start -->
        <div id="htmlcaption1_30" class="nivo-html-caption sb-slider-content-nivo">
          <div class="sb-slider_inner container  text-left">
            <div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0s">
              <h2 class="sb-slider-title">Welcome to Frontier Semiconductor</h2>
            </div>
            <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
              <h1 class="sb-slider-sub-title"> Range of Advanced Metrology Products</h1>
            </div>
            <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
              <h1 class="sb-slider-sub-title">We Are Creative </h1>
            </div>
            <div class="wow slideInRight" data-wow-duration="3s" data-wow-delay="0s">
              <p  class="sb-slider-descript"> We make solutions for semiconductor, LED, Solar, FPD, Data Storage and MEMS applications</p>
            </div>
            <div class="sb-slider-button wow bounceInUp sb-button-button-area" data-wow-duration="3s" data-wow-delay="0s"> <a class="sb-active-button" href="https://themeforest.net/user/sbtechnosoft/portfolio">SEE DETAILS</a> </div>
          </div>
        </div>
        <!-- sb-slider style-1 end --> 
        
        <!-- sb-slider style-1 start -->
        <div id="htmlcaption1_28" class="nivo-html-caption sb-slider-content-nivo">
          <div class="sb-slider_inner container">
            <div class="wow fadeInUpBig" data-wow-duration="1.2s" data-wow-delay="0s">
              <h2 class="sb-slider-title">Welcome to Frontier Semicondructor</h2>
            </div>
            <div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0s">
              <h1 class="sb-slider-sub-title">Range of Advanced Metrology Products</h1>
            </div>
            <div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0s">
              <p  class="sb-slider-descript">We have over 25 years experience in stress measurement, film adhesion testing, wafer topography metrology, and electrical characterization</p>
            </div>
            <div class="sb-slider-button wow  bounceInUp  sb-button-button-area" data-wow-duration="3s" data-wow-delay="0.5s"> <a class="sb-active-button" href="https://themeforest.net/user/sbtechnosoft/portfolio">SEE DETAILS</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Slider Wrapper End -->
<!-- Our Featured Wrapper Start 
<div class="featured-wrapper">

</div>
Our Featured Wrapper Start -->
<!-- Our Services Wrapper Start -->
<section class="our-services-wrapper">
<div class="container">
<div class="section-title">
<h2>Applications Domains & Technology </h2>
<div class="separator"></div>
</div>
<div class="row">
<div class="col-md-6 col-lg-4">
  <div class="single-services">
    <div class="media"> <i class="mt-2 fas fa-balance-scale"></i>
    <div class="media-body"> <h3><a href="{{URL::to('film_stress')}}">Film Stress</a></h3>
        <p> Film stress and and wafer bow measurements are an integral part in the process of reliability monitor...
          </p>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6 col-lg-4">
  <div class="single-services">
    <div class="media"> <i class="mt-2 fas fa-compress-arrows-alt"></i>
    <div class="media-body"> <h3><a href="{{URL::to('film_adhesion')}}">Film Adhesion</a></h3>
        <p>Film adhesion tests are a critical step in film process development and reliability control...</p>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6 col-lg-4">
  <div class="single-services">
    <div class="media"> <i class="mt-2 fas fa-tasks"></i>
    <div class="media-body"> <h3><a href="{{URL::to('tsv_process_control')}}">3DIC TSV Process Control</a></h3>
        <p>3DIC manufacturing is facing enormous process control issues. FSM developed an innovative technology to..</p>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6 col-lg-4">
  <div class="single-services">
    <div class="media"> <i class="mt-2 fas fa-tools"></i>
      <div class="media-body"> <h3><a href="{{URL::to('raman_spectroscopy')}}">Raman Spectroscopy</a></h3>
        <p>The Raman effect is the inelastic scattering of photons. The shift in energy gives information about the vibrational modes....</p>
      </div>
    </div>
  </div>
</div>
<div class="col-md-6 col-lg-4">
  <div class="single-services">
    <div class="media"> <i class="mt-2 fas fa-cogs"></i>
      <div class="media-body"> <h3><a href="{{URL::to('laser_scanning')}}">Laser Scanning</a></h3>
        <p>FSM uses patented Laser Scanning technology to measure the radius of curvature and bow of wafers... </p>
      </div>
    </div>
  </div>
</div>

<div class="col-md-6 col-lg-4">
    <div class="single-services">
      <div class="media"> <i class="mt-2 fas fa-stroopwafel"></i>
        <div class="media-body"> <h3><a href="{{URL::to('/thin_wafer_metrology')}}">Thin wafer metrology</a></h3>
          <p>Thinning and backgrinding of wafers requires precise control of thickness, total thickness variation...</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-4">
    <div class="single-services">
      <div class="media"> <i class="mt-2 fas fa-microchip"></i>
        <div class="media-body"> <h3><a href="{{URL::to('/electrical_characterization')}}">Electrical Characterization</a></h3>
          <p>In IC device manufacturing electrical characteristics of layers and films must be well controlled...</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-6">
    <div class="single-services">
      <div class="media"> <i class="mt-2 fas fa-shapes"></i>
        <div class="media-body"> <h3><a href="{{URL::to('low_coherence')}}">Low Coherence Interferometry</a></h3>
          <p>A Michelson Interferometer with a low coherence light source is used to determine distances: L2 is the beam path...</p>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</section>
<!-- Our Services Wrapper End -->
<!-- Our Team Wrapper Start 
<div class="our-team-wrapper">
<div class="container">
<div class="row">
<div class="col-xl-4 col-md-5">
<div class="business-title-left">
<h2>Team Members</h2>
<span class="title-border-left"></span>
</div>
<div class="team-members-left">
<p>At vero eos et accusamus et iusto odioarweres dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecatisdgh cupiditate nonprovident dfgdftr.</p>
<a href="javascript:void(0)" class="bttn">Check Our Team</a> </div>
</div>
<div class="col-xl-8 col-md-7">
<div class="team-members-right">
<div class="owl-carousel team-members">
  <div class="item hover01">
  <figure><img  height="260px" width="290px"   src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member1.jpg')}}" alt="" class=""></figure>
    <div class="team-caption">
	<a href="#">Jhon Smith</a>
    <h3>CEO</h3>
	</div>
  </div>
  <div class="item hover01">
    <figure><img height="260px" width="290px"   src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member2.jpg')}}" alt="" class=""></figure>
    <div class="team-caption">
	<h3><a href="#">Jhon Smith</a></h3>
    <p>COO</p>
	</div>
  </div>
  <div class="item hover01">
    <figure><img  height="260px" width="290px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member3.jpg')}}" alt="" class=""></figure>
    <div class="team-caption">
	<h3><a href="#">Jhon Smith</a></h3>
    <p>CTO</p>
	</div>
  </div>
  <div class="item hover01">
    <figure><img height="260px" width="290px"   src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member4.jpg')}}" alt="" class=""></figure>
    <div class="team-caption">
	<h3><a href="#">Jhon Smith</a></h3>
    <p>CFO</p>
	</div>
  </div>
  <div class="item hover01">
    <figure><img  height="260px" width="290px"  src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_team/fsm_team_member5.jpeg')}}" alt="" class=""></figure>
    <div class="team-caption">
	<h3><a href="#">Jhon Smith</a></h3>
    <p>Director</p>
	</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
 Our Team Wrapper End -->
<!-- Numbering Wrapper Start -->
<div class="counter-wrapper">
  <div class="container text-center">
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="counter">
          <div class="counter-icon-box">
		 <div class="counter-icon">
		 <div class="icon"><a href="#"><i class="icon icon-clock"></i></a></div>
		 </div>
          <div class="count-description">
		  <div class="number animateNumber" data-num="21"> <span>21+</span></div>
          <p>Total Products</p>
        </div>
		</div>
      </div>
	  </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter">
          <div class="counter-icon-box">
		 <div class="counter-icon">
		 <div class="icon"><a href="#"><i class="icon icon-mobile"></i></a></div>
		 </div>
          <div class="count-description">
		  <div class="number animateNumber" data-num="585"> <span>585+</span></div>
          <p>Total Served Proudct</p>
        </div>
		</div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter">
          <div class="counter-icon-box">
		 <div class="counter-icon">
		 <div class="icon"><a href="#"><i class="icon icon-presentation"></i></a></div>
		 </div>
          <div class="count-description">
		  <div class="number animateNumber" data-num="2"> <span>2+</span></div>
          <p>Running Product</p>
        </div>
		</div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter">
          <div class="counter-icon-box">
		 <div class="counter-icon">
		 <div class="icon"><a href="#"><i class="icon icon-trophy"></i></a></div>
		 </div>
          <div class="count-description">
		  <div class="number animateNumber" data-num="775"> <span>35+</span></div>
          <p>Awards Won</p>
        </div>
		</div>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- Numbering Wrapper End -->
<!-- Our Blog Wrapper Start -->
<div class="blog-wrapper">
<div class="container">
<div class="section-title">
<h2><i> <b>Our Featured Product</b></i></h2>
<div class="separator"></div>
</div>
<div class="row">
<div class="col-md-6">
<div class="blog_box_wrapper">
  <div class="blog_img_wraper text-center"> <img height="420px" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_413_C2C.png')}}" alt=""> </div>
  <div class="blog_icon_overlay">
    <ul>
      <li> 19 <span> JUNE</span> </li>
      <li> 02 <span> COM.</span> </li>
     
    </ul>
  </div>
  <div class="blog_btm_cntnt">
    <h2>Featured 413 C2C</h2>
    <p class="pad-b-10">Thickness and total thickness variation (TTV) mapping system. TTV and Thickness of wafer substrate, thick layers, wafers on tape, bonded wafers, etc. Fully automated cassette to cassette system, SECS/GEM..</p>
    <a href="{{URL::to('/product_413_C2C')}}" class="tb_toppadder20">read more</a> </div>
</div>
</div>
<div class="col-md-6">
<div class="blog_box_wrapper">
  <div class="blog_img_wraper text-center" > <img height="420px" class="text-center" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C.PNG')}}" alt=""> </div>
  <div class="blog_icon_overlay">
    <ul>
      <li> 19 <span> JUNE</span> </li>
      <li> 02 <span> COM.</span> </li>
     
    </ul>
  </div>
  <div class="blog_btm_cntnt">
    <h2>Featured 128 C2C</h2>
    <p class="pad-b-10">Dedicated Film Stress mapping system with high resolution for high throughput process control. Fully automated cassette to cassette, SECS/GEM compliant 300mm Film Stress and Bow Measurement tool....</p>
    <a href="{{URL::to('/product_128L_C2C')}}" class="tb_toppadder20">read more</a> </div>
</div>
</div>
</div>
</div>
</div>
<!-- Our Blog Wrapper End -->


<div class="container-fluid" style="width:96%">


    <h3 class="text-center">OUR CLIENTS</h3>
    <div class="separator"></div>
      <br/>


    <ul id="flexiselDemo3">
        <li><img width="130px" height="90px" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_customer/mit_logo.png') }}" /></li>
        <li><img width="130px" height="90px" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_customer/nasa_logo.png') }}" /></li>
        <li><img width="130px" height="90px" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_customer/samsung.png') }}" /></li>
        <li><img width="130px" height="90px" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_customer/fujitsu.png') }}" /></li>
        <li><img width="130px" height="90px" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_customer/amd_logo.png') }}" /></li> 
        <li><img width="130px" height="90px" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/fsm_customer/sony_logo.png') }}" /></li>                                                  
    </ul>    
    
    <br/>  
    
    
</div>



<!-- Our Blog Wrapper End -->
<div class="container" style="margin-top:160px;">
  <h3 class="text-center" style="margin-top:80px;">Our Branch & Distributor</h3>
    <div class="separator"></div>

</div>

<div class="containerrr text-center" style="width: 96%;margin-top:80px; margin-left:23px; ">
  <div class="row">
    <div id="vmap" class="col-md-8" style="height: 380px;background:blueviolet; border-radius:15px 0px 0px 15px;"></div>
    <div id="name" class="col-md-4" style="box-shadow: 1px 1px 1px 1px #bdc3c7;padding-bottom: 50px;border-radius: 3px;"></div>

  </div>

</div>








@endsection

@section('custome_js_file')

<script src="{{ URL::asset('fsm_all_web_file/js/custome_js_adil.js') }}"></script>
    
    <script type="text/javascript" src="{{ URL::asset('fsm_all_web_file/fsm_work/dist/jquery.vmap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('fsm_all_web_file/fsm_work/dist/maps/jquery.vmap.world.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ URL::asset('fsm_all_web_file/fsm_work/js/jquery.vmap.sampledata.js') }}"></script>

    <script>




      jQuery(document).ready(function () {

        jQuery('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '#0a3d62',
          hoverOpacity: 0.7,
          selectedColor: '#EA2027',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#C8EEFF', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial',

          onRegionClick: function(event, code, region)
          {
            //$('#name').html(region+"("+code+")");

            if(code==="bd")
            {

              var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;font-size:22px;'>FSM IN BANGLADESH</h3>";
              var campanyName = "<span style='font-size:20px;'>DHAKA DOHS</span>";
              var type = "<span style='font-size:17px;'>Services & Engineering</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+86 20 83295780";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+86 20 83295780"
              var email = "<span style='color:blue;'>admin@apolloswing.com</span>";
              var newline ="<br/>";
              var address = "Room 2906, Fu Li Ying Building, No. 2 Huaqiang Road, Tianhe District"+newline+"Guanghou, China 510623";
              $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);

            }
            else if(code ==="us")
            {
              var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;'> AMERICA </h3>";
              var campanyName = "<span style='font-size:20px;'>FRONTIER SEMICONDUCTOR</span>";
              var type = "<span style='font-size:17px;'>Corporate Head Office</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+1 408 432 8838 ";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+1 408 232 1115"
              var email = "<span style='color:blue;'>fsm100@frontiersemi.com</span>";
              var newline ="<br/>";
              var address = "165 Topaz St.,"+newline+"Milpitas, CA 95035";


              
              $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);
              
            }
            else if(code === "cn")
            {

              var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;font-size:22px;'>FSM CHINA SALES REPRESENTATIVE</h3>";
              var campanyName = "<span style='font-size:20px;'>TONY HUANG</span>";
              var type = "<span style='font-size:17px;'>Sales & Services</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+86 20 83295780";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+86 20 83295780"
              var email = "<span style='color:blue;'>admin@apolloswing.com</span>";
              var newline ="<br/>";
              var address = "Room 2906, Fu Li Ying Building, No. 2 Huaqiang Road, Tianhe District"+newline+"Guanghou, China 510623";
              $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);


            }
            else if(code === "fr")
            {
              var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;'>FSM EUROPE</h3>";
              var campanyName = "<span style='font-size:20px;'>ADRIAN CAILEAN</span>";
              var type = "<span style='font-size:17px;'>Sales & Service</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+33 (0) 676 494 487";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+33(0)4 76 35 77 61 "
              var email = "<span style='color:blue;'>adrianc@frontiersemi.com</span>";
              var newline ="<br/>";
              var address = "196C Rue du Rocher de Lorzier, 38430 Moirans, France";
              $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);


            }
            else if(code === "tw")
            {

              var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;'> FSM TAIWAN</h3>";
              var campanyName = "<span style='font-size:20px;'>ALEX CHENG</span>";
              var type = "<span style='font-size:17px;'>Sales & Service</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+886-3-658-7061";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+886-3-658-9600"
              var email = "<span style='color:blue;'>AlexCgeng@frontiersemi.com</span>";
              var newline ="<br/>";
              var address = "Jhubei City, Hsinchu County 302, Taiwan(R.O.C)";
              $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);

            }
            else if(code === "kr")
            {
              var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;'> FSM KOREA</h3>";
              var campanyName = "<span style='font-size:20px;'>SHAWN(SUNG-HYUN) KWON</span>";
              var type = "<span style='font-size:17px;'>Sales & Service</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+82-31-8015-5458";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+82-31-8015-5459"
              var email = "<span style='color:blue;'>shawnk@frontiersemi.com</span>";
              var newline ="<br/>";
              var address = "#310, Dongtan Paragon-II 106-1, Bansong-dong, Hwasung-si"+newline+"Gyeonggi-do, Korea, 18455";
              $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);


            }
            else
            {
              $('#name').html(region+"("+code+")");

            }

          }

      //     onRegionClick: function(element, code, region)
		    // {
		    //     var message = 'You clicked "'
		    //         + region
		    //         + '" which has the code: '
		    //         + code.toUpperCase();

		    //     alert(message);
		    // }

        });
        

        var newline ="<br/>";
              var line = "<hr>"
              var title ="<h3 style='color:green;'> AMERICA </h3>";
              var campanyName = "<span style='font-size:20px;'>FRONTIER SEMICONDUCTOR</span>";
              var type = "<span style='font-size:17px;'>Corporate Head Office</span>";
              var telePhone = "<span style='font-weight:bold'>Tel: </span>"+"+1 408 432 8838 ";
              var fax = "<span style='font-weight:bold'>Fax: </span>"+"+1 408 232 1115"
              var email = "<span style='color:blue;'>fsm100@frontiersemi.com</span>";
              var newline ="<br/>";
              var address = "165 Topaz St.,"+newline+"Milpitas, CA 95035";
               $('#name').html(title+line+campanyName+newline+type+newline+newline+telePhone+newline+fax+newline+email+newline+newline+address);



        
        var colorr = "#009432";
        jQuery('#vmap').vectorMap('set', 'colors', { cn: colorr, us: colorr, bd: colorr, ph: colorr, id:colorr, tw: colorr, fr: colorr, kr: colorr });


      });


    
    </script>

@endsection