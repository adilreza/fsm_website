@extends('/user/user_panel/user_master')
@section('page_title', 'Presentation detials | Frontier Semiconductor')
@section('fsm_presentation_details')


    <div id="content-wrapper" style="background:white;">

        <div class="container-fluid" style="background:white;">

                <div class="card border-default" style="background:white;">
                        <div class="card-header bg-default">
                         <h3 style="color:black;">Presentation Details</h3>
                        </div>
                        <div class="card-body " style="background:white;">
                            <div class="row ">
                                @foreach ($result_presentation as $presentation)
                                    <div class="col-md-11 mt-3 mb-1" style="padding:20px; border-radius:10px;">
                                       <h4 style="color:black;">{{$presentation->p_title}}</h4>
                                        <hr>
                                    
                                        <p style="opacity:0.7">{{$presentation->p_description}}</p>
                                        
                                        <hr>
                                    <button calss="btn bg-primary " id="preview" ><a href="{{URL::to('/fsm_client/presentation_list')}}">Go Back</a></button>
                                    <button calss="btn btn-warning"><a href="{{URL::asset('/fsm_all_web_file/fsm_presentation/'.$presentation->presentation_file)}}">Download Now</a></button>

                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="card-footer"><i>presentation can be docx, pptx, and pdf</i></div>
                </div>
            




       
        </div>

    </div>

@endsection