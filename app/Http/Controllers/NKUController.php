<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NKUController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function conference(){
        return view('services.conference');
    }
    public function entertainment(){
        return view('services.entertainment');
    }
    public function exhibitions(){
        return view('services.exhibitions');
    }
    public function incentives(){
        return view('services.incentives');
    }
    public function meetings(){
        return view('services.meetings');
    }
    public function list(){
        return view('ListEvent');
    }
    public function image(){
        return view('ImageEvent');
    }
    public function contact(){
        return view('contact');
    }
}
