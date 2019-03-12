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
        return view('user.user_panel.rfq_page');
    }
    
    public function rfq_page_insert(request $data)
    {
        $file_name="";
        $rfq_from =session('user_name');
        $rfq_to = "admin";
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
            $make_array = array('rfq_from'=>$rfq_from, 'rfq_to'=>$rfq_to, 'optional_comment'=>$rfq_comment,'rfq_file_name'=>$file_name);
            DB::table('rfq_tables')->insert($make_array);
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
        $all_history = DB::table('rfq_tables')->where('rfq_from',$user)->orderBy('id','DESC')->orWhere('rfq_to',$user)->get();
        return view('user.user_panel.rfq_page')->with('history',$all_history);
    }






}
