<?php

namespace App\Http\Controllers;

use App\Models\OurExecutives;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


        $request->validate([
            'photo_path' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the uploaded file


        $photographPath = "";
        // Store the uploaded file
        if ($request->hasFile('photo_path')) {
            $name = str_replace(' ', '', $request->photo_path->getClientOriginalName());
            $photographName = time() . "-" . $name;
            $photographPath = $request->file('photo_path')->storeAs('our_executives', $photographName, 'public');
            $validatedData['photo_path'] = $photographPath;
        }


        OurExecutives::create([
            'photo_path' => $photographPath,
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
            return redirect()->route('admin.our-executives.index')->with('success', 'The executive has been saved successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }


    public function edit($id)
    {

        $ourexecutives = OurExecutives::find($id);
        return view('admin.our-executives.edit', compact('ourexecutives'));
    }

    public function update(Request $request, OurExecutives  $ourExecutives)
    {

        $id = $_POST['id_executive'];

        $validatedData = $request->validate([
            'photo_path' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photographPath = "";
        // Store the uploaded file
        if ($request->hasFile('photo_path')) {
            $name = str_replace(' ', '', $request->photo_path->getClientOriginalName());
            $photographName = time() . "-" . $name;
            $photographPath = $request->file('photo_path')->storeAs('our_executives', $photographName, 'public');
            $validatedData['photo_path'] = $photographPath;
        }



        $ourexecutives = OurExecutives::find($id);

        $ourexecutives->photo_path = $photographPath;
        $ourexecutives->name_executive = $request->input('name_executive');
        $ourexecutives->rol_executive = $request->input('rol_executive');
        $ourexecutives->phone_executive = $request->input('phone_executive');
        $ourexecutives->email_executive = $request->input('email_executive');
        $ourexecutives->facebook_executive = $request->input('facebook_executive');

        $ourexecutives->twitter_executive = $request->input('twitter_executive');
        $ourexecutives->gplus_executive = $request->input('gplus_executive');
        $ourexecutives->linkedin_executive = $request->input('linkedin_executive');




        //$ourexecutives->update();

        $update = $ourexecutives->update();



        if ($update) {
            return  redirect()->route('admin.our-executives.index')->with('success', 'Content updated successfully!');
        }
    }

    public function destroy($id)
    {
        $ourExe = OurExecutives::findOrFail($id);
        $ourExe->delete();


        return redirect()->route('admin.our-executives.index')->with('success', 'Executive deleted successfully');
    }

    //get content our_executives us to frontpage
    public function ourexecutives_info()
    {
        $data = OurExecutives::all();

        return view('our-executives', compact('data'));
    }
}
