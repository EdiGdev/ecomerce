<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class UserCredentialsEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $password;
    public $unique_code;
    public $roles;

    /**
     * Create a new message instance.
     *
     * @param string $email
     * @param string $password
     * @param string $unique_code
     * @param array $roles
     */
    public function __construct($email, $password, $unique_code, $roles)
    {
        $this->email = $email;
        $this->password = $password;
        $this->unique_code = $unique_code;
        $this->roles = $roles;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user-credentials')
            ->with([
                'email' => $this->email,
                'password' => $this->password,
                'unique_code' => $this->unique_code,
                'roles' => $this->roles,
            ])
            ->subject('¡Tus credenciales para acceder al sistema!');
    }
}