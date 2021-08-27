<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;

class EauController extends Controller
{
    public function eau()
{
    $pages = WinkPage::
    // ->live()
        // ->orderBy('publish_date','DESC')
        paginate(12);

        return view('eau',[
            'pages'=>$pages
        ]);


}

}

