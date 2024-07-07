<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class chatModelController extends Controller
{
    public function index()
    {
        return view('website.chatModel.index') ;
    }

    public function predict(Request $request)
    {
        $input = $request->input('input');

        // Send POST request to Flask API
        $response = Http::post('http://127.0.0.1:5000/predict', [
            'prompt' => $input
        ]);

        // Return the response from Flask API
        return $response->json();
    }
}
