<?php

namespace App\Http\Controllers;

use App\Models\CommercialEndeavorsInformation;
use Illuminate\Http\Request;

class CommercialEndeavorsInformationController extends Controller
{
    //
    function index()
    {
        $contents = CommercialEndeavorsInformation::all();

        return view('admin.commercial-endeavors.information.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.commercial-endeavors.information.create');
    }

    function store(Request $request)
    {


        $validatedData = $request->validate([
            'title_page' => 'required|max:255',
            'description_page' => 'required',
        ]);

        // Store the uploaded file

        CommercialEndeavorsInformation::create([
            'title_page' => $validatedData['title_page'],
            'description_page' => $validatedData['description_page'],
        ]);


        try {
            return redirect()->route('admin.commercial-endeavors.index')->with('success', 'The Information Page has been saved successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }

    public function edit($id)
    {

        $commercial_info_page = CommercialEndeavorsInformation::find($id);
        return view('admin.commercial-endeavors.information.edit', compact('commercial_info_page'));
    }


    public function update(Request $request, CommercialEndeavorsInformation  $commercial)
    {

        $id = $_POST['id_commercial_info_page'];

        $commercial = CommercialEndeavorsInformation::find($id);

        $validatedData = $request->validate([
            'title_page' => 'required|max:255',
            'description_page' => 'required',
        ]);


        $commercial->title_page = $request->input('title_page');
        $commercial->description_page = $request->input('description_page');



        $update = $commercial->update();



        if ($update) {
            return  redirect()->route('admin.commercial-endeavors.index')->with('success', 'Content Page updated successfully!');
        }
    }

    public function destroy($id)
    {
        $ourExe = CommercialEndeavorsInformation::findOrFail($id);
        $ourExe->delete();


        return redirect()->route('admin.commercial-endeavors.index')->with('success', 'Commercial deleted successfully');
    }

    //get content our_executives us to frontpage
    public function commercial_info_page()
    {
        $data = CommercialEndeavorsInformation::all();

        return view('commercial-endeavors', compact('data'));
    }
}
