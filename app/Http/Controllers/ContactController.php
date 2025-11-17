<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'nullable',
            'message' => 'required'
        ]);

        ContactMessage::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'message' => $request->message,
            'status'  => 'Baru'
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function adminIndex()
    {
        $messages = ContactMessage::all();
        return view('admin.contact.index', compact('messages'));
    }
}
