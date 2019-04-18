@extends('/admin/admin_panel/admin_master')

@section('page_title', 'newsletter uploader | Frontier Semiconductor')



@section('admin_tables_page')


<div id="add_newsletter" style="background:#ecf0f1;;margin:auto">
        <div class="card">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="card-header">
              <h4 class="card-title">Add a New Newsletter</h4>
             
            </div>
            
            <!-- Modal body -->
            <div class="card-body">
                    <div class="card">
                            <div class="card-body">
                                <form id="admin_newsletter_upload" method="post" action="{{URL::to('/admin/newsletter_control_post2')}}" enctype="multipart/form-data">
                                   {{ csrf_field() }}
                                
                                    <div class="form-group m-t-20">
                                        <label><b>Newsletter Title</b> <small class="text-muted">max 100 char</small></label>
                                        <input type="text" class="form-control date-inputmask" name="newsletter_title" id="newsletter_title" required placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Newsletter Description</b> <small class="text-muted">Max 190 char</small></label>
                                        <textarea type="textarea" cols="9" rows="5" class="form-control phone-inputmask" required name="newsletter_description" id="newsletter_description" ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label><b>Uploaded by</b> <small class="text-muted">admin</small></label>
                                    <input type="text" class="form-control international-inputmask" id="international-mask" readonly value="{{session('admin_email')}}">
                                    </div>
                                    <div class="form-group">
                                            <label><b>upload a file</b> <small class="text-muted">extension must: .blade.php</small></label>
                                            <input required type="file" name="newsletter_file" class="form-control xphone-inputmask" id="newsletter_file" >
                                    </div>

                                    <input type="submit" class="form-control btn-lg btn-primary" value="Upload Now">
                                    <br>
                                  <h4 style="color:green;"><i id="message_status">
                                    @if(!empty($uploaded_newsletter))
                                      {{ $uploaded_newsletter }}
                                      <br>
                                  <a style="color:white;" href="{{URL::to('admin/newsletter_control')}}"><p style="color:white;" class="btn btn-info">Go for operation</button></a> 
                                     @endif
                                  </p></h4>

                                </form>
                            </div>
                        </div>
            </div>
            
            <!-- Modal footer -->
           
            
          </div>
        </div>
      </div>



@endsection
