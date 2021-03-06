@extends('/user/user_panel/user_master')
@section('page_title', 'Dashboard | Frontier Semiconductor')
@section('dashboard')


    <div id="content-wrapper">

      <div class="container-fluid">


        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-info o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="mr-5"><h3>Presentation</h3></div>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="{{URL::to('/fsm_client/presentation_list')}}">
                <span class="float-left">presentation details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-glasses"></i>
                </div>
                <div class="mr-5"><h3>DRF</h3></div>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="{{URL::to('/fsm_client/drf_form')}}">
                <span class="float-left">Request a form</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
    
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><h3>Go For Conversation</h3></div>
              </div>
            <a class="card-footer text-white clearfix small z-1" href="{{URL::to('/fsm_client/conversation_with_admin')}}">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        




        <!-- Area Chart Example-->

        {{-- <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Your Activity log</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div> --}}

        <!-- DataTables Example -->
       

      </div>
      <!-- /.container-fluid -->

    
@endsection