<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationForThePurchaseMail;
use App\Mail\ApplicationForThePurchaseStatusMail;
use App\Models\ApplicationForThePurchase;
use App\Mail\ApplicationRentalMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ApplicationForThePurchaseController extends Controller
{
    //admin Panel
    public function index()
    {
        $data = ApplicationForThePurchase::all();
        return view('admin.application-for-the-purchase.index', compact('data'));
    }

    public function edit($id)
    {

        $submission = ApplicationForThePurchase::find($id);
        return view('admin.application-for-the-purchase.edit', compact('submission'));
    }

    //Frontend
    public function submitApplication(Request $request)
    {

        ApplicationForThePurchase::create([
            'salutation' => $request->salutation,
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_maiden_name' => $request->applicant_maiden_name,
            'applicant_national_registration_number' => $request->applicant_national_registration_number,
            'applicant_tamis_no' => $request->applicant_tamis_no,
            'applicant_address' => $request->applicant_address,
            'applicant_date_birth' => $request->applicant_date_birth,
            'applicant_phone_home' => $request->applicant_phone_home,
            'applicant_phone_work' => $request->applicant_phone_work,
            'applicant_phone_cell' => $request->applicant_phone_cell,
            'applicant_email' => $request->applicant_email,
            'marital_status' => $request->marital_status,
            'applicant_citizenship' => $request->applicant_citizenship,
            'applicant_country_of_residence' => $request->applicant_country_of_residence,
            'coapplicant_salutation' => $request->coapplicant_salutation,
            'coapplicant_surname' => $request->coapplicant_surname,
            'coapplicant_first' => $request->coapplicant_first,
            'coapplicant_middle' => $request->coapplicant_middle,
            'coapplicant_maiden_name' => $request->coapplicant_maiden_name,
            'coapplicant_national_registration_number' => $request->coapplicant_national_registration_number,
            'coapplicant_tamis_no' => $request->coapplicant_tamis_no,
            'coapplicant_address' => $request->coapplicant_address,
            'coapplicant_date_birth' => $request->coapplicant_date_birth,
            'coapplicant_phone_home' => $request->coapplicant_phone_home,
            'coapplicant_phone_work' => $request->coapplicant_phone_work,
            'coapplicant_phone_cell' => $request->coapplicant_phone_cell,
            'applicant_period' => $request->applicant_period,
            'co_applicant_period' => $request->co_applicant_period,
            'applicant_occup' => $request->applicant_occup,
            'co_applicant_occup' => $request->co_applicant_occup,
            'applicant_employer' =>  $request->applicant_employer,
            'co_applicant_employer' =>  $request->co_applicant_employer,
            'applicant_salary' =>  $request->applicant_salary,
            'co_applicant_salary' =>  $request->co_applicant_salary,
            'government' =>  $request->government,
            'private' => $request->private,
            'self' =>  $request->self,
            'monthly' =>  $request->monthly,
            'weekly' =>  $request->weekly,
            'forth_nightly' =>  $request->forth_nightly,
            'house_type' => $request->house_type,
            'purchasing_options' =>  $request->purchasing_options,
            'preferedhousetype' =>  $request->preferedhousetype,
            'no_of_occupants' =>  $request->no_of_occupants,
            'children_ages' =>  $request->children_ages,
            'disabilitieswithinthehousehold' =>  $request->disabilitieswithinthehousehold,
            'alternative' => $request->alternative,
            'alternative_amount' =>  $request->alternative_amount,
            'alternative1' =>  $request->alternative1,
            'alternative_amount2' =>  $request->alternative_amount2,
            'areyourenting' =>  $request->areyourenting,
            'ifyeshowmuch' =>  $request->ifyeshowmuch,
            'yourownland' =>  $request->yourownland,
            'tenant' =>  $request->tenant,
            'land_or_agent' =>  $request->land_or_agent,
            'financethepurchsaseproporty' => $request->financethepurchsaseproporty,
            'mortgage_or_loan' =>  $request->mortgage_or_loan,
            'the_amount_of_deposit' =>  $request->the_amount_of_deposit,
            'land_or_property' =>  $request->land_or_property,
            'signature_applican' =>  $request->signature_applicant,
            'signature_coapplicant' =>  $request->signature_coapplicant,
            'dateend' =>  $request->dateend,
            'recommended_by' => $request->recommended_by,
            'approved' =>  $request->approved,
            'date_official' =>  $request->date_official,
            'remarks_official' =>  $request->remarks_official,
            'qualifying_amount_official' =>  $request->qualifying_amount_official,

            'app_employer_field'  => $request->app_employer_field,
            'app_occupation_field'  => $request->app_occupation_field,
            'app_period_of_employment'=> $request->app_period_of_employment,
            'app_salary' => $request->app_salary,
            'app_employment_status' => $request->qualifying_amount_official,
            'coapplicant_email' => $request->coapplicant_email,
            'co_marital_status' => $request->co_marital_status,
            'co_applicant_citizenship' => $request->co_applicant_citizenship,
            'co_applicant_country_of_residence' => $request->co_applicant_country_of_residence,
            'co_app_employer_field' => $request->co_app_employer_field,
            'co_app_occupation_field' => $request->co_app_occupation_field,
            'co_app_period_of_employment'=> $request->co_app_period_of_employment,
            'co_app_salary'=> $request->co_app_salary,
            'co_app_pay_period'=> $request->co_app_pay_period,
            'co_app_employment_status'=> $request->co_app_employment_status,

            'applicant_address2'=> $request->applicant_address2,
        'applicant_address3'=> $request->applicant_address3,
        'applicant_parish'=> $request->applicant_parish,
        'coapplicant_address2'=> $request->coapplicant_address2,
        'coapplicant_address3'=> $request->coapplicant_address3,
        'coapplicant_parish'=> $request->coapplicant_parish,
        'addmore'=> $request->addmore,
        'land_or_lot'=> $request->land_or_lot,
        'bankstatements'=> $request->bankstatements
        ]);


        // Redirect back with success message and send email
        $details = [
            'salutation' => $request->salutation,
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_maiden_name' => $request->applicant_maiden_name,
            'applicant_national_registration_number' => $request->applicant_national_registration_number,
            'applicant_tamis_no' => $request->applicant_tamis_no,
            'applicant_address' => $request->applicant_address,
            'applicant_date_birth' => $request->applicant_date_birth,
            'applicant_phone_home' => $request->applicant_phone_home,
            'applicant_phone_work' => $request->applicant_phone_work,
            'applicant_phone_cell' => $request->applicant_phone_cell,
            'applicant_email' => $request->applicant_email,
            'marital_status' => $request->marital_status,
            'applicant_citizenship' => $request->applicant_citizenship,
            'applicant_country_of_residence' => $request->applicant_country_of_residence,
            'coapplicant_salutation' => $request->coapplicant_salutation,
            'coapplicant_surname' => $request->coapplicant_surname,
            'coapplicant_first' => $request->coapplicant_first,
            'coapplicant_middle' => $request->coapplicant_middle,
            'coapplicant_maiden_name' => $request->coapplicant_maiden_name,
            'coapplicant_national_registration_number' => $request->coapplicant_national_registration_number,
            'coapplicant_tamis_no' => $request->coapplicant_tamis_no,
            'coapplicant_address' => $request->coapplicant_address,
            'coapplicant_date_birth' => $request->coapplicant_date_birth,
            'coapplicant_phone_home' => $request->coapplicant_phone_home,
            'coapplicant_phone_work' => $request->coapplicant_phone_work,
            'coapplicant_phone_cell' => $request->coapplicant_phone_cell,
            'applicant_period' => $request->applicant_period,
            'co_applicant_period' => $request->co_applicant_period,
            'applicant_occup' => $request->applicant_occup,
            'co_applicant_occup' => $request->co_applicant_occup,
            'applicant_employer' =>  $request->applicant_employer,
            'co_applicant_employer' =>  $request->co_applicant_employer,
            'applicant_salary' =>  $request->applicant_salary,
            'co_applicant_salary' =>  $request->co_applicant_salary,
            'government' =>  $request->government,
            'private' => $request->private,
            'self' =>  $request->self,
            'monthly' =>  $request->monthly,
            'weekly' =>  $request->weekly,
            'forth_nightly' =>  $request->forth_nightly,
            'house_type' => $request->house_type,
            'purchasing_options' =>  $request->purchasing_options,
            'preferedhousetype' =>  $request->preferedhousetype,
            'no_of_occupants' =>  $request->no_of_occupants,
            'children_ages' =>  $request->children_ages,
            'disabilitieswithinthehousehold' =>  $request->disabilitieswithinthehousehold,
            'alternative' => $request->alternative,
            'alternative_amount' =>  $request->alternative_amount,
            'alternative1' =>  $request->alternative1,
            'alternative_amount2' =>  $request->alternative_amount2,
            'areyourenting' =>  $request->areyourenting,
            'ifyeshowmuch' =>  $request->ifyeshowmuch,
            'yourownland' =>  $request->yourownland,
            'tenant' =>  $request->tenant,
            'land_or_agent' =>  $request->land_or_agent,
            'financethepurchsaseproporty' => $request->financethepurchsaseproporty,
            'mortgage_or_loan' =>  $request->mortgage_or_loan,
            'the_amount_of_deposit' =>  $request->the_amount_of_deposit,
            'land_or_property' =>  $request->land_or_property,
            'signature_applican' =>  $request->signature_applicant,
            'signature_coapplicant' =>  $request->signature_coapplicant,
            'dateend' =>  $request->dateend,
            'recommended_by' => $request->recommended_by,
            'approved' =>  $request->approved,
            'date_official' =>  $request->date_official,
            'remarks_official' =>  $request->remarks_official,
            'qualifying_amount_official' =>  $request->qualifying_amount_official,

            'app_employer_field'  => $request->app_employer_field,
            'app_occupation_field'  => $request->app_occupation_field,
            'app_period_of_employment'=> $request->app_period_of_employment,
            'app_salary' => $request->app_salary,
            'app_employment_status' => $request->qualifying_amount_official,
            'coapplicant_email' => $request->coapplicant_email,
            'co_marital_status' => $request->co_marital_status,
            'co_applicant_citizenship' => $request->co_applicant_citizenship,
            'co_applicant_country_of_residence' => $request->co_applicant_country_of_residence,
            'co_app_employer_field' => $request->co_app_employer_field,
            'co_app_occupation_field' => $request->co_app_occupation_field,
            'co_app_period_of_employment'=> $request->co_app_period_of_employment,
            'co_app_salary'=> $request->co_app_salary,
            'co_app_pay_period'=> $request->co_app_pay_period,
            'co_app_employment_status'=> $request->co_app_employment_status,

            'applicant_address2'=> $request->applicant_address2,
            'applicant_address3'=> $request->applicant_address3,
            'applicant_parish'=> $request->applicant_parish,
            'coapplicant_address2'=> $request->coapplicant_address2,
            'coapplicant_address3'=> $request->coapplicant_address3,
            'coapplicant_parish'=> $request->coapplicant_parish,
            'addmore'=> $request->addmore,
            'land_or_lot'=> $request->land_or_lot,
            'bankstatements'=> $request->bankstatements
        ];

        Mail::to('NHC.CustomerService@barbados.gov.bb')->send(new ApplicationForThePurchaseMail($details));

        try {
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Please try again.');
        }
    }


    function update(Request $request, ApplicationForThePurchase  $applicationForThePurchase)
    {

        $id = $_POST['id_submission_for_the_purchase'];

        $applicationForThePurchase = ApplicationForThePurchase::find($id);


        $applicationForThePurchase->recommended_by = $request->has('recommended_by');
        $applicationForThePurchase->approved = $request->has('approved');
        $applicationForThePurchase->date_official = $request->has('date_official');
        $applicationForThePurchase->remarks_official = $request->has('remarks_official');
        $applicationForThePurchase->qualifying_amount_official = $request->has('qualifying_amount_official');


        $update = $applicationForThePurchase->update();

        //send notification client make request by status request
        if ($request->has('approved') == 1 || $request->has('approved') == 0) {


            // Redirect back with success message and send email
            $details = [
                'recommended_by' => $request->recommended_by,
                'approved' =>  $request->approved,
                'date_official' =>  $request->date_official,
                'remarks_official' =>  $request->remarks_official,
                'qualifying_amount_official' =>  $request->qualifying_amount_official,
            ];

            Mail::to('jonathan.motta@yellomg.com')->send(new ApplicationForThePurchaseStatusMail($details));

            try {
                return redirect()->back()->with('success', 'Application update successfully!');
            } catch (\Exception $e) {
                return back()->with('error', 'Please try again.');
            }
        }



        if ($update) {
            return  redirect()->route('admin.application-for-the-the-purchase.index')->with('success', 'Submission updated successfully!');
        }
    }
}
