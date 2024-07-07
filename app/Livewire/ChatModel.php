<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ChatModel extends Component
{
    public $prompt;
    public $messages = [];

    public function sendPrompt()
    {
        $response = Http::post('http://127.0.0.1:5000/predict', [
            'prompt' => $this->prompt
        ]);

        $responseBody = $response->json();

        if (isset($responseBody['response'])) {
            $this->messages[] = ['user' => 'You', 'message' => $this->prompt];
            $this->messages[] = ['user' => 'Bot', 'message' => $responseBody['response']];
        } else {
            $this->messages[] = ['user' => 'Error', 'message' => 'Unexpected API response.'];
        }

        $this->prompt = '';
    }

    public function render()
    {
        return view('livewire.chat-model');
    }
}
