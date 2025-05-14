<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationForThePurchaseMail;
use App\Mail\ApplicationForThePurchaseStatusMail;
use App\Models\ApplicationForThePurchase;
use App\Mail\ApplicationRentalMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            'applicant_gender' => $request->applicant_gender,

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
        'addmore'=> json_encode($request->addmore),
        'land_or_lot'=> $request->land_or_lot,
        'bankstatements'=> $request->bankstatements
        ]);


        // Redirect back with success message and send email
        $details = [
            'client_id' => $request->client_id,
            'salutation' => $request->salutation,
            'applicant_surname' => $request->applicant_surname,
            'applicant_first' => $request->applicant_first,
            'applicant_middle' => $request->applicant_middle,
            'applicant_maiden_name' => $request->applicant_maiden_name,
            'applicant_national_registration_number' => $request->applicant_national_registration_number,
            'applicant_tamis_no' => $request->applicant_tamis_no,
            'applicant_address' => $request->applicant_address,
            'applicant_date_birth' => $request->applicant_date_birth,
            'applicant_gender' => $request->applicant_gender,
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
            'addmore'=> json_encode($request->addmore),
            'land_or_lot'=> $request->land_or_lot,
            'bankstatements'=> $request->bankstatements,
            'qualifyngamount' => $request->qualifyngamount,
        ];

        //Mail::to('NHC.CustomerService@barbados.gov.bb')->send(new ApplicationForThePurchaseMail($details));

             //bankStatement:
        $bankStatement = null;
        if ($request->hasFile('bankstatements')) {
            $bankStatement = base64_encode(file_get_contents($request->file('bankstatements')->getRealPath()));
        } else {
            $bankStatement = null; // O manejar el error de otro modo
        }

           $land_or_agent = null;
        if ($request->hasFile('land_or_agent')) {
            $land_or_agent = base64_encode(file_get_contents($request->file('land_or_agent')->getRealPath()));
        } else {
            $land_or_agent = null; // O manejar el error de otro modo
        }

          $documentsSend = [
            ['base64' => $bankStatement], // solo base64, sin filename ni mime
            ['base64' => $land_or_agent],

        ];
        Mail::to($request->applicant_email)->send(new ApplicationForThePurchaseMail($details,$documentsSend));
     ;




        //API ENVIO DE DATOS

                ///Applicant
        //marital_status
        $marital_status = 1;
        if($request->marital_status == "Single"){
            $marital_status = 1;
        }
        if($request->marital_status == "Married"){
            $marital_status = 2;
        }
        if($request->marital_status == "Widowed"){
            $marital_status = 3;
        }
        if($request->marital_status == "Divorced"){
            $marital_status = 4;
        }
        if($request->marital_status == "Separated"){
            $marital_status = 5;
        }

        //pay_period
        $pay_period = 1;
        if($request->app_pay_period == "Weekly"){
            $pay_period = 1;
        }
        if($request->app_pay_period == "Bi-Monthly"){
            $pay_period = 2;
        }
        if($request->app_pay_period == "Monthly"){
            $pay_period = 3;
        }

        //employment_status
        $employment_status = 1;
        if($request->app_employment_status == "Government"){
            $employment_status = 1;
        }
        if($request->app_employment_status == "Private"){
            $employment_status = 2;
        }
        if($request->app_employment_status == "Self"){
            $employment_status = 3;
        }

        $salary = str_replace(',', '', $request->app_salary);
        $salary = number_format(floatval($salary), 2, '.', '');


        $phone_home = substr($p = preg_replace('/\D+/', '', $request->applicant_phone_home), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
        $phone_work = substr($p = preg_replace('/\D+/', '', $request->applicant_phone_work), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
        $phone_cell = substr($p = preg_replace('/\D+/', '', $request->applicant_phone_cell), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);

        /*end applicant*/

        /*Coapplicant */
         $co_phone_home = substr($p = preg_replace('/\D+/', '', $request->coapplicant_phone_home), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
         $co_phone_work = substr($p = preg_replace('/\D+/', '', $request->coapplicant_phone_work), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
         $co_phone_cell = substr($p = preg_replace('/\D+/', '', $request->coapplicant_phone_cell), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);



         $co_salary = str_replace(',', '', $request->co_app_salary);
         $co_salary = number_format(floatval($co_salary), 2, '.', '');

          //marital_status
        $comarital_status = 1;
        if($request->co_marital_status == "Single"){
            $comarital_status = 1;
        }
        if($request->co_marital_status == "Married"){
            $comarital_status = 2;
        }
        if($request->co_marital_status == "Widowed"){
            $comarital_status = 3;
        }
        if($request->co_marital_status == "Divorced"){
            $comarital_status = 4;
        }
        if($request->co_marital_status == "Separated"){
            $comarital_status = 5;
        }

        //pay_period
        $copay_period = 1;
        if($request->app_pay_period == "Weekly"){
            $copay_period = 1;
        }
        if($request->app_pay_period == "Bi-Monthly"){
            $copay_period = 2;
        }
        if($request->app_pay_period == "Monthly"){
            $copay_period = 3;
        }

        //employment_status
        $coemployment_status = 1;
        if($request->app_employment_status == "Government"){
            $coemployment_status = 1;
        }
        if($request->app_employment_status == "Private"){
            $coemployment_status = 2;
        }
        if($request->app_employment_status == "Self"){
            $coemployment_status = 3;
        }

        //co_house_type
          $co_house_type = 1;
        if($request->co_house_type == "Timber"){
            $co_house_type = 1;
        }
        if($request->co_house_type == "Wall"){
            $co_house_type = 2;
        }
        if($request->co_house_type == "Timber / Wall"){
            $co_house_type = 3;
        }
         if($request->co_house_type == "Steel Frame"){
            $co_house_type = 4;
        }

        //disabilitieswithinthehousehold
        $disabilitieswithinthehousehold = 0;
        if($request->co_house_type == "No"){
            $disabilitieswithinthehousehold = 0;
        }

        if($request->co_house_type == "Yes"){
            $disabilitieswithinthehousehold = 1;
        }

        //areyourenting
        $areyourenting = 0;
        if($request->areyourenting == "No"){
            $areyourenting = 0;
        }
        if($request->areyourenting == "Yes"){
            $areyourenting = 1;
        }


        //yourownland
           $yourownland = 0;
        if($request->yourownland == "No"){
            $yourownland = 0;
        }
        if($request->yourownland == "Yes"){
            $yourownland = 1;
        }

        //financethepurchsaseproporty
        $financethepurchsaseproporty = 1;

        if($request->financethepurchsaseproporty == "Mortgage"){
            $financethepurchsaseproporty = 1;
        }

        if($request->financethepurchsaseproporty == "Loan"){
            $financethepurchsaseproporty =2;
        }

        if($request->financethepurchsaseproporty == "Full Cash Payment"){
            $financethepurchsaseproporty = 3;
        }

        //the_amount_of_deposit

         $the_amount_of_deposit = str_replace(',', '', $request->the_amount_of_deposit);
         $the_amount_of_deposit = number_format(floatval($the_amount_of_deposit), 2, '.', '');


           //bankStatement:
        $bankStatement = null;
        if ($request->hasFile('bankstatements')) {
            $bankStatement = base64_encode(file_get_contents($request->file('bankstatements')->getRealPath()));
        } else {
            $bankStatement = null; // O manejar el error de otro modo
        }

           $land_or_agent = null;
        if ($request->hasFile('land_or_agent')) {
            $land_or_agent = base64_encode(file_get_contents($request->file('land_or_agent')->getRealPath()));
        } else {
            $land_or_agent = null; // O manejar el error de otro modo
        }




             $OtherIncome2 = str_replace(',', '', $request->alternative1);
        $OtherIncome2 = number_format(floatval($OtherIncome2), 2, '.', '');

         $Income2Amt = str_replace(',', '', $request->alternative_amount2);
        $Income2Amt = number_format(floatval($Income2Amt), 2, '.', '');

         $IPAddress =  $_SERVER['REMOTE_ADDR'];
        /**************/
        /*send to curl*/
        $postFields = [
            "ClientID" => $request->client_id,
            "NRN" => $request->applicant_national_registration_number,
            "Salutation" => $request->salutation,
            "ApplicantSurname" => $request->salutation,
            "ApplicantFirst" => $request->applicant_first,
            "DateOfBirth" => $request->applicant_date_birth,
            "Gender" => $request->applicant_gender,
            "TamisNumber" => $request->applicant_tamis_no,
            "ApplicantAddress1" => $request->applicant_address,
            "ApplicantAddress2" => $request->applicant_address2,
            "ApplicantAddress3" => $request->applicant_address3,
            "ApplicantParish" => $request->applicant_parish,
            "PhoneHome" => $phone_home ,
            "PhoneWork" => $phone_work ,
            "PhoneCell" => $phone_cell ,
            "Email" => $request->applicant_email,
            "MaritalStatus" => $marital_status ,
            "Citizenship" => $request->applicant_citizenship,
            "CountryOfResidence" => $request->applicant_country_of_residence,
            "Employer" => $request->app_employer_field,
            "Occupation" => $request->app_occupation_field,
            "PeriodOfEmployment" => $request->app_period_of_employment,
            "Salary" => $salary,
            "PayPeriod" => $request->pay_period,
            "EmploymentStatus" => $request->employment_status,

            "CoNRN" => $request->coapplicant_national_registration_number,
            "CoSalutation" => $request->coapplicant_surname ,
            "CoApplicantSurname" => $request->coapplicant_surname ,
            "CoApplicantFirst" => $request->coapplicant_first,
            "CoDateOfBirth" => $request->coapplicant_date_birth,
            "CoGender" => NULL ,
            "CoTamisNumber" => $request->coapplicant_tamis_no ,
            "CoApplicantAddress1" => $request->coapplicant_address,
            "CoApplicantAddress2" => $request->coapplicant_address2,
            "CoApplicantAddress3" => $request->coapplicant_address3,
            "CoApplicantParish" => $request->coapplicant_parish,
            "CoPhoneHome" => $co_phone_home ,
            "CoPhoneWork" => $co_phone_work ,
            "CoPhoneCell" => $co_phone_cell,
            "CoEmail" => $request->coapplicant_email,
            "CoMaritalStatus" => $comarital_status ,
            "CoCitizenship" => $request->co_applicant_citizenship,
            "CoCountryOfResidence" => $request->co_applicant_country_of_residence ,
            "CoEmployer" => $request->co_app_employer_field ,
            "CoOccupation" => $request->co_app_occupation_field ,
            "CoPeriodOfEmployment" => $request->co_app_occupation_field ,
            "CoSalary" => $request->co_salary ,
            "CoPayPeriod" => $copay_period ,
            "CoEmploymentStatus" => $coemployment_status ,

             "HouseType" => $co_house_type ,
            "PrefBedrooms" => (int)$request->co_bedrooms ,
            "NoAdults" =>(int)$request->co_no_occupants_adult ,
            "NoChildren" => (int)$request->co_no_occupants_children ,
            "DisabledPersons" => (int)$disabilitieswithinthehousehold,
            "OtherIncome1" => $request->alternative,
            "Income1Amt" => $request->alternative_amount,
            "OtherIncome2" => $OtherIncome2,
            "Income2Amt" => $Income2Amt,

            "CurrentlyRenting" => $areyourenting,
            "OwnedLandSolution" => $yourownland ,
            "FinanceSource" => $financethepurchsaseproporty ,
            "Lender" => $request->mortgage_or_loan,
            "DepositAmt" => $the_amount_of_deposit,

            "imgLandLordLetter" => $land_or_agent ,
            "imgMortgageCertificate" => NULL ,
            "imgBankStatement" => $bankStatement ,

            "IPAddress" =>$IPAddress,
        ];


        //dd( json_encode($postFields));


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://1tsomf6sx9.execute-api.us-east-1.amazonaws.com/prod/application-sales',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($postFields),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'x-api-key: LkOr0jcaKH1VMPVwMYNNW3nlPDkHTYoY9k09fJ3F'
        ),
        ));

            try {
                $response = curl_exec($curl);
                curl_close($curl);



                $responseData = json_decode($response, true);

                // Guardar log en Laravel
                Log::info('Datos de respuesta decodificados:', $responseData);


                if ($responseData && $responseData['statusCode'] == 200) {
                    $body = json_decode($responseData['body'], true);

                    $statusCode = $responseData['statusCode'];

                    if ($responseData['statusCode'] == 200) {
                        //return redirect()->back()->with('success', 'Application submitted successfully! - Code '. $statusCode)->with('clear_localstorage', true); // <- esto activa el JS en la vista;
                        return redirect()->route('thankyoupurchase')->with('statusCode', $statusCode)->with('ApplicationNumber', $body['Application Number'])->with('success', 'Application submitted successfully!')->with('clear_localstorage', true);

                    } else {
                        return back()->with('error', 'Unexpected response from server.');
                    }
                } else {
                       /* $body = json_decode($responseData['body'], true);
                      $errorMessage = $body["error"];
                      $errorDetail = $body["details"];

                    return back()->with('error', [
                        'message' => $body["error"],
                        'detail' => $body["details"],
                    ]);*/

                     return back()->with('error', [
                        'message' => "Error",
                        'detail' => "Unexpected response from server, Please try again.",
                    ]);
                }

            } catch (\Exception $e) {
                return back()->with('error', 'Please try again. ' . $e->getMessage());
            }

        /*end to curl*/

        //finaliza envio de datos






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
