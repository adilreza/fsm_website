<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{

    public function serialize_to_array($s_data)
	{
		$make_array = array();

		$len = strlen($s_data);
		$index_string="";
		$data_string ="";
		for($i=0;$i<$len;$i++)
		{
			if($s_data[$i]=="=")
			{

				for($j=$i+1;$j<$len;$j++)
				{
					if($s_data[$j]=="&"){
						break;
					}
					else{
						$data_string=$data_string.$s_data[$j];
					}

				}
				$make_array[$index_string]=$data_string;
				$index_string="";
				$data_string ="";
				$i=$j;
				
			}
			else
			{
				$index_string=$index_string.$s_data[$i];
				
			}
		}

		return $make_array;
	}







    public function admin_login()
    {
        return view('admin.admin_login');
    }
    public function admin_login_request(Request $data)
    {
        $email = $data->email;
        $password = $data->password;
        //$test_data = $email.$password;
        
        $about_admin = DB::table('admin_infos')->where('admin_email',$email)->where('admin_password',$password)->count();
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
        $file_name='';
        if($data->hasfile('attached_pdf_file'))
        {
            $file_name  = $data->file('attached_pdf_file')->getClientOriginalName();
            $data->file('attached_pdf_file')->move(public_path().'/fsm_all_web_file/fsm_image_gallery/library_image',$file_name);
        }
        if($file_name=='')
        {
            $make_array = array('post_title'=>$post_title, 'application_type'=>$application_type, 'display_image'=>$image_name,'blasting'=>'not published', 'main_content'=>$main_content,'admin_email'=>session('admin_email'),'attace_file_name'=>'none' );
        }
        else
        {
            $make_array = array('post_title'=>$post_title, 'application_type'=>$application_type, 'display_image'=>$image_name,'blasting'=>'not published', 'main_content'=>$main_content,'admin_email'=>session('admin_email'),'attace_file_name'=>$file_name);
        }
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
        DB::table('published_articles')->where('id', $delet_id)->delete();
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

    public function admin_presentation_upload()
    {
        return view('admin.admin_panel.presentation_upload');
    }
    public function admin_presentation_upload_req(request $data)
    {
        $p_title = $data->p_title;
        $p_description = $data->p_description;
        $file_name="";
        if($data->hasfile('presentation_file'))
        {
            $file_name = $data->file('presentation_file')->getClientOriginalName();
            $data->file('presentation_file')->move(public_path().'/fsm_all_web_file/fsm_presentation',$file_name);
        }

        $make_array = array('p_title'=>$p_title, 'p_description'=>$p_description,'presentation_file'=>$file_name);
        DB::table('presentation_lists')->insert($make_array);
        return view('admin.admin_panel.presentation_upload')->with("p_msg","Ok successfully uploaded your presentation");
        
    }
    public function give_sample_report()
    {
        return view('admin.admin_panel.give_sample_report');
    }
    public function admin_drf_request()
    {
        $user_compnay=array();
        $all_client = DB::table('user_registrations')->get();
        foreach($all_client as $client)
        {
            $user_compnay[$client->user_name]=$client->company;
        }

        $all_unseen_drf=DB::table('drf_tables')->where('drf_user_mark','green')->get();
        return view('admin.admin_panel.index')->with(['all_unseen_drf'=>$all_unseen_drf,'all_client'=>$user_compnay]);

    }

    public function drf_details_request($drf_id)
    {
        $drf_details = DB::table('drf_tables')->where('id',$drf_id)->get();
        foreach($drf_details as $d)
            $final=$d->drf_data;
        $data = $final;
        $data=$data."&";
        DB::table('drf_tables')->where('id',$drf_id)->update(['drf_status'=>"seen"]);
        $drf_detailss =$this->serialize_to_array($data);

        return view('user.user_panel.drf_form')->with(['data'=>$drf_detailss]);
    }
    public function drf_hiding_request($drf_id)
    {
       DB::table('drf_tables')->where('id',$drf_id)->update(['drf_user_mark'=>'red']);

        return back();
    }
    public function send_sample_replay_drf($user_name)
    {
        return view('admin.admin_panel.give_sample_report')->with('user_name', $user_name);
    }
    public function send_sample_report(request $data)
    {
        $sample_report_from ="fsm_admin";
        $sample_report_to = $data->to_sample;
        $sampl_report_file_name ="";
        if($data->hasfile('sample_report_file'))
        {
            $sampl_report_file_name = $data->file('sample_report_file')->getClientOriginalName();
            
            $data->file('sample_report_file')->move(public_path().'/fsm_all_web_file/sample_report',$sampl_report_file_name);

        }
        $make_array =array(['sampl_report_from'=>$sample_report_from,'sampl_report_to'=>$sample_report_to,'sample_report_name'=>$sampl_report_file_name]);
        DB::table('sampl_report_tables')->insert($make_array);
        return view('admin.admin_panel.give_sample_report')->with('success_message','Your sample Report has already sent to the user <span style="color:red">"'.$sample_report_to.'"</span> ');
    }
    public function delete_drf($drf_id)
    {
        DB::table('drf_tables')->where('id', $drf_id)->delete();
        return back();
    }

    
    public function drf_test()
    {
        $data = DB::table('drf_tables')->where('id',8)->get();
        $final="";
        foreach($data as $d)
            $final=$d->drf_data;
        $data = $final;
        $data=$data."&";
        $get_array=$this->serialize_to_array($data);

        return view('user.user_panel.drf_form')->with(['data'=>$get_array]);
    }

    public function rfq_from_client()
    {
        $user_compnay=array();
        $all_client = DB::table('user_registrations')->orderBy('id','DESC')->get();
        $all_user = $all_client;
        foreach($all_client as $client)
        {
            $user_compnay[$client->user_name]=$client->company;
        }

        //$all_unseen_rfq=DB::table('rfq_tables')->where('rfq_seen_unseen','unseen')->orderBy('id','DESC')->get();

        return view('admin.admin_panel.rfq_from_client')->with(['all_client'=>$user_compnay,'all_user'=>$all_user]);
    }
    public function rfq_download($rfq_id)
    {
        return back();

    }

    public function rfq_replay_admin($user_name)
    {
        session(['conversation_user'=>$user_name]);
        $all_history = DB::table('global_crms')->where('msg_from',$user_name)->orWhere('msg_to',$user_name)->orderBy('id','DESC')->get();
        return view('admin.admin_panel.rfq_replay_admin')->with(['user_name'=>$user_name,'history'=>$all_history]);

    }
    public function rfq_replay_admin_client(Request $data)
    {
        $rfq_from ="admin";
        $rfq_to = $data->to_sample;
        $file_type = $data->file_type;

        $rfq_file_name = "";
        $comments = $data->admin_comment;
        if($comments!="")
        {
        $optoional = $data->admin_comment;
        }
        else{
        $optoional = "No comment";
        }
        if($data->hasfile('rfq_report_file'))
        {
            $rfq_file_name = $data->file('rfq_report_file')->getClientOriginalName();
            $data->file('rfq_report_file')->move(public_path().'/fsm_all_web_file/rfq_file',$rfq_file_name);
            $make_array = array('msg_from'=>$rfq_from, 'msg_to'=>$rfq_to,'msg_seen_unseen'=>'unseen', 'msg_optional_comment'=>$optoional,'msg_file'=>$rfq_file_name,'msg_file_type'=>$file_type);
            DB::table('global_crms')->insert($make_array);
        }
        return view('admin.admin_panel.rfq_replay_admin')->with('success_message','Ok done you message sent');
    }

    public function newsletter_control()
    {
        $all_newsletter =DB::table('newsletter_lists')->get();
        return view('admin.admin_panel.newsletter_control')->with(['all_newsletters'=>$all_newsletter]);
    }

    public function newsletter_control_post(Request $data)
    {
       // echo $data;
       //echo "success";
       $newsletter_title = $data->newsletter_title;
       $newsletter_description = $data->newsletter_description;
       $newsletter_file = $data->newsletter_file;
       $file = $data->file('newsletter_file');

       $extension = $request->file('newsletter_file')->getClientOriginalExtension();
            $dir = 'uploads/';
            $filename = "adil". '_' . time() . '.' . $extension;
            $data->file('newsletter_file')->move($dir, $filename);




       //$data->file('newsletter_file')->move(public_path().'/fsm_all_web_file/rfq_file',$file);
       $make_array = array('admin_email'=>session('admin_email'), 'newsletter_title'=>$newsletter_title,'newsletter_short'=>$newsletter_description, 'newsletter_name'=>"bals");
       DB::table('newsletter_lists')->insert($make_array);
       echo 'success';

    }
    public function newsletter_uploader()
    {
        return view('admin.admin_panel.newsletter_uploader');
    }

    public function newsletter_control_post2(Request $data)
    {
        $newsletter_title = $data->newsletter_title;
        $newsletter_description = $data->newsletter_description;
        $newsletter_file_name='';
        if($data->hasfile('newsletter_file'))
        {
            $newsletter_file_name = $data->file('newsletter_file')->getClientOriginalName();
            $data->file('newsletter_file')->move(public_path().'/uploads',$newsletter_file_name);
           
        }
        $make_array = array('admin_email'=>session('admin_email'), 'newsletter_title'=>$newsletter_title,'newsletter_short'=>$newsletter_description, 'newsletter_name'=>$newsletter_file_name);
        DB::table('newsletter_lists')->insert($make_array);
        return view('admin.admin_panel.newsletter_uploader')->with('uploaded_newsletter',"uploaded succesfully");
    }
    public function news_letter_api($id)
    {
        $name = DB::table('newsletter_lists')->where('id',$id)->value('newsletter_name');
        $blade_file='/uploads/'.$name;
        
        return \File::get(public_path() .$blade_file);
    }

    public function newsletter_operation($id)
    {
        session(['newsletter_admin_opt_id'=>$id]);
        return view('admin.admin_panel.newsletter_operation');
    }

    public function newsletter_delete($id)
    {
        DB::table('newsletter_lists')->where('id',$id)->delete();
        $all_newsletter =DB::table('newsletter_lists')->get();
        return redirect('admin/newsletter_control')->with(['all_newsletters'=>$all_newsletter]);
    }

    public function single_email_insert(Request $data)
    {
        //echo "success";
        $email = $data->email;
        $name = $data->name;
        $cnt = DB::table('client_lists')->where('email',$email)->count();
        if($cnt>0)
        {
            echo 'failed';
        }
        else
        {
            $make_array = array('name'=>$name,'email'=>$email);
            DB::table('client_lists')->insert($make_array);
            echo 'success';
        }

    }




    public function client_conversation($user_name)
    {
        session(['current_user'=>$user_name]);
        return view('admin.admin_panel.conversation_with_client');
    }
    public function conversation_message_store(Request $data)
    {
        //return "Ok";
        $omsg = $data->message;
        $user_name = session('current_user');
        $table_name = $user_name.'chatting_table';
        //return $table_name;

        $msg_from = "admin";
        $msg_to = session('current_user');
        //return $msg_to;
        $make_array = array('msg_from'=>$msg_from, 'msg_to'=>$msg_to,'msg'=>$omsg,'msg_type'=>'msg');
        DB::table($table_name)->insert($make_array);
        
        echo 'success';
    }

    public function conversation_message_read()
    {
        $user_name = session('current_user');
        $table_name = $user_name.'chatting_table';
        $all_data = DB::table($table_name)->get();
        //echo $all_data;

        //echo "adil reza";

        $original_boss_data = '<ul class="chat-list">';
        $flag = 0;
        foreach($all_data as $data)
        {
            if($data->msg_from !='admin')
            {
                if($data->msg_type!='file')
                {
                
                $var1 = '<li class="chat-item">
                                <div class="chat-img"><img src="https://res.cloudinary.com/fsm/image/upload/v1562570331/fsm_media/fsm_demo_icon_avatar_ykcqjq.png" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">'.$data->msg_from.'</h6>
                                    <div class="box bg-light-info">'.$data->msg.'</div>
                                </div>
                                <!-- <div class="chat-time">10:56 am</div> -->
                            </li>';

                $flag=1;
                }
                else
                {
                    $var1 = '<li class="chat-item">
                                <div class="chat-img"><img src="https://res.cloudinary.com/fsm/image/upload/v1562570331/fsm_media/fsm_demo_icon_avatar_ykcqjq.png" alt="user"></div>
                                <div class="chat-content">
                                    <h6 class="font-medium">'.$data->msg_from.'</h6>
                                    <div class="box bg-light-info"><a style="color:blue;" href="../../conversation_file/'.$data->msg.'">'.$data->msg.'</a></div>
                                </div>
                                <!-- <div class="chat-time">10:56 am</div> -->
                            </li>';

                $flag=1;

                }

            }
            else
            {
                if($data->msg_type=='file')
                {
                    $var2 = ' <li class="odd chat-item">
                <div class="chat-content">
                    <div class="box bg-light-inverse"><a style="color:white;" href="../../conversation_file/'.$data->msg.'">'.$data->msg.'</a></div>
                    <br>
                </div>
                </li>';

                }
                else
                {
                $var2 = ' <li class="odd chat-item">
                <div class="chat-content">
                    <div class="box bg-light-inverse">'.$data->msg.'</div>
                    <br>
                </div>
                </li>';
                }
                $flag=0;
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

    public function about_client($client_name)
    {
        $all_about = DB::table('user_registrations')->where('user_name',$client_name)->get();

        return view('admin.admin_panel.about_client')->with(['about_user'=>$all_about]);
    }



}
