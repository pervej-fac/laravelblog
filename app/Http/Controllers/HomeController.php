<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index(){
        $data['recent_posts']=Post::with('category','author')->where('status','published')->limit(3)->latest()->get();
        return view('layouts.front.home',$data);
    }
}
