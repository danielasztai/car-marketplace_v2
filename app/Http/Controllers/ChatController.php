<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index(User $user) {
        return view('chat.index', [
            'user' => $user
        ]);
    }

    public function sendChatMessage(Request $request) {
        $request->validate([
            'message' => 'required'
        ]);
    }
}
