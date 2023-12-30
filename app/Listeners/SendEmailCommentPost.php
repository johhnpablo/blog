<?php

namespace App\Listeners;

use App\Events\CommentPost;
use App\Mail\MailCommentPost;
use Illuminate\Support\Facades\Mail;

class SendEmailCommentPost
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CommentPost $event)
    {
        Mail::to($event->user->email)->send(new MailCommentPost($event->user, $event->post));
    }
}
