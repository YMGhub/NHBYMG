<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Mail\CareersMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function showForm()
    {
        return view('customer.careers');
    }
    public function submitApplication(Request $request)
    {


        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'age' => 'required|integer|min:18|max:100',
            'phone_home' => 'nullable|string|max:255',
            'phone_work' => 'nullable|string|max:255',
            'phone_mobile' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'resume' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
            'cover_letter' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            $resumeName = time() . "-" . $request->resume->getClientOriginalName();
            $resumePath = $request->file('resume')->storeAs('resumes', $resumeName, 'public');
            $validatedData['resume'] = $resumePath;
        }

        if ($request->hasFile('cover_letter')) {
            $coverLetterName = time() . "-" . $request->cover_letter->getClientOriginalName();
            $coverLetterPath = $request->file('cover_letter')->storeAs('cover_letters', $coverLetterName, 'public');
            $validatedData['cover_letter'] = $coverLetterPath;
        }

        Career::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'phone_home' => $request->phone_home,
            'phone_work' => $request->phone_work,
            'phone_mobile' => $request->phone_mobile,
            'email' => $request->email,
            'resume' => $resumePath, // Assuming $resumeUrl is the URL of the stored resume file
            'cover_letter' => $coverLetterPath, // Assuming $coverLetterUrl is the URL of the stored cover letter file
        ]);

        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'age' => $request->age,
            'phone_home' => $request->phone_home,
            'phone_work' => $request->phone_work,
            'phone_mobile' => $request->phone_mobile,
            'email' => $request->email,
            'resume' => $resumePath, // Assuming $resumeUrl is the URL of the stored resume file
            'cover_letter' => $coverLetterPath, // Assuming $coverLetterUrl is the URL of the stored cover letter file
        ];

        Mail::to('jonathan.motta@yellomg.com')->send(new CareersMail($details));

        // Redirect back with success message
        try {
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }


    //admin Panel
    public function index()
    {
        $data = Career::all();
        return view('admin.career.index', compact('data'));
    }
}