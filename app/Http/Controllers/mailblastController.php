<?php

namespace App\Http\Controllers;
use Input;
use App\Imports\client_email;
use App\client_list;
use DB;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;


class mailblastController extends Controller
{
    public function import_page()
    {
        return view('mail_blast.email_import_page');
    }
    public function insert_email()
    {
        Excel::import(new client_email, request()->file('import_file'));
        return view('mail_blast.email_import_page')->with('msg','successfull Inserted from your csv to database');
    }
}
