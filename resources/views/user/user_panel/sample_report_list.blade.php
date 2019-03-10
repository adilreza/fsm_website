@extends('/user/user_panel/user_master')
@section('page_title', 'All Sample Report | Frontier Semiconductor')
@section('sample_report_list')


    <div id="content-wrapper">

        <div class="container-fluid">

            <div class="row">
                @foreach ($sample_reports as $data)
                    
                
                    <div class="col-md-3">
                        @if($data->seen_by_client=="unseen")
                            <a href="{{URL::to('/fsm_client/sample_report/download/'.$data->id)}}"><img style="height:150px;width:170px;" src="{{URL::asset('fsm_user/sample_report_seen_unseen/message_unseen.gif')}}" /></a>
                        @endif

                        @if($data->seen_by_client=="seen")
                            <a href="{{URL::to('/fsm_client/sample_report/download/'.$data->id)}}"><img style="height:150px;width:170px;" src="{{URL::asset('fsm_user/sample_report_seen_unseen/message_seen.png')}}" /></a>
                        @endif

                        

                    </div>
                    
                @endforeach
                
            </div>



        </div>

    </div>
     
@endsection