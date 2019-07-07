@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Conversation with dynamic client | Frontier Semiconductor')
@section('admin_tables_page')


<div class="container-fluid" style="background:#E9ECEF;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Conversation with <i><b>{{session('current_user')}}</b></i></h4>
                        <hr>
                        <div class="chat-box scrollable" style="height:475px;">
                            <!--chat Row -->
    
                            
    
                               
                               <span id="all_conv"></span>
                               
                                    
    
    
                              
                            
    
    
                        </div>
                    </div>
                    <div class="card-body border-top" style="background:#95a5a6;">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field m-t-0 m-b-0">
                                    <form>
                                    <input type="hidden"  id="csrf_token" name="_token" value="{{csrf_token()}}">
                                    <textarea id="textarea1" onkeypress="chat_action(event)" placeholder="Ask anything to admin freely....." class="form-control border-0" style="resize:none;"></textarea>
                                </form>
    
                                </div>
                            </div>
                            <div class="col-3">
                                <a class="btn-circle btn-lg btn-cyan float-right text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    
    <script>
    
        function read_message()
        {
            $.ajax({
                type: 'GET',
                url: "{{URL::to('/admin/conversation_message_read')}}",
                success: function(response)
                {
                    //console.log(response);
                    document.getElementById("all_conv").innerHTML=response;
                }
            })
        }
    
    
        
        function chat_action(event)
        {
            //alert("Hello world");
            var x =  event.keyCode;
            if(x==13)
                {
    
                    $.ajax({
                    type: 'POST',
                    data: {
                    message: $('#textarea1').val(),
                    _token: $('#csrf_token').val()
                    },
                    url: "{{URL::to('/admin/conversation_message_store')}}",
    
                    success: function(response){
                        //alert("Hello adil");
                        console.log(response)
                        if(response=="success")
                        {
                            //alert('success');
                            remove_text();
                            //read_message()
                        }
                    } 
                });
            }
            var data = document.getElementById('textarea1').value;
        }
    
        function remove_text()
        {
            document.getElementById("textarea1").value ="";
        }
         $(document).ready(function(){
             read_message()
         });
    
         setInterval(() => {
             read_message();
            
         }, 3000);
    
    
    </script>
     



@endsection
