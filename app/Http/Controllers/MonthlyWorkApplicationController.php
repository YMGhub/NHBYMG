<?php

namespace App\Http\Controllers;

use App\Mail\MonthlyWorkApplicationMail;
use App\Models\MonthlyWorkApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MonthlyWorkApplicationController extends Controller
{
    //
    public function submitApplication(Request $request)
    {



        MonthlyWorkApplication::create([
            'application_for_the_post' => $request->application_for_the_post,
            'surname' => $request->surname,
            'christian_names' => $request->christian_names,
            'permanent_address' => $request->permanent_address,
            'telephone_no' => $request->telephone_no,
            'date_of_birth' => $request->date_of_birth,
            'nationality' => $request->nationality,
            'national_registration_no' => $request->national_registration_no,
            'national_insurance_no' => $request->national_insurance_no,
            'addmore1' => json_encode($request->addmore1),
            'addmore2' => json_encode($request->addmore2),
            'addmore3' => json_encode($request->addmore3),
            'addmore4' => json_encode($request->addmore4),
            'addmore5' => json_encode($request->addmore5),
            'name_personal_1' => $request->name_personal_1,
            'address_personal_1' => $request->address_personal_1,
            'occupation_personal_1' => $request->occupation_personal_1,
            'length_personal_1' => $request->length_personal_1,
            'name_personal_2' => $request->name_personal_2,
            'address_personal_2' => $request->address_personal_2,
            'occupation_personal_2' => $request->occupation_personal_2,
            'length_personal_2' => $request->length_personal_2,
            'name_testimonial_1' => $request->name_testimonial_1,
            'address_testimonial_1' => $request->address_testimonial_1,
            'occupation_testimonial_1' => $request->occupation_testimonial_1,
            'name_testimonial_2' => $request->name_testimonial_2,
            'address_testimonial_2' => $request->address_testimonial_2,
            'occupation_testimonial_2' => $request->occupation_testimonial_2,
            'signature' => $request->signature,
            'any_other_information' => $request->any_other_information,
            'date' => $request->date,

        ]);


        //data send
        $details = [
            'application_for_the_post' => $request->application_for_the_post,
            'surname' => $request->surname,
            'christian_names' => $request->christian_names,
            'permanent_address' => $request->permanent_address,
            'telephone_no' => $request->telephone_no,
            'date_of_birth' => $request->date_of_birth,
            'nationality' => $request->nationality,
            'national_registration_no' => $request->national_registration_no,
            'national_insurance_no' => $request->national_insurance_no,
            'addmore1' => json_encode($request->addmore1),
            'addmore2' => json_encode($request->addmore2),
            'addmore3' => json_encode($request->addmore3),
            'addmore4' => json_encode($request->addmore4),
            'addmore5' => json_encode($request->addmore5),
            'name_personal_1' => $request->name_personal_1,
            'address_personal_1' => $request->address_personal_1,
            'occupation_personal_1' => $request->occupation_personal_1,
            'length_personal_1' => $request->length_personal_1,
            'name_personal_2' => $request->name_personal_2,
            'address_personal_2' => $request->address_personal_2,
            'occupation_personal_2' => $request->occupation_personal_2,
            'length_personal_2' => $request->length_personal_2,
            'name_testimonial_1' => $request->name_testimonial_1,
            'address_testimonial_1' => $request->address_testimonial_1,
            'occupation_testimonial_1' => $request->occupation_testimonial_1,
            'name_testimonial_2' => $request->name_testimonial_2,
            'address_testimonial_2' => $request->address_testimonial_2,
            'occupation_testimonial_2' => $request->occupation_testimonial_2,
            'signature' => $request->signature,
            'any_other_information' => $request->any_other_information,
            'date' => $request->date,
        ];




        Mail::to('NHC.CustomerService@barbados.gov.bb')->send(new MonthlyWorkApplicationMail($details));



        try {
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }

    //dashboard Index Admin

    public function index()
    {
        $data = MonthlyWorkApplication::all();
        return view('admin.application-for-employment-monthly.index', compact('data'));
    }

    public function edit($id)
    {

        $submission = MonthlyWorkApplication::find($id);
        return view('admin.application-for-employment-monthly.edit', compact('submission'));
    }

    function update(Request $request, MonthlyWorkApplication  $MonthlyWorkApplication)
    {

        $id = $_POST['id_submission_for_employment_monthly'];

        $MonthlyWorkApplication = MonthlyWorkApplication::find($id);


        $MonthlyWorkApplication->status = $request->has('status');


        $update = $MonthlyWorkApplication->update();

        //send notification client make request by status request
        if ($request->has('status') == 1 || $request->has('status') == 0) {

            $details = [
                'status' => $request->status,
            ];

            // Mail::to('jonathan.motta@yellomg.com')->send(new ApplicationForEmploymentWeeklyStatusMail($details));
        }



        if ($update) {
            return  redirect()->route('admin.application-for-employment-monthly.index')->with('success', 'Submission updated successfully!');
        }
    }
}