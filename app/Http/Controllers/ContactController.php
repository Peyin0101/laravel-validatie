<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function handle(ContactRequest $request)
    {
        $validatedData = $request->validated();

        return back()->with('success', 'Thank you for your message. We will get back to you soon.');
    }
}
