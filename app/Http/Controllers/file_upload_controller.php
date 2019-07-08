<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Validator;

class file_upload_controller extends Controller
{
    public function upload_file(Request $request)
    {
  
     $rules = array(
      'file'  => 'required|file|max:4048'
     );

     $error = Validator::make($request->all(), $rules);

     if($error->fails())
     {
      return response()->json(['errors' => $error->errors()->all()]);
     }

     $image = $request->file('file');

     $new_name = rand() .'_'.$image->getClientOriginalName();
     $image->move(public_path('conversation_file'), $new_name);

     
     $user_name = session('user_name');
     $table_name = $user_name.'chatting_table';

     $msg_from = session('user_name');
     $msg_to ="admin" ;
     $make_array = array('msg_from'=>$msg_from, 'msg_to'=>$msg_to,'msg'=>$new_name,'msg_type'=>'file');
     DB::table($table_name)->insert($make_array);


    //  $output = array(
    //      'success' => 'Image uploaded successfully',
    //      'image'  => '<img src="/conversation_file/'.$new_name.'" class="img-thumbnail" />'
    //     );



        return back();
    }

    public function upload_file_admin(Request $request)
    {
        $rules = array(
            'file'  => 'required|file|max:5048'
           );
      
           $error = Validator::make($request->all(), $rules);
      
           if($error->fails())
           {
            return response()->json(['errors' => $error->errors()->all()]);
           }
      
           $image = $request->file('file');
      
           $new_name = rand() .'_'.$image->getClientOriginalName();
           $image->move(public_path('conversation_file'), $new_name);
      
           
           $user_name = session('current_user');
           $table_name = $user_name.'chatting_table';
      
           $msg_to = session('current_user');
           $msg_from ="admin" ;
           $make_array = array('msg_from'=>$msg_from, 'msg_to'=>$msg_to,'msg'=>$new_name,'msg_type'=>'file');
           DB::table($table_name)->insert($make_array);
      
      
          //  $output = array(
          //      'success' => 'Image uploaded successfully',
          //      'image'  => '<img src="/conversation_file/'.$new_name.'" class="img-thumbnail" />'
          //     );
      
      
      
              return back();

    }
}
