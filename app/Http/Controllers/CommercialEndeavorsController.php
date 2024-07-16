<?php

namespace App\Http\Controllers;

use App\Models\CommercialEndeavors;
use App\Models\CommercialEndeavorsInformation;
use Illuminate\Http\Request;


class CommercialEndeavorsController extends Controller
{
    //

    function index()
    {

        $contents = CommercialEndeavors::all();

        $info_page = CommercialEndeavorsInformation::where('id', 1)->exists();


        return view('admin.commercial-endeavors.index', compact('contents', 'info_page'));
    }

    public function create()
    {
        return view('admin.commercial-endeavors.create');
    }

    function store(Request $request)
    {


        $validatedData = $request->validate([
            'name_commercial' => 'required|max:255',
            'description_commercial' => 'required',
        ]);

        // Store the uploaded file



        CommercialEndeavors::create([
            'name_commercial' => $validatedData['name_commercial'],
            'description_commercial' => $validatedData['description_commercial'],
        ]);


        try {
            return redirect()->route('admin.commercial-endeavors.index')->with('success', 'The commercial endeavors has been saved successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }

    public function edit($id)
    {

        $commercial = CommercialEndeavors::find($id);
        return view('admin.commercial-endeavors.edit', compact('commercial'));
    }

    public function update(Request $request, CommercialEndeavors  $commercial)
    {

        $id = $_POST['id_commercial'];

        $commercial = CommercialEndeavors::find($id);

        $validatedData = $request->validate([
            'name_commercial' => 'required|max:255',
            'description_commercial' => 'required',
        ]);


        $commercial->name_commercial = $request->input('name_commercial');
        $commercial->description_commercial = $request->input('description_commercial');



        $update = $commercial->update();



        if ($update) {
            return  redirect()->route('admin.commercial-endeavors.index')->with('success', 'Content updated successfully!');
        }
    }

    public function destroy($id)
    {
        $ourExe = CommercialEndeavors::findOrFail($id);
        $ourExe->delete();


        return redirect()->route('admin.commercial-endeavors.index')->with('success', 'Commercial deleted successfully');
    }

    //get content our_executives us to frontpage
    public function commercial_info()
    {
        $data = CommercialEndeavors::all();
        $data1 = CommercialEndeavorsInformation::all();

        return view('commercial-endeavors', compact('data', 'data1'));
    }
}
