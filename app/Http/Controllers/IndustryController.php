<?php

namespace App\Http\Controllers;
use App\Models\Concern;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {

        $concerns = Concern::all();

        return view('frontend.industry', compact('concerns'));
    }
    public function show($id)
    {
        $concern = Concern::findOrFail($id);
        $allConcerns = Concern::all(); // To display in the sidebar
        return view('frontend.industrydetails', compact('concern', 'allConcerns'));
    }


}
