<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeNotification extends Notification
{
    protected $credentials;
    protected $clientCode;

    public function __construct($credentials, $clientCode)
    {
        $this->credentials = $credentials;
        $this->clientCode = $clientCode;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //return ['mail', 'database', 'broadcast'];
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->view('emails.welcome_email', [
                'credentials' => $this->credentials,
                'clientCode' => $this->clientCode,
            ])
            ->subject('Bienvenido a Meyca y Gana');
    }


     /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            //'url'   =>  route('message.show', $this->message->id),
           // 'message'   =>  'Has recibido un mensaje de ' . User::find($this->message->from_user_id)->name
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
           // 'message_id' => $this->message->id,
           // 'from_user_name' => User::find($this->message->from_user_id)->name,
        ]);
    }
}
