<?php

namespace App\Http\Controllers;

use App\Models\CareerAdminEmail as ModelsCareerAdminEmail;
use Illuminate\Http\Request;

class CareerAdminEmail extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contents = ModelsCareerAdminEmail::all();

        return view('admin.career.admin-email.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.career.admin-email.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'admin_email_form_career' => 'required|max:255',
        ]);

        // Store the uploaded file

        ModelsCareerAdminEmail::create([
            'admin_email_form_career' => $validatedData['admin_email_form_career'],
        ]);


        try {
            return redirect()->route('admin.career.admin-email.index')->with('success', 'The Information  has been saved successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $infoEmail = ModelsCareerAdminEmail::find($id);
        return view('admin.career.admin-email.edit', compact('infoEmail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $id = $_POST['id_admin_email'];

        $adminEmailCareer = ModelsCareerAdminEmail::find($id);

        $validatedData = $request->validate([
            'admin_email_form_career' => 'required|max:255',

        ]);


        $adminEmailCareer->admin_email_form_career = $request->input('admin_email_form_career');


        $update = $adminEmailCareer->update();



        if ($update) {
            return  redirect()->route('admin.career.admin-email.index')->with('success', 'Content Page updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}