
@extends('layout.master')

@section('page_title','Appointment | Frontier Semiconductor')

@section('appointment_page')
 

<!-- Breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <h1>Tabs</h1>
    <ul class="page-breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Components</li>
      <li>Tabs</li>
    </ul>
  </div>
</div>
<!-- Breadcrumb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper tabs-wrapper">
  <div class="container">
    <div class="row justify-content-md-center mb-5">
      <div class="col-lg-8 col-md-12">
        <h3 class="text-center">Horizontal Tabs</h3>
        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
          <ul class="nav nav-tabs">
            <li><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Tab 1</a></li>
            <li><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Tab 2</a></li>
            <li><a class="nav-link" href="#tabs-1-3" data-toggle="tab">Tab 3</a></li>
            <li><a class="nav-link" href="#tabs-1-4" data-toggle="tab">Tab 4</a></li>
            <li><a class="nav-link" href="#tabs-1-5" data-toggle="tab">Tab 5</a></li>
          </ul>
          <div class="tab-content text-secondary">
            <div class="tab-pane fade show active" id="tabs-1-1">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="tab-pane fade" id="tabs-1-2">
              <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="tab-pane fade" id="tabs-1-3">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="tab-pane fade" id="tabs-1-4">
              <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="tab-pane fade" id="tabs-1-5">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-lg-8 col-md-12">
        <h3 class="text-center">Vertical Tabs</h3>
        <!-- Nav tabs -->
        <div class="row no-gutters">
          <ul class="nav nav-tabs flex-column nav-tabs-2 col-4 tabs-vertical" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home-2" role="tab">Home</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile-2" role="tab">Profile</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages-2" role="tab">Messages</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings-2" role="tab">Settings</a> </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content col-8">
            <div class="tab-pane active background-light-grey padding-30px" id="home-2" role="tabpanel"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
            <div class="tab-pane background-light-grey  padding-30px" id="profile-2" role="tabpanel"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </div>
            <div class="tab-pane background-light-grey  padding-30px" id="messages-2" role="tabpanel"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </div>
            <div class="tab-pane background-light-grey  padding-30px" id="settings-2" role="tabpanel"> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </div>
          </div>
        </div>
        <!-- // Nav tabs --> 
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
      <a href="https://themeforest.net/user/sbtechnosoft/portfolio" class="bttn">Buy Now</a> </div>
  </div>
</div>
<!-- Our CTA Wrapper End --> 

@endsection