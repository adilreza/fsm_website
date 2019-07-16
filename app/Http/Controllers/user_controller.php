<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;

class user_controller extends Controller
{
    public function login()
    {
        return view('user.login');
    }
    public function register()
    {
        return view('user.user_registration');
    }
    public function register_request(request $data)
    {
      $company = $data->company;
      $user_name = $data->user_name;
      $email = $data->email;
      $password =$data->password;
      session(['company'=>$company, 'user_name'=>$user_name, 'email'=>$email]);
      
      $exist = DB::table('user_registrations')->where('user_name',$user_name)->count();
      if($exist!=0)
      {
          return view('user.user_registration')->with('msg2',"Username already taken try another");
          session(['tstatus'=>'failed']);
      }
      else
      {
        $makarray = array('company'=>$company,'user_name'=>$user_name,'email'=>$email,'password'=>$password,'token'=>$user_name);
        DB::table('user_registrations')->insert($makarray);
          return view('user.user_registration')->with('msg','successfully complete');
          session(['tstatus'=>'success']);
      }

    }
    public function login_request(request $data)
    {
        $user_name = $data->user_name;
        $password =$data->password;
        $exist = DB::table('user_registrations')->where('user_name',$user_name)->where('password',$password)->count();
        if($exist!=0)
        {
            session(['user_name'=>$user_name]);
            return view('user.login')->with('msg', 'Ok! Client Recognized');
        }
        else
        {
            return view('user.login')->with('msg2', 'Sorry! Client Not Recognized');
        }
    }

    public function user_dashboard()
    {
        return view('user.user_panel.index');
    }

    public function logout()
    {
        session(['user_name'=>'']);
        return redirect('/');
    }

    public function drf_form()
    {
        return view('user.user_panel.drf_form');
    }

    public function presentation_list()
    {
        $all_presentation = DB::table('presentation_lists')->get();
        return view('user.user_panel.fsm_all_presentation')->with(['all_presentation'=>$all_presentation]);
    }
    public function fsm_presentation_details($selected_id)
    {
        $presentation = DB::table('presentation_lists')->where('id',$selected_id)->get();
        return view('user.user_panel.presentation_details')->with(['result_presentation'=>$presentation]);
    }

    public function drf_submit(Request $data)
    {
        $drf_data = $data->data;
        $drf_from = session('user_name');
        $cnt = DB::table('drf_tables')->where('drf_from',$drf_from)->where('drf_data',$drf_data)->count();
        if($cnt==0)
        {
        $make_array = array('drf_from'=>$drf_from, 'drf_to'=>'admin', 'drf_data'=>$drf_data, 'drf_user_mark'=>'green');
         DB::table('drf_tables')->insert($make_array);
         //return view('index');
         echo "success";
        }
        else
        {
            echo 'exist';
        }
    }

    public function sample_report_list()
    {
        $sample_report = DB::table('sampl_report_tables')->where('sampl_report_to',session('user_name'))->get();
        return view('user.user_panel.sample_report_list')->with(['sample_reports'=>$sample_report]);

    }
    public function download_sample_form($report_id)
    {
        DB::table('sampl_report_tables')->where('id', $report_id)->update(['seen_by_client'=>'seen']);
        $sample_report = DB::table('sampl_report_tables')->where('id', $report_id)->orderBy('id','DESC')->get();
        return view('user.user_panel.download_sample_report')->with(['sample_report'=>$sample_report]);

    }
    public function rfq_page()
    {
        $user = session('user_name');
        $all_history = DB::table('global_crms')->where('msg_from',$user)->orderBy('id','DESC')->orWhere('msg_to',$user)->get();
        return view('user.user_panel.rfq_page')->with('history',$all_history);
    }
    
    public function rfq_page_insert(request $data)
    {
        $file_name="";
        $rfq_from =session('user_name');
        $rfq_to = "admin";
        $file_type = $data->file_type;
        $rfq_comment = $data->rfq_description;
        if($rfq_comment!=""){
            $rfq_comment = $data->rfq_description;
        }
        else
        {
            $rfq_comment="No comment";
        }
        if($data->hasfile('rfq_file'))
        {
            $file_name =$data->file('rfq_file')->getClientOriginalName();
            $data->file('rfq_file')->move(public_path().'/fsm_all_web_file/rfq_file',$file_name);
        }
        if($file_name==!"")
        {
            $make_array = array('msg_from'=>$rfq_from, 'msg_to'=>$rfq_to,'msg_seen_unseen'=>'unseen', 'msg_optional_comment'=>$rfq_comment,'msg_file'=>$file_name,'msg_file_type'=>$file_type);
            DB::table('global_crms')->insert($make_array);
             return view('user.user_panel.rfq_page')->with('rfq_msg','success');
            //return Redirect::back()->with('rfq_msg','success');

        }
        else{
            return view('user.user_panel.rfq_page')->with('rfq_msg','failed');
        }
       
    }

    public function dynamic_blank()
    {
        return view('user.user_panel.dynamic_blank');
    }

    public function show_user_rfq_history()
    {
        $user = session('user_name');
        $all_history = DB::table('global_crms')->where('msg_from',$user)->orWhere('msg_to',$user)->orderBy('id','DESC')->get();
        return view('user.user_panel.rfq_page')->with('history',$all_history);
    }


    public function conversation_with_admin_page()
    {
        $user_name = session('user_name');
        $table_name = $user_name."chatting_table";
        $c_date = date('h:i a');
        //return $c_date;
        $db = DB::connection();
        //$testname="adil_dynamic_test"; 
       // $sql = "CREATE TABLE IF NOT EXISTS ".$table_name." ( id int(10), msg_from VARCHAR(100), msg_to VARCHAR(100),msg  VARCHAR(1000), status1 VARCHAR(5), 
        //status2 VARCHAR(5), created_at timestamp DEFAULT CURRENT_TIMESTAMP"; 

        $sql = "CREATE TABLE IF NOT EXISTS ".$table_name." (
            `id` int(10) UNSIGNED NOT NULL,
            `msg_from` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
            `msg_to` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
            `status2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
            `status1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
            `msg` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
            `msg_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
            `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci";

        $res = $db->statement($sql);
        $flag = DB::table($table_name)->get()->count();
        

        if($flag<=0)
        {
            $sql2 =" ALTER TABLE ".$table_name."
            ADD PRIMARY KEY (`id`)";
            $db->statement($sql2);
            $sql3 = " ALTER TABLE ".$table_name."
            MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT"; 
            $db->statement($sql3);
            $user_name= session('user_name');
            $message = "Hei, ".$user_name ." welcome to Frontier Semiconductor";
            $make_array = array('msg_from'=>'admin','msg_to'=>session('user_name'),'msg'=>$message,'msg_type'=>'msg');
            DB::table($table_name)->insert($make_array);

        }


        return view('user.user_panel.conversation_with_admin');
    }
    public function conversation_message_store(Request $data)
    {
        //echo 'success';
        
        $omsg = $data->message;
        $user_name = session('user_name');
        $table_name = $user_name.'chatting_table';

        $msg_from = session('user_name');
        $msg_to ="admin" ;
        $make_array = array('msg_from'=>$msg_from, 'msg_to'=>$msg_to,'msg'=>$omsg,'msg_type'=>'msg');
        DB::table($table_name)->insert($make_array);

        echo 'success';


    }

    public function conversation_message_read()
    {
        $user_name = session('user_name');
        $table_name = $user_name.'chatting_table';
        $all_data = DB::table($table_name)->get();
        //echo $all_data;

        //echo "adil reza";

        $original_boss_data = '<ul class="chat-list">';
        $flag = 0;
        foreach($all_data as $data)
        {
            if($data->msg_from =='admin')
            {
                if($data->msg_type!='file')
                {
                $var1 = '<li class="chat-item">
                                <div class="chat-img"><img src="https://res.cloudinary.com/fsm/image/upload/v1562570331/fsm_media/fsm_demo_icon_avatar_ykcqjq.png" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">FSM Admin</h6>
                                    <div class="box bg-light-info">'.$data->msg.'</div>
                                </div>
                                <!-- <div class="chat-time">10:56 am</div> -->
                            </li>';

                $flag=1;
                }
                else if($data->msg_type=='file')
                {

                    $var1 = '<li class="chat-item">
                                <div class="chat-img"><img src="https://res.cloudinary.com/fsm/image/upload/v1562570331/fsm_media/fsm_demo_icon_avatar_ykcqjq.png" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">FSM Admin</h6>
                                    <div class="box bg-light-info"><a style="color:blue;" href="../conversation_file/'.$data->msg.'">'.$data->msg.'</a></div>
                                </div>
                                <!-- <div class="chat-time">10:56 am</div> -->
                            </li>';


                    $flag=1;

                   
                }

            }
            else
            {
                if($data->msg_type!='file')
                {
                    $var2 = ' <li class="odd chat-item">
                <div class="chat-content">
                    <div class="box bg-light-inverse">'.$data->msg.'</div>
                    <br>
                </div>
            </li>';
                $flag=0;

                }
                else if($data->msg_type=='file')
                {
                        //$file_name = $file_name.'/conversation_file';
                        
    

                    $var2 = ' <li class="odd chat-item">
                <div class="chat-content">
                    <div class="box bg-light-inverse"><a style="color:white;" href="../conversation_file/'.$data->msg.'">'.$data->msg.'</a></div>
                    <br>
                </div>
            </li>';
                $flag=0;

                }


                


            }


            if($flag==1)
            {
                $original_boss_data = $original_boss_data.$var1;
            }
            else
            {
                $original_boss_data = $original_boss_data.$var2;
            }
        }

        $original_boss_data= $original_boss_data.'</ul>';

        echo $original_boss_data;

    }



    public function  auto_registration_and_conversation($user_name)
    {
        return response($user_name);
    }











}
