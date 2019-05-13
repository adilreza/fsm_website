@extends('/user/user_panel/user_master')
@section('page_title', 'All Presentation | Frontier Semiconductor')
@section('static_css_file')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
    </style>
@endsection

@section('fsm_all_presentation')


    <div id="content-wrapper" style="background:white;">

        <div class="container-fluid" style="background:white;">

                <div class="card border-default" style="background:white;">
                        <div class="card-header">
                            <h1 class="w3-text-indigo" style=" font-size: 38px; text-shadow:1px 1px 0 #444;"><b>FSM Published Presentation</b></h1>
                        </div>
                        <div class="card-body " style="background:white;">
                            <div class="row ">
                                @foreach ($all_presentation as $presentation)
                                    <div class="col-md-11 mr-2 ml-3 mt-3 mb-1" style="background:#f1f2f6; padding:20px; border-radius:10px;">
                                        <p><span class="w3-text-blue" style=" font-size: 20px;"><b> {{str_limit($presentation->p_title, 90)}} </b>

                                                @if(pathinfo($presentation->presentation_file, PATHINFO_EXTENSION) == 'pptx')
                                                    <i class="far fa-file-powerpoint w3-text-orange w3-jumbo" style="float: right;"></i>
                                                @elseif(pathinfo($presentation->presentation_file, PATHINFO_EXTENSION) == 'doc' or 'docx')
                                                    <i class="far fa-file-word w3-text-orange w3-jumbo" style="float: right;"></i>
                                                @elseif(pathinfo($presentation->presentation_file, PATHINFO_EXTENSION) == 'pdf')
                                                    <i class="far fa-file-pdf w3-text-orange w3-jumbo" style="float: right;"></i>
                                                @endif



                                            </span></p>

                                        {{--<h4 id="p_title" style="display:none;">{{$presentation->p_title}}</h4>--}}
                                    {{----}}
                                        <p style="opacity:0.7">{{ str_limit($presentation->p_description, 250)}}</p>
                                        {{--<p style="display:none;" id="p_description">{{$presentation->p_description}}</p>--}}
                                        <hr>
                                        <a class="btn btn-primary" id="preview" style="float: right;" href="{{URL::to('fsm_client/fsm_presentation_details/'.$presentation->id)}}" role="button">
                                            <i class="fas fa-info-circle"></i> Details
                                        </a>
                                        <a class="btn btn-danger mr-2" id="preview" style="float: right;" href="{{URL::asset('/fsm_all_web_file/fsm_presentation/'.$presentation->presentation_file)}}" role="button">
                                            <i class="fas fa-download"></i> Downloads
                                        </a>
                                    {{--<button type="button" class="btn btn-primary" id="preview" style="float: right;"><a href="{{URL::to('fsm_client/fsm_presentation_details/'.$presentation->id)}}">Details</a></button>--}}
                                    {{--<button type="button" class="btn btn-warning mr-2" style="float: right;"><a href="{{URL::asset('/fsm_all_web_file/fsm_presentation/'.$presentation->presentation_file)}}">Download Now</a></button>--}}

                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="card-footer" style="text-align: center;"><i>presentation can be docx, pptx, and pdf</i></div>
                </div>
            




       
        </div>

    </div>

    
     
@endsection