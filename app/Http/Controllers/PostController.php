<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('Home');
    }
    public function termsAndServicesPost(){
        $termsContent = File::get(resource_path('views/TERMSANDCONDITIONS.md'));
        return view('terms', ['termsContent' => $termsContent]);
    }
    public function contactPost(){
        return view('contact');
    }
}
