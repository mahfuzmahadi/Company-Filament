<?php

namespace App\Http\Controllers;
use App\Models\Speech;
use App\Models\Mission;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $speeches = Speech::all();
        $missions = Mission::all();
        return view('frontend.about', compact('speeches','missions'));
    }
}

