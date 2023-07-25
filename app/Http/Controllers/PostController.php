<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('Home');
    }
    public function termsAndServicesPost(){
        return view('terms');
    }
    public function contactPost(){
        return view('contact');
    }
}
