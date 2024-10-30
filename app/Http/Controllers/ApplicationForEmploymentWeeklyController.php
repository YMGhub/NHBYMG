<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationForEmploymentWeeklyMail;
use App\Mail\ApplicationForEmploymentWeeklyStatusMail;
use App\Models\ApplicationForEmploymentWeekly;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class   ApplicationForEmploymentWeeklyController extends Controller
{

    //admin Panel
    public function index()
    {
        $data = ApplicationForEmploymentWeekly::all();
        return view('admin.application-for-employment-weekly.index', compact('data'));
    }

    public function edit($id)
    {

        $submission = ApplicationForEmploymentWeekly::find($id);
        return view('admin.application-for-employment-weekly.edit', compact('submission'));
    }

    //frontend sava data

    public function submitApplication(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'telephone_no' => 'required|string|max:255',
            'citizenship' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'national_registration_no' => 'required|string|max:255',
            'nis_no' => 'required|string|max:255',
            'Masonry' => 'nullable|boolean',
            'Carpentry' => 'nullable|boolean',
            'Painting' => 'nullable|boolean',
            'Electrical' => 'nullable|boolean',
            'Plumbing' => 'nullable|boolean',
            'Labourer' => 'nullable|boolean',
            'Other' => 'nullable|boolean',
            'work_experience' => 'required|string|max:255',
            'education_qualification' => 'required|string|max:255',
            'refereejob_name' => 'required|string|max:255',
            'refereejob_address' => 'required|string|max:255',
            'refereejob_lenght_of_time' => 'required|string|max:255',
            'refereejob_name_2' => 'required|string|max:255',
            'refereejob_address_2' => 'required|string|max:255',
            'refereejob_lenght_of_time_2' => 'required|string|max:255',
            'any_other_information' => 'required|string|max:255',
            'signature' => 'required|string|max:255',
            'date' => 'required|string|max:255',
        ]);

        ApplicationForEmploymentWeekly::create([
            'name' => $request->name,
            'address' => $request->address,
            'telephone_no' => $request->telephone_no,
            'citizenship' => $request->citizenship,
            'date_of_birth' => $request->date_of_birth,
            'national_registration_no' => $request->national_registration_no,
            'nis_no' => $request->nis_no,
            'Masonry' => $request->has('Masonry'),
            'Carpentry' => $request->has('Carpentry'),
            'Painting' => $request->has('Painting'),
            'Electrical' => $request->has('Electrical'),
            'Plumbing' => $request->has('Plumbing'),
            'Labourer' => $request->has('Labourer'),
            'Other' => $request->has('Other'),
            'work_experience' => $request->work_experience,
            'education_qualification' => $request->education_qualification,
            'refereejob_name' => $request->refereejob_name,
            'refereejob_address' => $request->refereejob_address,
            'refereejob_lenght_of_time' => $request->refereejob_lenght_of_time,
            'refereejob_name_2' => $request->refereejob_name_2,
            'refereejob_address_2' => $request->refereejob_address_2,
            'refereejob_lenght_of_time_2' => $request->refereejob_lenght_of_time_2,
            'any_other_information' => $request->any_other_information,
            'signature' => $request->signature,
            'date' => $request->date,
        ]);

        //data send

        $details = [
            'name' => $request->name,
            'address' => $request->address,
            'telephone_no' => $request->telephone_no,
            'citizenship' => $request->citizenship,
            'date_of_birth' => $request->date_of_birth,
            'national_registration_no' => $request->national_registration_no,
            'nis_no' => $request->nis_no,
            'Masonry' => $request->has('Masonry'),
            'Carpentry' => $request->has('Carpentry'),
            'Painting' => $request->has('Painting'),
            'Electrical' => $request->has('Electrical'),
            'Plumbing' => $request->has('Plumbing'),
            'Labourer' => $request->has('Labourer'),
            'Other' => $request->has('Other'),
            'work_experience' => $request->work_experience,
            'education_qualification' => $request->education_qualification,
            'refereejob_name' => $request->refereejob_name,
            'refereejob_address' => $request->refereejob_address,
            'refereejob_lenght_of_time' => $request->refereejob_lenght_of_time,
            'refereejob_name_2' => $request->refereejob_name_2,
            'refereejob_address_2' => $request->refereejob_address_2,
            'refereejob_lenght_of_time_2' => $request->refereejob_lenght_of_time_2,
            'any_other_information' => $request->any_other_information,
            'signature' => $request->signature,
            'date' => $request->date,
        ];

        Mail::to('NHC.CustomerService@barbados.gov.bb')->send(new ApplicationForEmploymentWeeklyMail($details));



        try {
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }


    function update(Request $request, ApplicationForEmploymentWeekly  $applicationForEmploymentWeekly)
    {

        $id = $_POST['id_submission_for_employment'];

        $applicationForEmploymentWeekly = ApplicationForEmploymentWeekly::find($id);


        $applicationForEmploymentWeekly->status = $request->has('status');


        $update = $applicationForEmploymentWeekly->update();

        //send notification client make request by status request
        if ($request->has('status') == 1 || $request->has('status') == 0) {

            $details = [
                'status' => $request->status,
            ];

            Mail::to('jonathan.motta@yellomg.com')->send(new ApplicationForEmploymentWeeklyStatusMail($details));
        }



        if ($update) {
            return  redirect()->route('admin.application-for-employment-weekly.index')->with('success', 'Submission updated successfully!');
        }
    }
}