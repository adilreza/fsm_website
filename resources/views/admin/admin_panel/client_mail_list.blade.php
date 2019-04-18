@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Client-Email-admin | Frontier Semiconductor')

@section('client_mail_list_page')
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title text-center"> All client list  <button data-toggle="modal" data-target="#add_single_mail" class="btn btn-primary btn-sm">Add Single</button></h4>
                        <br>
                        <h6 class="card-subtitle">
                        </h6>

                        <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>serial</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Inserted Date</th>
                                            <th>Permanent_delate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <p style="display:none;">{{$i=1}}</p>

                                    @foreach ($client_emails as $email)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$email->name}}</td>
                                            <td>{{$email->email}}</td>
                                            <td>{{$email->created_at}}</td>
                                            <td><a href="{{URL::to('/admin/email_delete/'.$email->id)}}" style="color:orange">Delete</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>





                        
                    </div>
                </div>

            </div>



            <div class="modal fade" id="add_single_mail">
                <div class="modal-dialog">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Add A single Email</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    <form method="POST" id="admin_single_email">
                            <input type="text" id="single_name" class="form-control" name="single_name" placeholder="customer name" required>
                            <br>
                            <input type="email" id="single_email" class="form-control" name="single_email" placeholder="Enter a single email" required>
                            <br>
                            <input type="hidden" id="login_token" name="_token" value="{{csrf_token()}}">
                            <input class="btn btn-success" type="submit">
                        </form>
                        <br>
                        <h4 id="message_status"></h4>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
              </div>



<script type="text/javascript">

    function pageReload() {
            document.getElementById('message_status').innerHTML="Ad email again..";
            document.getElementById('message_status').style.color="brown";
        }   
    
        $('#admin_single_email').on('submit', function(e){
            e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{URL::to('/admin/single_email_insert')}}",
                    data: {
                        email: $('#single_email').val(),
                        name: $('#single_name').val(),
                        _token: $('#login_token').val()
                    },
                    success:function(response)
                    {
                        if(response=="success")
                        {
                            $("#message_status").text("One email inserted");
                            $("#message_status").css('color','green');
                            //console.log(response);
                            setTimeout("pageReload()", 2000);
    
                        }
                        else if(response=="failed")
                        {
                            $("#message_status").text("Soryy! email already exist");
                            $("#message_status").css('color','red');
                            console.log(response);
                        }
                    }
                });
        })
    
    </script>
    
    



@endsection