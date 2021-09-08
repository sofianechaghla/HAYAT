<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
   {
        $this->middleware('auth',['except' => ['home','action','about']]);
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function action()
    {
        return view('action');
        
    }
    public function eau()
    {
        return view('eau');
        
    }
    public function don()
    {
        return view('don');
        
    }
   
}
