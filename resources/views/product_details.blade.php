@extends('layout.master')

@section('page_title','Product Details | Frontier Semiconductor')

@section('product_details_page')
 


<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>128 SERIES</h1>
    <ul class="page-breadcrumb">
      <li><a href="{{route('index')}}">Home</a></li>
	    <li>Product</li>
      <li>Product Details</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper blog-wrapper">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12 col-xl-8">
<div class="blog_box_wrapper blog_box_padding posts">
  <div class="blog_img_wraper blog_img_wraper_2" > <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L.jpg')}}" alt=""> </div>
  <div class="blog_icon_overlay">
    <ul>
      <li> 10 <span> JUNE</span> </li>
      <li> 02 <span> COM.</span> </li>
      <li> <img class="img-responsive" src="http://via.placeholder.com/65x69/000/fff" alt="img"> </li>
    </ul>
  </div>
  <div class="btc_blog_cate_cont_wrapper">
    <h5>About 128L Product </h5>
    <hr style="background:#071E33;width:70%;">
    <br>
    <p>
        The FSM 128 Series systems are room temperature,  full-wafer 2D/3D stress mapping systems. 128 systems use FSM's patented non-contact Opti-Lever dual-laser auto-switching technology featuring a micropositioning detector to measure the laser beam deflection with high precision over a large dynamic range of small to large bow or stress. FSM's stress gauges have the ability to scan 1000 points per inch in seconds for high resolution, high precision stress mapping on blanked and patterned wafers.
        <br>
        <br>
        Film stress and wafer bow measurement for wafers up to 300mm wafer. 2D/3D stress mapping standard. Semi-automated system with convenient wafer loading and retrieval.
      
      </p>
    <div class="btc_blog_single_post_bottom_post_wrapper">
      <div class="btc_blog_single_post_quote_wrapper1"></div>
      <div class="btc_blog_single_post_quote_wrapper2"></div>
      <p>“Duis sed odio sit amet nibh vulputate cursus a sit mt mauris. Morbi accumsan ipsum velit. Nam nec tellus  odio tincidunt auctor a ornare.”</p>
      <div class="btc_testi_cont_bottom_line"></div>
      <h1>by <span>sunita due</span> (CEO,builder)</h1>
    </div>
    <div class="tb_abt_bottom_link_wrapper">
      <div class="tb_btm_link_left">
        <ul>
          <li>Tags:</li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Development</a></li>
          <li><a href="#">Testing</a></li>
        </ul>
      </div>
      <div class="tb_btm_link_right">
        <ul>
          <li>Share :</li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  <div class="comment-form">
      <br>
      <hr>
    <div class="title-g">
      <h3>Your Inquiry About Product</h3>
    </div>
    <form class="form" id="comment-form" method="post">
      <input name="form-name" value="contact-form" type="hidden">
      <div class="controls">
        <div class="row">
          <div class="col-md-6">
            <input id="form_name" name="name" placeholder="Name" required="" type="text">
          </div>
          <div class="col-md-6">
            <input id="form_email" name="email" placeholder="Email" required="" type="email">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea id="form_message" name="message" placeholder="Ask whatever you want to know" rows="4" required=""></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" class="bttn"><span>Send Message</span></button>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>
</div>
</div>
<div class="col-md-12 col-lg-12 col-xl-4">
  <div class="sidebar_widget">
    <h4> search <span> here </span> </h4>
    <form role="search" class="search_form">
      <div class="form-group">
        <input type="text" placeholder="Search here" class="form-control">
      </div>
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="sidebar_widget">
    <h4> Product <span> categories </span> </h4>
    <div class="archives_wrapper">
      <ul>
        <li> <a href="#"> architecture<span>(02)</span> </a> </li>
        <li> <a href="#"> consulting<span>(25)</span> </a> </li>
        <li> <a href="#"> house <span>(35)</span> </a> </li>
        <li> <a href="#"> interior <span>(43)</span> </a> </li>
        <li> <a href="#"> Today News<span>(12)</span> </a> </li>
      </ul>
    </div>
  </div>
  <div class="sidebar_widget">
    <h4> <i>Related <span> Product </span></i> </h4>
    <hr style="width:80%;background:darkblue;">
    <div class="latest_post_wrapper">
      <div class="blog_wrapper1">
        <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128L_C2C_sm.PNG')}}"> </div>
        <div class="sc_blog_text">
          <h5><a href="#">128L C2C</a></h5>
          <div class="sc_blog_date">June 28, 2018</div>
        </div>
      </div>
      <div class="blog_wrapper2">
        <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128NT_sm.PNG')}}"> </div>
        <div class="sc_blog_text">
          <h5><a href="#">128L 128NT</a></h5>
          <div class="sc_blog_date">June 28, 2018</div>
        </div>
      </div>
      <div class="blog_wrapper3">
        <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128G-450_sm.png')}}"> </div>
        <div class="sc_blog_text">
          <h5><a href="#">128G-450</a></h5>
          <div class="sc_blog_date">June 28, 2018</div>
        </div>
      </div>
      <div class="blog_wrapper3">
          <div class="sc_blog_image"> <img alt="blog_img1" class="img-responsive" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/allproducts/fsm_product_128_C2C_sm.png')}}"> </div>
          <div class="sc_blog_text">
            <h5><a href="#">128 C2C</a></h5>
            <div class="sc_blog_date">June 28, 2018</div>
          </div>
        </div>
    </div>
  </div>
  <div class="sidebar_widget">
    <p class="para">Proin gravida nibh vel velit auctor uet. Aenean sollicitudin, lorem quis.</p>
    <div class="archives_wrapper">
      <ul>
        <li> <i aria-hidden="true" class="fa fa-phone"></i> +1 408 432 8838</li>
        <li class="icon_ebsite"> <i aria-hidden="true" class="fa fa-envelope"></i> <a href="#">fsm100@frontiersemi.com </a> </li>
        <li> <i class="fa fa-location-arrow"></i> <a href="#">165 Topaz st., Milpitas, CA 95035</a> </li>
      </ul>
    </div>
  </div>
  <div class="sidebar_widget">
    <h4> tags <span> cloud </span> </h4>
    <div class="gc_blog_cloud_side_menu">
      <ul>
        <li><a href="#">java srcipt</a> </li>
        <li><a href="#">Html</a> </li>
        <li><a href="#">dmax</a> </li>
        <li><a href="#">money</a> </li>
        <li><a href="#">plumber</a> </li>
        <li><a href="#">insta</a> </li>
        <li><a href="#">jquery</a> </li>
        <li><a href="#">Money</a> </li>
        <li><a href="#">update</a> </li>
      </ul>
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
<h2>Do you Need This Template. Please Download Now!</h2>
<a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a>
</div>
</div>
</div>
<!-- Our CTA Wrapper End -->
@endsection