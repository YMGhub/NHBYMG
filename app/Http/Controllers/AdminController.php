<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
        //return " All users are shown here";
    }

    public function createAboutUs()
    {
        return view('admin.aboutus.create');
    }

    public function storeAboutUs(Request $request)
    {
        $request->validate([
            'section1' => 'required|string',
            'section2' => 'required|string',
            'section3' => 'required|string',
        ]);

        AboutUs::create([
            'section1' => $request->section1,
            'section2' => $request->section2,
            'section3' => $request->section3,
        ]);

        return redirect()->route('admin.index')->with('success', 'About Us content created successfully.');
    }
}