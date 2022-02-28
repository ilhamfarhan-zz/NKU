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
    public function EventConcept(){
        return view('services.EventConcept');
    }
    public function EventEntertainment(){
        return view('services.EventEntertainment');
    }
    public function EventManagement(){
        return view('services.EventManagement');
    }
    public function MediaExposure(){
        return view('services.MediaExposure');
    }
    public function Mice(){
        return view('services.Mice');
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
