<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $postSlug = strtoupper($post->slug);

        return view('post', ['post' => $post, 'title' => $postSlug]);
    }
}
