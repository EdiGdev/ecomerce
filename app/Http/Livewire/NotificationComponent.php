<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{

    public $notifications, $count;

    protected $listeners = ['notification'];

    public function mount()
    {
        if (auth()->check()) {
            $this->notification();
        }
    }

    public function notification()
    {
        if (auth()->check()) {
            $this->notifications = auth()->user()->notifications->take(6);
            $this->count = auth()->user()->unreadNotifications->count();
           // logger('Notificaciones actualizadas');
        }
    }

    public function markAsRead()
    {
        if (auth()->check()) {
            auth()->user()->unreadNotifications->markAsRead();
            $this->count = 0;
        }
    }
    public function render()
    {
        return view('livewire.notification-component');
    }
}
