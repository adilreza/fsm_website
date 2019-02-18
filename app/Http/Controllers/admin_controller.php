<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{
    public function admin_login()
    {
        return view('admin.admin_login');
    }
    public function admin_login_request(Request $data)
    {
        $email = $data->email;
        $password = $data->password;
        //$test_data = $email.$password;
        
        $about_admin = DB::table('admin_infos')->where('admin_email',$email)->where('admin_password',$password)->first();
        if($about_admin)
        {
            session(['login_status'=>"success"]);
            echo "success";

        }
        else
        {
            session(['login_status'=>"failed"]);
            echo "failed";
        }
    }
    public function admin_report()
    {
        return view('admin.admin_report');
    }
    public function admin_report_request(Request $data)
    {
        $name = $data->name;
        $email = $data->email;
        $message = $data->report_message;

        $make_array= array('admin_reporter_name'=>$name,'adnin_reporter_email'=>$email,'admin_reporter_message'=>$message);
        DB::table('admin_problem_reports')->insert($make_array);
        echo "success";
    }

    public function home()
    {
        return view('admin.admin_panel.index');
    }

    public function charts()
    {
        return view('admin.admin_panel.charts');
    }




}
