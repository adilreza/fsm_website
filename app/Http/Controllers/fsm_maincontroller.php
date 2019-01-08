<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fsm_maincontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about_us_page()
    {
        return view('about_us');
    }
    public function login_page()
    {
        return view('login');
    }
    public function registration_page()
    {
        return view('register');
    }
    public function privacy_policy_page()
    {
        return view('privacy_policy');
    }
    public function faq_page()
    {
        return view('faq');
    }
    public function services_page()
    {
        return view('services');
    }


    public function accordion_page()
    {
        return view('accordion');
    }

    public function appointment_page()
    {
        return view('appointment');
    }
    public function blog_classic_page()
    {
        return view('blog_classic');
    }

    public function product_details_page()
    {
        return view('product_details');
    }

    public function product_fullwidth_page()
    {
        return view('product_fullwidth');
    }
    public function product_fullwidth2_page()
    {
        return view('product_fullwidth2');
    }
    public function product_fullwidth3_page()
    {
        return view('product_fullwidth3');
    }
    public function product_list_page()
    {
        return view('product_list');
    }
    public function product_list2_page()
    {
        return view('product_list2');
    }


    public function our_team_page()
    {
        return view('our_team');
    }
    public function m404_page()
    {
        return view('m404');
    }
    public function m503_page()
    {
        return view('m503');
    }
    public function contact_us_page()
    {
        return view('contact_us');
    }

    public function film_stress_page()
    {
        return view('adt.film_stress');
    }







}
