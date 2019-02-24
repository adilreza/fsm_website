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
            session(['admin_email'=>$email]);
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

    public function email_delete($delete_id)
    {
        $blog = DB::table('client_lists')->where('id',$delete_id)->delete();
        return back();

    }

    public function client_mail_list()
    {
        $all_email = DB::table('client_lists')->get();
        return view('admin.admin_panel.client_mail_list')->with('client_emails',$all_email);
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
        $make_array = array('post_title'=>$post_title, 'application_type'=>$application_type, 'display_image'=>$image_name,'blasting'=>'not published', 'main_content'=>$main_content,'admin_email'=>session('admin_email') );
        DB::table('article_tables')->insert($make_array);
        //DB::table('article_tables')->where('id',$article_id)->update(['blasting'=>'already published']);
        return view("admin.admin_panel.library_text_editor")->with('msg_status','success');


    }

    public function article_send_to_client()
    {
        $all_article =DB::table('article_tables')->orderBy('id', 'DESC')->get();
        return view('admin.admin_panel.article_send_to_client')->with('all_articles',$all_article);
    }

    public function filter_by_application_type(request $data)
    {
        $application_type=$data->application_type;
        //return $application_type;
        if($application_type!="All type")
        {
        $selected_data=DB::table('article_tables')->where('application_type',$application_type)->orderBy('id', 'DESC')->get();

        return view('admin.admin_panel.article_send_to_client')->with('all_articles',$selected_data);
        }
        else
         {
            $all_article =DB::table('article_tables')->orderBy('id', 'DESC')->get();
            return view('admin.admin_panel.article_send_to_client')->with('all_articles',$all_article);
         }
    }
    public function delete_article($delet_id)
    {
        DB::table('article_tables')->where('id', $delet_id)->delete();
        return back();

    }

    public function publish_the_post($article_id)
    {
        $article = DB::table('article_tables')->where('id',$article_id)->get()->toArray();
        foreach($article as $art)
        {
            DB::table('published_articles')->insert(get_object_vars($art));
        }
        DB::table('article_tables')->where('id',$article_id)->update(['blasting'=>'already published']);
        DB::table('published_articles')->where('id',$article_id)->update(['blasting'=>'published']);
        
        return back();

    }


}
