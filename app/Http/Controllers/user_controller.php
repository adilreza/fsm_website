<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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







}
