@extends('/admin/admin_panel/admin_master')

@section('page_title', 'provide sample report | Frontier Semiconductor')

@section('give_sample_report')
            <div class="container-fluid">
               
               <div class="container" style="border-radius:15px;">
                    <div class="card border-primary" style="border-radius:10px;">
                            <div class="card-header bg-info ">
                             <h3 style="color:white;">Provide Sample Report</h3>
                            </div>
                            <div class="card-body" style="background:#dfe4ea;">
                            <form action="{{URL::to('/admin/admin_presentation_upload')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="title">Select The User </label>
                                        <select type="text" required class="form-control" id="title" name="p_title">
                                           
                                        </select>
                                    </div>
                                        <div class="form-group">
                                                <label for="file">Sample Report file( <i>pptx/pdf/docx</i> )</label>
                                                <input required class="form-control" type="file" name="presentation_file" id="file" style="padding:10px;border:none;">
                                        </div>
                                        <br>
                                        @if(!empty($p_msg))
                                            <i style="color:green;">{{$p_msg}}</i>
                                        @endif
                                    <center>
                                    <input class="btn btn-success btn-lg text-center" type="submit" value="Submit Now" />
                                    </center>
                                    <br>
                                </form>
                            </div>
                            <div class="card-footer"><i>presentation can be docx, pptx, and pdf</i></div>
                    </div>
               </div>
                
            </div>
    
@endsection