@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Conversation with dynamic client | Frontier Semiconductor')
@section('admin_tables_page')


<div class="container-fluid" style="background:#E9ECEF;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">About <i><a href="{{URL::to('admin/about_client/client_name/'.session('current_user'))}}"><b>{{session('current_user')}}</b></a></i></h4>
                        <hr>
                        <div class="chat-box scrollable" style="height:475px;">
                            <!--chat Row -->
    
                               @foreach ($about_user as $user)

                              <div class="container text-center">

                                            <div class="column">
                                              <div class="card">
                                                <img style="width:30%; margin:0 auto;" src="https://res.cloudinary.com/fsm/image/upload/v1562618396/fsm_media/head_shape_2_btp71a.png" alt="Jane" style="width:100%">
                                                <div class="container">
                                                  <h2>{{$user->user_name}}</h2>
                                                <p class="title">{{$user->company}}</p>
                                                <p>{{$user->email}}</p>
                                                  <p><button class="button">Contact</button></p>
                                                </div>
                                              </div>
                                            </div>

                              </div>

                              @endforeach
                               
    
    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        
    </div>
     



@endsection
