<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('contact.contact');
    }

    public function storeMessage(Request $request) {
        $formData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'user_id' => 'nullable'
        ]);

        if (auth()->check()) {
            $formData['user_id'] = auth()->id();
        } else {
            $formData['user_id'] = null;
        }

        Contact::create($formData);

        return redirect('/')->with('message', 'Message sent successfully!');
    }
}
