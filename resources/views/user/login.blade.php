<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}">
    <title>User Login</title>
    <!-- Custom CSS -->
    <link href="{{URL::asset('fsm_admin/dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body style="background:#a4b0be;">
    <div class="main-wrapper">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="border-radius:10px;">
            <div class="auth-box  border-top border-secondary" style="border-radius:10px;">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db">
                        <a href="{{URL::to('/')}}"> <img style="height:80px;width:130px;" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}" alt="fsm_logo" /></a></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="loginform" action="{{URL::to('/user/login')}}" method="post">
                       {{ csrf_field() }}
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" name="user_name" required class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input required name="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        </div>
                        @if(!empty($msg2))
                            <h6 style="color:red">{{$msg2}}</h6>
                        @endif
                        @if(!empty($msg))
                           <h6 style="color:green;"> {{$msg}}</h6>
                           <script type="text/javascript">
                                setTimeout(function(){
                                    window.location.href="{{URL::to('fsm_client/conversation_with_admin')}}"
                                },2000);
                           </script>
                        @endif

                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                        <button class="btn btn-success float-right" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                    <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{URL::asset('fsm_admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('fsm_admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::asset('fsm_admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>