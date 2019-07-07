@extends('/admin/admin_panel/admin_master')

@section('page_title', 'RFQ From Client | Frontier Semiconductor')

@section('rfq_from_client')
           
            <div class="container-fluid">
               
                <div class="container" style="">
                    {{-- @foreach ($all_unseen_rfq as $rfq)
                        <a style="text-decoration:underline;" href="{{URL::asset('/fsm_all_web_file/rfq_file/'.$rfq->rfq_file_name)}}">{{$rfq->rfq_from}}  has sent a rfq  <a href="{{URL::to('/admin/rfq_replay_admin/'.$rfq->rfq_from)}}" class="btn btn-sm bg-warning" style="color:white;border-radius:3px; margin:3px;">Replay</a></a>
                        <br>
                    @endforeach --}}

                    <div class="card" style="height:600px; overflow:scroll;">
                        <div class="card-body">
                            <h5 class="card-title">All Registrated User For conversation</h5>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>User Name</th>
                                            <th>Company</th>
                                            <th>Conversation</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <p style="display:none;">{{$i=1}}</p> 
                                    @foreach ($all_user as $user)
                                        
                                   
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$user->user_name}}</td>
                                            <td>{{$all_client[$user->user_name]}}</td>
                                        <td><a href="{{URL::to('/admin/client_name/'.$user->user_name)}}">Go For Conversation</a></td>
                                            
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
                                  
                                </table>
                            </div>

                        </div>
                    </div>


                </div>
                

            </div>

@endsection