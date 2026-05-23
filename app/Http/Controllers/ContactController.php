<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'email', 'max:120'],
            'message' => ['required', 'string', 'max:800'],
        ]);

        return back()
            ->with('contactSuccess', 'Thank you for your message! Your request was validated and received successfully.')
            ->withInput($request->only(['name', 'email', 'message']));
    }
}
