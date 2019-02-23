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
            session(['admin_login_status'=>'admin_access_granted']);
            echo "success";
        }
        else
        {
            session(['login_status'=>"failed"]);
            echo "failed";
        }
    }
    public function admin_logout()
    {
        session(['admin_login_status'=>'']);
        return redirect('/fsm_admin/private/login');
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
    public function widgets()
    {
        return view('admin.admin_panel.widgets');
    }
    public function tables()
    {
        return view('admin.admin_panel.tables');
    }
    public function grid_full()
    {
        return view('admin.admin_panel.grid_full');
    }
    public function form_basic()
    {
        return view('admin.admin_panel.form_basic');
    }
    public function form_wizard()
    {
        return view('admin.admin_panel.form_wizard');
    }
    public function library_text_editor()
    {
        return view('admin.admin_panel.library_text_editor');
    }

    public function library_text_editor_post(request $data)
    {
        $post_title = $data->post_title;
        $application_type= $data->application_type;
        $main_content = $data->main_content;
        $image_name="";
        if($data->hasfile('display_image'))
        {
            $image_name = $data->file('display_image')->getClientOriginalName();
            $name_upadate = $image_name;
            $data->file('display_image')->move(public_path().'/fsm_all_web_file/fsm_image_gallery/library_image',$image_name);
            //return ("succesfull inserted you ")

        }
        $make_array = array('post_title'=>$post_title, 'application_type'=>$application_type, 'display_image'=>$image_name, 'main_content'=>$main_content,'admin_email'=>"adilreza043@gmail.com" );
        DB::table('article_tables')->insert($make_array);
        return view("admin.admin_panel.library_text_editor")->with('msg_status','success');


    }




}
