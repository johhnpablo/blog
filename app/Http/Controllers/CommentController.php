<?php

namespace App\Http\Controllers;

use App\Events\CommentPost;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'comment' => 'required'
        ]);

        event(new CommentPost(auth()->user(), $post));
        dd('fim');

        $created = Comment::create([
            'comment' => $validated['comment'],
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
        ]);

        if ($created) {
            return back();
        }
        return back()->with('error_create_comment', 'Ocoreu um erro ao cadastrar o comentário, tente novamente.');
    }


    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();

    }
}
