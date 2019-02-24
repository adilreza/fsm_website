<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class article_handler extends Controller
{
    public function article_details($article_id)
    {
        $single_article = DB::table('published_articles')->where('id',$article_id)->get();
        return view('article_details')->with('single_article',$single_article);
    }
}
