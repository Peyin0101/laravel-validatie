<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function handle(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'department' => 'required',
            'message' => 'required|string|min:20',
            'cookie_policy' => 'accepted',
        ]);
        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
