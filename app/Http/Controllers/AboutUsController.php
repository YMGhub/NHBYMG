<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index()
    {
        $contents = AboutUs::all();

        return view('admin.aboutus.index', compact('contents'));
    }

    public function create()
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

        return redirect()->route('admin.aboutus.index')->with('success', 'About Us content created successfully.');
    }




    public function edit($id)
    {

        $aboutus = AboutUs::find($id);
        return view('admin.aboutus.edit', compact('aboutus'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'section1' => 'required|string',
            'section2' => 'required|string',
            'section3' => 'required|string',
        ]);


        $aboutus = AboutUs::find($id);
        $aboutus->section1 = $request->input('section1');
        $aboutus->section2 = $request->input('section2');
        $aboutus->section3 = $request->input('section3');
        $aboutus->update();






        return redirect()->back()->with('success', 'Content updated successfully!');
    }

    //get content about us to frontpage
    public function aboutus_info()
    {
        $contents = AboutUs::all();

        return view('about-us', compact('contents'));
    }

    //get content mission and vision to frontpage
    public function mission_vision_info()
    {
        $contents = AboutUs::all();

        return view('mission-and-vision', compact('contents'));
    }
}
