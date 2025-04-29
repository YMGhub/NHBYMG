<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use App\Models\ApplicationRental;
use App\Mail\ApplicationRentalMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class ApplicationRentalController extends Controller
{


    //admin Panel
    public function index()
    {
        $data = ApplicationRental::all();
        return view('admin.application-for-rental.index', compact('data'));
    }

    public function edit($id)
    {

        $submission = ApplicationRental::find($id);
        return view('admin.application-for-rental.edit', compact('submission'));
    }

    //
    public function submitApplication(Request $request)
    {
        /*var_dump($request->addmore);
        die;*/

        $validatedData = $request->validate([
            'photograph' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);



        $payslipsBase64 = [];
        if ($request->hasFile('payslips')) {


            foreach ($request->file('payslips') as $file) {
                if ($file->isValid()) {
                    $payslipsBase64[] = base64_encode(file_get_contents($file->getRealPath()));
                }
            }

            $payslipsBase64 = (json_encode($payslipsBase64));
        }


        //ID Card:
        // Verifica si hay un archivo antes de llamar a getRealPath()
        if ($request->hasFile('id_card')) {
            $idcardBase64 = base64_encode(file_get_contents($request->file('id_card')->getRealPath()));
        } else {
            $idCardBase64 = null; // O manejar el error de otro modo
        }


        //Job letter:
        if ($request->hasFile('job_letter')) {
            $job_letterBase64 = base64_encode(file_get_contents($request->file('job_letter')->getRealPath()));
        } else {
            $job_letterBase64 = null; // O manejar el error de otro modo
        }

        //Passport:
        if ($request->hasFile('passport')) {
            $passportBase64 = base64_encode(file_get_contents($request->file('passport')->getRealPath()));
        } else {
            $passportBase64 = null; // O manejar el error de otro modo
        }






        // Store the uploaded file


        if ($request->hasFile('photograph')) {
            $photographName = time() . "-" . $request->photograph->getClientOriginalName();
            $photographPath = $request->file('photograph')->storeAs('photograph', $photographName, 'public');
            $validatedData['photograph'] = $photographPath;
        };


        //documents


        ApplicationRental::create([
            'passport' => $passportBase64,
            'job_letter' => $job_letterBase64,
            'id_card' => $idcardBase64,
            'payslips' => $payslipsBase64,
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_address' => $request->applicant_address,
            'co_applicant_surname' => $request->co_applicant_surname,
            'co_applicant_name' => $request->co_applicant_name,
            'co_applicant_middle' => $request->co_applicant_middle,
            'co_applicant_address' => $request->co_applicant_address,

            'date_of_birth' => $request->date_of_birth,
            'tamis_number' => $request->tamis_number,
            'phone_home' => $request->phone_home,
            'phone_work' => $request->phone_work,
            'phone_cell' => $request->phone_cell,
            'email_field' => $request->email_field,
            'marital_status' => $request->marital_status,
            'citizenship_field' => $request->citizenship_field,
            'country_of_residence'=> $request->country_of_residence,
            'employer_field' => $request->employer_field,
            'pay_period'=> $request->pay_period,
            'employment_status'=> $request->employment_status,
            'co_maiden_name'=> $request->co_maiden_name,
            'co_national_registration_number'=> $request->co_national_registration_number,
            'co_tamis_number'=> $request->co_tamis_number,
            'co_date_of_birth'=> $request->co_date_of_birth,
            'co_phone_home'=> $request->co_phone_home,
            'co_phone_work' => $request->co_phone_work,
            'co_phone_cell' => $request->co_phone_cell,
            'co_email' => $request->co_email,
            'co_marital_status' => $request->co_marital_status,
            'co_citizenship_field' => $request->co_citizenship_field,
            'co_country_of_residence' => $request->co_country_of_residence,
            'co_employer_field' => $request->co_employer_field,
            'co_occupation_field' => $request->co_occupation_field,
            'co_period_of_employment' => $request->co_period_of_employment,
            'co_salary' => $request->co_salary,
            'co_pay_period' => $request->co_pay_period,
            'co_employment_status' => $request->co_employment_status,


            'national_registration_number' => $request->national_registration_number,
            'employer' => $request->employer,
            'occupation' => $request->occupation,
            'citizenship' => $request->citizenship,
            'telephone' => $request->telephone,
            'income' => $request->income,
            'size_of_family' => $request->size_of_family,
            'adults' => $request->adults,
            'children' => $request->children,
            'own_landorproperty' => $request->own_landorproperty,
            'state_address' => $request->state_address,
            'financial_institution' => $request->financial_institution,
            'give_details' => $request->give_details,
            'occupedaunit' => $request->occupedaunit,
            'photograph' => $photographPath,
            'addmore' => json_encode($request->addmore),
            'tenantorlodger' => $request->tenantorlodger,
            'addressoflandlord' => $request->addressoflandlord,
            'present_accommodation' => $request->present_accommodation,
            'structureofhouse' => $request->structureofhouse,
            'rental_date' => $request->rental_date,
            'typeofsanityfacilities' => $request->typeofsanityfacilities,
            'water_supply' => $request->water_supply,
            'housingofficercomments' => $request->housingofficercomments,
            'acknowledged' => $request->acknowledged,
            'dayof' => $request->dayof,
            'year' => $request->year,
            'by' => $request->by,
            'keysreceived' => $request->keysreceived,
            'thiskeys' => $request->thiskeys,
            'dayofkeys' => $request->dayofkeys,
            'yearkeys' => $request->yearkeys,
            'whitnessed' => $request->whitnessed,
            'thiswhitnessed' => $request->thiswhitnessed,
            'dayofwhitnessed' => $request->dayofwhitnessed,
            'yearwhitnessed' => $request->yearwhitnessed,
            'housingofficer' => $request->housingofficer,
            'signatures' => $request->signatures,
            'datedthis' => $request->datedthis,
            'dayofdatedthis' => $request->dayofdatedthis,
            'yeardatedthis' => $request->yeardatedthis,
            'applicant_address2' => $request->applicant_address2,
            'co_applicant_address2' => $request->co_applicant_address2,
            'applicant_parish' => $request->applicant_parish,
            'co_applicant_parish' => $request->co_applicant_parish,

        ]);

        // Redirect back with success message
        //return redirect("/application-for-rental")->with('success', 'Message received successfully!');

        $details = [
            'payslips' => $payslipsBase64,
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_address' => $request->applicant_address,
            'co_applicant_surname' => $request->co_applicant_surname,
            'co_applicant_name' => $request->co_applicant_name,
            'co_applicant_middle' => $request->co_applicant_middle,
            'co_applicant_address' => $request->co_applicant_address,

            'date_of_birth' => $request->date_of_birth,
            'tamis_number' => $request->tamis_number,
            'phone_home' => $request->phone_home,
            'phone_work' => $request->phone_work,
            'phone_cell' => $request->phone_cell,
            'email_field' => $request->email_field,
            'marital_status' => $request->marital_status,
            'citizenship_field' => $request->citizenship_field,
            'country_of_residence'=> $request->country_of_residence,
            'employer_field' => $request->employer_field,
            'pay_period'=> $request->pay_period,
            'employment_status'=> $request->employment_status,
            'co_maiden_name'=> $request->co_maiden_name,
            'co_national_registration_number'=> $request->co_national_registration_number,
            'co_tamis_number'=> $request->co_tamis_number,
            'co_date_of_birth'=> $request->co_date_of_birth,
            'co_phone_home'=> $request->co_phone_home,
            'co_phone_work' => $request->co_phone_work,
            'co_phone_cell' => $request->co_phone_cell,
            'co_email' => $request->co_email,
            'co_marital_status' => $request->co_marital_status,
            'co_citizenship_field' => $request->co_citizenship_field,
            'co_country_of_residence' => $request->co_country_of_residence,
            'co_employer_field' => $request->co_employer_field,
            'co_occupation_field' => $request->co_occupation_field,
            'co_period_of_employment' => $request->co_period_of_employment,
            'co_salary' => $request->co_salary,
            'co_pay_period' => $request->co_pay_period,
            'co_employment_status' => $request->co_employment_status,

            'national_registration_number' => $request->national_registration_number,
            'employer' => $request->employer,
            'occupation' => $request->occupation,
            'citizenship' => $request->citizenship,
            'telephone' => $request->telephone,
            'income' => $request->income,
            'size_of_family' => $request->size_of_family,
            'adults' => $request->adults,
            'children' => $request->children,
            'own_landorproperty' => $request->own_landorproperty,
            'state_address' => $request->state_address,
            'financial_institution' => $request->financial_institution,
            'give_details' => $request->give_details,
            'occupedaunit' => $request->occupedaunit,
            'photograph' => $photographPath,
            'addmore' => json_encode($request->addmore),
            'tenantorlodger' => $request->tenantorlodger,
            'addressoflandlord' => $request->addressoflandlord,
            'present_accommodation' => $request->present_accommodation,
            'structureofhouse' => $request->structureofhouse,
            'rental_date' => $request->rental_date,
            'typeofsanityfacilities' => $request->typeofsanityfacilities,
            'water_supply' => $request->water_supply,
            'housingofficercomments' => $request->housingofficercomments,
            'acknowledged' => $request->acknowledged,
            'dayof' => $request->dayof,
            'year' => $request->year,
            'by' => $request->by,
            'keysreceived' => $request->keysreceived,
            'thiskeys' => $request->thiskeys,
            'dayofkeys' => $request->dayofkeys,
            'yearkeys' => $request->yearkeys,
            'whitnessed' => $request->whitnessed,
            'thiswhitnessed' => $request->thiswhitnessed,
            'dayofwhitnessed' => $request->dayofwhitnessed,
            'yearwhitnessed' => $request->yearwhitnessed,
            'housingofficer' => $request->housingofficer,
            'signatures' => $request->signatures,
            'datedthis' => $request->datedthis,
            'dayofdatedthis' => $request->dayofdatedthis,
            'yeardatedthis' => $request->yeardatedthis,
            'applicant_address2' => $request->applicant_address2,
'co_applicant_address2' => $request->co_applicant_address2,
'applicant_parish' => $request->applicant_parish,
'co_applicant_parish' => $request->co_applicant_parish,

        ];

        //Mail::to('NHC.CustomerService@barbados.gov.bb')->send(new ApplicationRentalMail($details));

        try {
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }
}
