<?php

namespace App\Mail;

use App\Models\Question;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Markdown;
use Illuminate\Queue\SerializesModels;

class NotifyAuthorMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $question;
    public $author;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Question $question, User $author)
    {
        $this->question = $question;
        $this->author = $author;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Nuevo Comentario')
            ->markdown('mails.NotifyAuthor')
            ->with([
                'question' => $this->question,
                'author' => $this->author,
            ]);
    }

    /**
     * Get the markdown representation of the mail message.
     *
     * @return string
     */
    public function render()
    {
        return view('mails.NotifyAuthor', [
            'question' => $this->question,
            'author' => $this->author,
        ]);
    }
}
