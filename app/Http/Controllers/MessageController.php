<?php

namespace App\Http\Controllers;

use App\Models\Message;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        Message::create([
            'sender' => 'me',
            'content' => $request->input('content')
        ]);

        return redirect()->back();
    }
}
