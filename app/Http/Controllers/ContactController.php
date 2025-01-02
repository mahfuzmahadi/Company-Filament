<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Branch;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $branches = Branch::all(); // Fetch all branches
        return view('frontend.contact', compact('branches'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'client_message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}


