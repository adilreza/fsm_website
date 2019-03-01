@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Presentation Upload | Frontier Semiconductor')

@section('admin_presentation_upload')
            <div class="container-fluid">
               
               <div class="container">
                    <div class="card border-primary">
                            <div class="card-header bg-info ">
                             <h3 style="color:white;">Upload Presentation</h3>
                            </div>
                            <div class="card-body" style="background:#dfe4ea;">
                                    <div class="form-group">
                                        <label for="title">Presentation Title</label>
                                        <input type="text" class="form-control" id="title">
                                    </div>
                                    <div class="form-group">
                                            <label for="details">Presentation descriptions</label>
                                            <textarea  class="form-control" id="details" cols="40" rows="7" style="padding:10px;border:none;"></textarea>
                                        </div>
                                        <div class="form-group">
                                                <label for="file">Presentation file( <i>pptx/pdf/docx</i> )</label>
                                                <input  class="form-control" type="file" id="file" style="padding:10px;border:none;">
                                        </div>
                                        <br>
                                    <center>
                                    <input class="btn btn-success btn-lg text-center" value="Submit Now" />
                                    </center>
                                    <br>
                            </div>
                            <div class="card-footer"><i>presentation can be docx, pptx, and pdf</i></div>
                    </div>
               </div>
                
            </div>
    
@endsection