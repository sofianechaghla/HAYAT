<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;
class MainController extends Controller
{
    public function welcome(){
        

        $newsapi = new NewsApi("e6368fc1cf994d6e8521d0cd0af0739e");
        $all_articles=$newsapi->getEverything($q = "sécheresses", $sources = null, $domains = null, $exclude_domains = null, $from = null, $to = null, $language = "fr", $sort_by = null,  $page_size = "5", $page = null);
        $articles=$all_articles->articles;
        return view('welcome',compact('articles'));
            }
}
