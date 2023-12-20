<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::limit(10)->orderby('id', 'desc')->get();
        return view('home', ['title' => 'Home - Nordeste.Tech 🌵', 'posts' => $posts]);
    }
}
