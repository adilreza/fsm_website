@extends('/admin/admin_panel/admin_master')

@section('page_title', 'RFQ From Client | Frontier Semiconductor')

@section('rfq_from_client')
           
            <div class="container-fluid">
               
                <div class="container">
                    @foreach ($all_unseen_rfq as $rfq)
                        <a style="text-decoration:underline;" href="{{URL::to('admin/download/rfq_file/'.$rfq->id)}}">{{$rfq->rfq_from}} from {{$all_client[$rfq->rfq_from]}} has sent a rfq</a>
                        <br>
                    @endforeach
                </div>
                

            </div>

@endsection