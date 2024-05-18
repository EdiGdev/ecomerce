<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatComponent extends Component
{
    public $isChatOpen = false;

    public function toggleChat()
    {
        $this->isChatOpen = !$this->isChatOpen;
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}
