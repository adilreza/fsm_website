<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> --}}
    <!-- Favicon icon -->

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}">
    <title>FSM User Registration</title>

<style type="text/css" >

body {
  padding-top: 20px;
  padding-bottom: 20px;
  background: #a4b0be;
}


.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}

.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}


.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}


.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}


@media screen and (min-width: 768px) {

  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }

  .header {
    margin-bottom: 30px;
  }

  .jumbotron {
    border-bottom: 0;
  }
}
        
    </style>
  
</head>

<body >
   

        <div class="container">
        <h3 class="well" id="message_about">Welcome to <a href="{{URL::to('/')}}">FSM</a></h3>
                <div class="col-lg-12 well">
                <div class="row">
                <form method="post" id="user_registration_form" action="{{URL::to('/user/register')}}">
                    <input type="hidden" id="login_token" name="_token" value="{{csrf_token()}}">
                                <div class="col-sm-12 ">
                                    <div class="row ">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name</label>
                                            <input type="text" id="fname" required name="fname" placeholder="Enter First Name Here.." class="form-control">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name</label>
                                            <input type="text" id="lname" required name="lname" placeholder="Enter Last Name Here.." class="form-control">
                                        </div>
                                    </div>					
                                    {{-- <div class="form-group">
                                        <label>Address</label>
                                        <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                                    </div>	 --}}
                                    <div class="row">
                                        <div class="col-sm-4 form-group">
                                            <label>City</label>
                                            <input type="text" required id="city" name="city" placeholder="Enter City Name Here.." class="form-control">
                                        </div>	
                                        <div class="col-sm-4 form-group">
                                            <label>State</label>
                                            <input type="text" required id="state" name="state" placeholder="Enter State Name Here.." class="form-control">
                                        </div>	
                                        <div class="col-sm-4 form-group">
                                            <label>Zip</label>
                                            <input type="text" required id="zip" name="zip" placeholder="Enter Zip Code Here.." class="form-control">
                                        </div>		
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Title</label>
                                            <input type="text" required id="title" name="title" placeholder="Enter Designation Here.." class="form-control">
                                        </div>		
                                        <div class="col-sm-6 form-group">
                                            <label>Company</label>
                                            <input type="text" required id="company" name="company" placeholder="Enter Company Name Here.." class="form-control">
                                        </div>	
                                    </div>						
                               		
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email Address Here.." required class="form-control">
                                </div>
                                <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" id="username"  placeholder="Choose User Name Here.." name="username" required class="form-control">
                                </div>	
                                <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="password1" password="password1" required placeholder="Enter password here.." class="form-control">
                                    </div>
                                    <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" id="password2" password="password2" required placeholder="Confirm password here.." class="form-control">
                                            <span id="c_p"></span>
                                        </div>
                                
                                        <h4 id="message_status"></h4>
                                <button type="submit" class="btn btn-block btn-lg btn-info">Complete Registration</button>					
                                </div>
                            </form> 
                            </div>
                </div>
                </div>








     <script type="text/javascript">

    //  function testpass()
    //  {
    //      var pass1 = $("#password1").val();
    //      var pass2 = $("#password2").val();
    //      if(pass1!=pass2)
    //      {
    //          $("#c_p").text("Not matcherd");
    //          $("#c_p").css('color','red');

    //      }
    //      else
    //      {
    //         $("#c_p").text("matcherd");
    //         $("#c_p").css('color','green');

    //      }
    //  }

                    function pageRedirect() {
                        window.location.replace("{{URL::to('/user/login')}}");
                        }   
                    
                        $('#user_registration_form').on('submit', function(e){
                            e.preventDefault();
                                $.ajax({
                                    type: "POST",
                                    url: "{{URL::to('/user/register')}}",
                                    data: {
                                        fname: $('#fname').val(),
                                        laname: $('#lanme').val(),
                                        city: $('#city').val(),
                                        state: $('#state').val(),
                                        zip: $('#zip').val(),
                                        company: $('#company').val(),
                                        email: $('#email').val(),
                                        username: $('#username').val(),
                                        _token: $('#login_token').val()
                                    }
                                
                                });
                        });
                    
         </script>




</body>

</html>