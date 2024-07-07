<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Patient ;
use App\Models\Message ;


class ChatDoctorUser extends Component
{
    public $user_id ;
    public $message_text ;

    function mount($user_id)
    {
        $this->user_id = $user_id ;
    }

    public function render()
    {
        $user = Patient::where('id' , $this->user_id)->first();
        $messages = Message::where([
            ['doctor_id' , auth()->user()->id ],
            ['user_id' , $this->user_id ]
            ])->get() ;
        return view('livewire.chat-doctor-user' , compact('user' , 'messages'));
    }

    public function sendMessage()
    {
        try {
            Message::create([
                'message_text' => $this->message_text ,
                'created_by' => 'doctor',
                'user_id' => $this->user_id ,
                'doctor_id' => auth()->user()->id
            ]);
            $this->reset('message_text');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
