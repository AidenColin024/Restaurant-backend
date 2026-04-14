<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Formulier tonen
    public function create()
    {
        return view('contact');
    }

    // Bericht opslaan
    public function store(Request $request)
    {
        Message::create($request->all());

        return redirect()->route('contact');
    }

    // Admin: alle berichten bekijken
    public function index()
    {
        $messages = Message::all();
        return view('messages', compact('messages'));
    }
}