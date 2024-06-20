<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chatbots ;

class ChatbotsController extends Controller
{
    public function index()
    {
        return view('website.chatbot.index') ;
    }

    public function store(Request $request)
    {
        Chatbots::create([
            'input' => $request->input ,
            'response' => $request->response
        ]);

        return redirect()->back()->with(['success' , __('site.added_successfully') ]);
    }
}
