<?php

namespace App\Http\Controllers;

use App\Models\OurExecutives;
use Illuminate\Http\Request;

class OurExecutivesController extends Controller
{
    //

    function index()
    {
        $contents = OurExecutives::all();

        return view('admin.our-executives.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.our-executives.create');
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo_path' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Store the uploaded file


        if ($request->hasFile('photo_path')) {
            $photographName = time() . "-" . $request->photo_path->getClientOriginalName();
            $photographPath = $request->file('photo_path')->storeAs('our_executives', $photographName, 'public');
            $validatedData['photo_path'] = $photographPath;
        }

        OurExecutives::create([
            'photo_path' => $request->photo_path,
            'name_executive' => $request->name_executive,
            'rol_executive' => $request->rol_executive,
            'phone_executive' => $request->phone_executive,
            'email_executive' => $request->email_executive,
            'facebook_executive' => $request->facebook_executive,
            'twitter_executive' => $request->twitter_executive,
            'gplus_executive' => $request->gplus_executive,
            'linkedin_executive' => $request->linkedin_executive,
        ]);


        try {
            return redirect()->back()->with('success', 'The executive has been saved successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }
}