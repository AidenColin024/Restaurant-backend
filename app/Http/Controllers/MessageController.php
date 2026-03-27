<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
        // Form tonen
    public function create()
    {
        return view('contact');
    }

    // Bericht opslaan
    public function store(Request $request)
    {
        Message::create($request->all());

        return redirect()->back()->with('success', 'Bericht verzonden!');
    }

    // Admin: alle berichten bekijken
    public function index()
    {
        $messages = Message::all();
        return view('messages', compact('messages'));
    }

}
