<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(User $user) {
        return view('chat.index', [
            'user' => $user
        ]);
    }

    public function sendChatMessage(Request $request) {
        $formFields = $request->validate([
            'message' => 'required',
        ]);

        $formFields['from_user'] = auth()->id();

        Message::create($formFields);
    }
}
