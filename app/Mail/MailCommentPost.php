<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCommentPost extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(public $user, public $post)
    {

    }

    public function build(): MailCommentPost
    {
        return $this->from('johnpablo.dev@gmail.com')
            ->subject('Fizeram um comentário no seu post.')
            ->markdown('emails.comment', [
                'url' => 'http://localhost/post/' . $this->post->slug
            ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
