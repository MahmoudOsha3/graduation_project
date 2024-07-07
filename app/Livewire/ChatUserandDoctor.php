<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\Doctor ;
use App\Models\Patient;
use DB ;

class ChatUserandDoctor extends Component
{
    public $message_text ;
    public $doctor_id ;

    public function mount($doc_id)
    {
        $this->doctor_id = $doc_id ;
    }

    public function render()
    {
        $user_id = auth()->user()->id ;
        $messages = Message::where([
            ['user_id' , $user_id],
            ['doctor_id' , $this->doctor_id]
            ])->get() ;
        $doctor = Doctor::find($this->doctor_id);
        // $doctor = DB::table('doctors')->where('id' , $this->doctor_id)->get();
        return view('livewire.chat-userand-doctor' , compact('messages', 'doctor'));
    }

    public function sendMessage()
    {
        Message::create([
            'message_text' => $this->message_text ,
            'created_by' => 'user',
            'user_id' => auth()->user()->id ,
            'doctor_id' => $this->doctor_id
        ]);
        $this->reset('message_text') ;
    }
}
