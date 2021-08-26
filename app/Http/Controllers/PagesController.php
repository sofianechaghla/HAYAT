<?php

namespace App\Http\Controllers;
use Wink\WinkPost;
use Illuminate\Http\Request;

class PagesController extends Controller
{
public function action()
{
    $posts = WinkPost::with('tags')
    ->live()
        ->orderBy('publish_date','DESC')
        ->paginate(12);

        return view('action',[
            'posts'=>$posts
        ]);


}
}