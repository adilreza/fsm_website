@extends('/user/user_panel/user_master')
@section('page_title', 'RFQ | Frontier Semiconductor')
@section('rfq_page')


    <div id="content-wrapper">

        <div class="container-fluid">
          @if(!empty($rfq_msg))
            @if($rfq_msg=='success')
              <div class="alert alert-success col-md-8">
                <strong>Success!</strong> Successfully sent your RFQ
              </div>
              
            
            @endif
            <script type="text/javascript">
              function autoRefreshPage()
              {
                console.log("hello adil");
                  window.location.replace("{{URL::to('/fsm_client/rfq_page')}}");
              }
              setTimeout("autoRefreshPage()", 2000);
          </script>

          @endif
                <div class="container">

                        <div class="card card-register mx-auto mt-5" style="background:#f1f2f6;" >
                          <div class="card-header">RFQ Form</div>
                          <div class="card-body">
                          <form method="post" action="{{URL::to('/fsm_client/rfq_page')}}" enctype="multipart/form-data" >
                            {{ csrf_field() }}  
                            <div class="form-group">
                               
                                 
                                  <label for="comment">Any Comments(<i style="color:red;font-size:12px;">optional</i>)</label>

                                  <textarea type="text" rows="3" id="comment" name="rfq_description" class="form-control"  ></textarea>
                                
                               
                              </div>
                              <div class="form-group">
                                <div class="form-row">
                                    <label for="at_file">Attach a file</label>
                                  <input type="file" id="at_file" class="form-control"  required name="rfq_file">
                                </div>
                              </div>
                              <input class="btn btn-primary btn-block btn-lg" type="submit"  value="Send RFQ"  >
                            </form>
        
                          </div>
                        </div>
                      </div>
                    </div>


            




       
        </div>

    </div>
     
@endsection