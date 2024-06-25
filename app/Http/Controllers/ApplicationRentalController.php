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
    //
    public function submitApplication(Request $request)
    {
        /*var_dump($request->addmore);
        die;*/

            $validatedData = $request->validate([
                'photograph' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]);




            // Store the uploaded file


            if ($request->hasFile('photograph')) {
                $photographName = time() . "-" . $request->photograph->getClientOriginalName();
                $photographPath = $request->file('photograph')->storeAs('photograph', $photographName, 'public');
                $validatedData['photograph'] = $photographPath;
            }


            ApplicationRental::create([
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_address' => $request->applicant_address,
            'co_applicant_surname' => $request->co_applicant_surname,
            'co_applicant_name' => $request->co_applicant_name,
            'co_applicant_middle' => $request->co_applicant_middle,
            'co_applicant_address' => $request->co_applicant_address,
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
            'photograph' => $photographPath ,
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
            'yeardatedthis' => $request->yeardatedthis

        ]);

         // Redirect back with success message
         //return redirect("/application-for-rental")->with('success', 'Message received successfully!');

         $details = [
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_address' => $request->applicant_address,
            'co_applicant_surname' => $request->co_applicant_surname,
            'co_applicant_name' => $request->co_applicant_name,
            'co_applicant_middle' => $request->co_applicant_middle,
            'co_applicant_address' => $request->co_applicant_address,
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
            'photograph' => $photographPath ,
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
            'yeardatedthis' => $request->yeardatedthis
        ];

        Mail::to('jonathan.motta@yellomg.com')->send(new ApplicationRentalMail($details));

         try {
            return redirect()->back()->with('success', 'Application submitted successfully!');

        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }

    }
}
