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
    <link href="{{URL::asset('fsm_admin/dist/css/style.min.css')}}" rel="stylesheet">
    <title>FSM User Registration</title>
    <!-- Custom CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}">

</head>

<body style="background:#a4b0be;">
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center ">
            <div class="auth-box  border-top border-secondary" style="border-radius:10px;width:500px!important;">
                <div>
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><a href="{{URL::to('/')}}"> <img style="height:80px;width:130px;" src="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}" alt="fsm_logo" /></a></span>
                    </div>
                    <!-- Form -->
                <form class="form-horizontal m-t-20" action="{{URL::to('/user/register')}}" method="post">
                        {{ csrf_field() }}
                    <div class="row p-b-30">
                            <div class="col-12">
                                    <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-globe"></i></span>
                                            </div>
                                        <input value="{{session('company','')}}" type="text" class="form-control form-control-lg" placeholder="Company" name="company" aria-label="Username" aria-describedby="basic-addon1" required>
                                    </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                <input name="user_name" type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{session('user_name','')}}" required>
                                </div>
                                <!-- email -->
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                    </div>
                                <input type="email"  name="email" value="{{session('email','')}}" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" required>
                                </div>
                               
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input  type="password" id="password" name="password" class="form-control form-control-lg" placeholder=" Choose Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input  type="password" id="confirm_password" name="password2" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        {{-- <img src="{{URL::asset('status_bar/success_bar.gif')}}" style="height=80px; width:80px; " class="text-center" id="success"> --}}
                        @if(!empty($msg2))
                            <h6 style="color:red">{{$msg2}}</h6>
                        @endif
                        @if(!empty($msg))
                           <h6 style="color:green;"> {{$msg}}</h6>
                           <script type="text/javascript">
                                setTimeout(function(){
                                    window.location.href="{{URL::to('user/login')}}"
                                },2000);
                           </script>
                        @endif
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button type="submit" class="btn btn-block btn-lg btn-info" id="subButton" type="submit">Sign Up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{URL::asset('fsm_admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('fsm_admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::asset('fsm_admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    </script>


<script>

   // document.getElementById("subButton").disabled = true;

    var password = document.getElementById("password");
    var  confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


</script>




</body>

</html>