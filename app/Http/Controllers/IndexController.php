<?php

namespace App\Http\Controllers;
use App\Models\Concern;
use App\Models\Mission;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $concerns = Concern::all();
        $missions = Mission::all();
        return view('frontend.index', compact('concerns','missions'));
    }

}
