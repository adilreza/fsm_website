@extends('/user/user_panel/user_master')
@section('page_title', 'Download Sample Report | Frontier Semiconductor')
@section('download_sample_report')


    <div id="content-wrapper">

        <div class="container-fluid" style="padding:100px;">
            @foreach($sample_report as $data)

        <a href="{{URL::asset('fsm_all_web_file/sample_report/'.$data->sample_report_name)}}">
                <i class="fas fa-download" style="color:green;font-size:60px;" title="Download This file"></i>
        </a>
        <i class="fas  fa-share-square" style="color:green;font-size:60px;margin-left:50px;" title="Share This file"></i>

        @endforeach


       
        </div>

    </div>
     
@endsection