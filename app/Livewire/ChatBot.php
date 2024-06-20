<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Chatbots;

class ChatBot extends Component
{
    public $message = '';
    public $messages = [];

    public function sendMessage()
    {
        if ($this->message == '') return;

        $userMessage = $this->message;
        $this->messages[] = ['user' => true, 'message' => $userMessage];

        $botResponse = Chatbots::where('input','like', '%'.$userMessage.'%')->first();

        if ($botResponse) {
            $this->messages[] = ['user' => false, 'message' => $botResponse->response];
        } else {
            $this->messages[] = ['user' => false, 'message' => 'آسف، لم أفهم ذلك. هل يمكنك المحاولة مرة أخرى؟'];
        }

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chat-bot');
    }
}
