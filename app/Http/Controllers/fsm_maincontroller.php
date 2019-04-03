<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('product_details.product_details');
    }
    public function product_details_page_128l_C2C()
    {
        return view('product_details.product_details_128L_C2C');
    }
    public function product_details_page_128G_450()
    {
        return view('product_details.product_details_128G_450');
    }
    public function product_details_page_128NT()
    {
        return view('product_details.product_details_128NT');
    }
    public function product_details_page_128C2C()
    {
        return view('product_details.product_details_128_C2C');
    }
    public function product_details_page_413C2C()
    {
        return view('product_details.product_details_413_C2C');
    }
    public function product_details_page_413SA()
    {
        return view('product_details.product_details_413_SA');
    }
    public function product_details_page_413PR()
    {
        return view('product_details.product_details_413_PR');
    }
    public function product_details_page_413MOT()
    {
        return view('product_details.product_details_413_MOT');
    }

    public function product_details_page_500TC()
    {
        return view('product_details.product_details_500TC');
    }

    public function product_details_page_vitc2c()
    {
        return view('product_details.product_details_vit_c2c');
    }
    public function product_details_page_8108vite()
    {
        return view('product_details.product_details_8108_vite');
    }
    public function product_details_page_900C2C()
    {
        return view('product_details.product_details_900_c2c');
    }
    public function product_details_page_900TC_VAC()
    {
        return view('product_details.product_details_900TC_VAC');
    }
    public function product_details_page_raman360()
    {
        return view('product_details.product_details_raman_360');
    }
    public function product_details_page_127C2C()
    {
        return view('product_details.product_details_127_C2C');
    }
    public function product_details_page_rms()
    {
        return view('product_details.product_details_rms');
    }
    public function product_details_page_melt()
    {
        return view('product_details.product_details_melt');
    }
    public function product_details_page_aquaflex()
    {
        return view('product_details.product_details_aquaflex');
    }
    public function product_details_page_4pp()
    {
        return view('product_details.product_details_4pp');
    }
    public function product_details_page_rsl()
    {
        return view('product_details.product_details_rsl');
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
    public function tsv_process_control_page()
    {
        return view('adt.tsv_process_control');
    }
    public function film_adhesion_page()
    {
        return view('adt.film_adhesion');
    }
    public function raman_spectroscopy_page()
    {
        return view('adt.raman_spectroscopy');
    }

    public function laser_scanning_page()
    {
        return view('adt.laser_scanning');
    }
    public function thin_wafer_metrology_page()
    {
        return view('adt.thin_wafer_metrology');
    }
    public function electrical_characterization_page()
    {
        return view('adt.electrical_characterization');
    }
    public function low_coherence_page()
    {
        return view('adt.low_coherence');
    }

    public function application_page()
    {
        return view('application');
    }
    public function library_page()
    {
        $all_article_post = DB::table('published_articles')->get();
        return view('library')->with('all_article',$all_article_post);
    }
    public function filter_by_application(request $data)
    {
        $application_type = $data->cars;
        if($application_type!='Application All Type')
        {
        $all_article_post = DB::table('published_articles')->where('application_type',$application_type)->get();
        return view('library')->with('all_article',$all_article_post);
        }
        else
        {
        $all_article_post = DB::table('published_articles')->get();
        return view('library')->with('all_article',$all_article_post);

        }
    }

    public function newsletter1()
    {
        return view('admin.newsletter.fsm_newsletter');
    }
    public function newsletter2()
    {
        return view('admin.newsletter.fsm_newsletter2');
    }




}
