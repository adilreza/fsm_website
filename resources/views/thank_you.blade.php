@extends('layout.master')

@section('page_title', "Thank You | Frontier Semiconductor")
@section('index_page')


<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Subscription Status</h1>
    <ul class="page-breadcrumb">
    <li><a href="{{URL::to('/')}}">Home</a></li>
	  <li>Subscription</li>
	  <li>Success</li>

    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper" style="height:400px;">
<div class="container">
  <div class="row">
    <div class="col-md-8">
          @if(session('subscriber_name')!=''&& session('status','')=='done')
            <h5>Hei, <span style="color:green;"><i>{{session('subscriber_name','')}}</i></span></h5>
            <h5> Thank you for your response....</h5>
            <hr style="width:80%;background:darkslateblue;">
            <br>
            <h5>You will be notified in your provided email <strong style="color:firebrick;"> {{session('subscriber_email','')}}</strong> </h5>
          @else
            @if(!empty($thank_you_message))
              @if($thank_you_message!='')
              <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sorry!</strong> This email is already subcribed.
              </div>
              @endif
            @endif

          @endif
      </div>
      <div class="col-md-4">
          <div class="">
              <h3 style="color:#4AC8ED;">Frontier Semiconductor</h3>
              <ul>
                <li>Corporate Head Office. </li>
                <hr>
                <li><i class="fa fa-home" style="color:#4AC8ED;"></i> 165 Topaz st., Milpitas, CA 95035 </li>
                <br>
                <li><i class="fa fa-phone" style="color:#4AC8ED;"></i> <a href="#"> +1 408 432 8838</a></li>
                <br>
                <li><i class="fa fa-envelope" style="color:#4AC8ED;"></i> <a href="mailto:"> fsm100@frontiersemi.com</a></li>
              </ul>
            </div>
      </div>
</div>

</div>
</div>

@endsection
<!-- Inner Page Wrapper End -->
