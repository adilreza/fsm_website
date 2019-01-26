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

  <br>

  <div class="row">
    <div class="col-lg-8">
      <div id="accordion" role="tablist">
        <div class="card">
          <div id="headingOne" role="tab" class="card-header">
            <h6 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">About FSM's success</a></h6>
          </div>
          <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4"><img src="img/template-easy-customize.png" alt="" class="img-fluid"></div>
                <div class="col-md-8">
                  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                  <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div id="headingTwo" role="tab" class="card-header">
            <h6 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">About FSM's leading technology</a></h6>
          </div>
          <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4"><img src="img/template-easy-code.png" alt="" class="img-fluid"></div>
                <div class="col-md-8">
                  <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                  <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="card">
          <div id="headingThree" role="tab" class="card-header">
            <h6 class="mb-0 mt-0"><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">FSM's winning award for outstanding performance</a></h6>
          </div>
          <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
            <div class="card-body">
              <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
              <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="video-image-box mb-30">
        <div class="image"> <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/fortest/videotest.jpg')}}" alt=""> <a href="https://www.youtube.com/watch?v=UvluuAIiA50" class="overlay-link play-now video-btn"><span class="fa fa-play"></span> </a> <span class="ripple"></span> </div>
      </div>
    </div>
  </div>
  </div>

<!--end of this section --->


<section class="bar background-pentagon no-mb" style="background:url('fsm_all_web_file/images/texture-turquoise.png'); margin-bottom:7px;">
  <div class="container">
    <div class="row showcase text-center">
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-align-justify" style="border:1px solid black;padding:15px; border-radius:50%;"></i></div>
          <h4><span class="number animateNumber" data-num="21">21</span><br>Products</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-users" style="border:1px solid black;padding:15px; border-radius:40px;"></i></div>
          <h3><span class="number animateNumber" data-num="200">200</span><br>Satisfied Clients</h3>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin" ><i class="fa fa-copy" style="border:1px solid black;padding:15px; border-radius:50%;"></i></div>
          <h4><span class="number animateNumber" data-num="320">320</span><br>Projects</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="item">
          <div class="icon-outlined icon-sm icon-thin"><i class="fa fa-font" style="border:1px solid black;padding:15px; border-radius:50%;"></i></div>
          <h4><span class="number animateNumber" data-num="923">923</span><br>Magazines and research papers</h4>
        </div>
      </div>
    </div>
  </div>

</section>




  <div class="container" >
      
          <div class="heading" >
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
                      <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:#38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                      <li class="list-inline-item"><a href="#" class="email"><i style="color:green;font-size:22px;" class="fa  fa-envelope"></i></a></li>
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
                          <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:#38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="email"><i style="color:green;font-size:22px;" class="fa  fa-envelope"></i></a></li>
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
                          <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:#38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="email"><i style="color:green;font-size:22px;" class="fa fa-envelope"></i></a></li>
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
                          <li class="list-inline-item"><a href="#" class="external twitter"><i style="color:#38A1F3;font-size:22px;" class="fab fa-twitter"></i></a></li>
                          <li class="list-inline-item"><a href="#" class="email"><i style="color:green;font-size:22px;" class="fa fa-envelope"></i></a></li>
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






<section class="testimonials-wrapper">
  <div class="container">
  <div class="section-title">
  <h2>TESTIMONIALS</h2>
  <div class="separator"></div>
  </div>
  <div class="two-item-carousel owl-carousel owl-theme">
  <!--Testimonial Block-->
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/testimonial/comments1.png')}}" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">Jeson Jons <span>/ CEO at Showroom Prohub</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  <!--Testimonial Block-->
  <div class="testimonial-block">
    <div class="inner-box">
    <div class="image"> <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/testimonial/comments2.png')}}" alt="" /> </div>
      <div class="content">
        <div  class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">Mark Warren <span>/ Managerment at Envato</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  <!--Testimonial Block-->
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/testimonial/comments3.png')}}" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">Les Stone <span>/ CEO at Showroom INC</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  <!--Testimonial Block-->
  <div class="testimonial-block">
    <div class="inner-box">
      <div class="image"> <img src="{{URL::asset('fsm_all_web_file/fsm_image_gallery/testimonial/comments1.png')}}" alt="" /> </div>
      <div class="content">
        <div class="quote-icon fa fa-quote-right"></div>
        <div class="author-info">John Doe <span>/ Managerment at Envato</span></div>
        <div class="text">Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>







<!-- News Letter Wrapper End -->






@endsection