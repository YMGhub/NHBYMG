<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use App\Models\ApplicationRental;
use App\Mail\ApplicationRentalMail;
use Illuminate\Support\Facades\Log;
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

        /*$validatedData = $request->validate([
            'photograph' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);*/



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
        $idCardBase64 = null;
        if ($request->hasFile('id_card')) {
            $idcardBase64 = base64_encode(file_get_contents($request->file('id_card')->getRealPath()));
        } else {
            $idCardBase64 = null; // O manejar el error de otro modo
        }


        //Job letter:
        $job_letterBase64 = null;
        if ($request->hasFile('job_letter')) {
            $job_letterBase64 = base64_encode(file_get_contents($request->file('job_letter')->getRealPath()));
        } else {
            $job_letterBase64 = null; // O manejar el error de otro modo
        }

        //Passport:
        $passportBase64 = null;
        if ($request->hasFile('passport')) {
            $passportBase64 = base64_encode(file_get_contents($request->file('passport')->getRealPath()));
        } else {
            $passportBase64 = null; // O manejar el error de otro modo
        }






        // Store the uploaded file


       /* if ($request->hasFile('photograph')) {
            $photographName = time() . "-" . $request->photograph->getClientOriginalName();
            $photographPath = $request->file('photograph')->storeAs('photograph', $photographName, 'public');
            $validatedData['photograph'] = $photographPath;
        };*/


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


        $salaryApp =  $request->salary;

        $cosalaryCo = $request->co_salary;



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
            'occuppiedUnit' => $request->occuppiedUnit,
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

            'client_id' => $request->client_id,
            'co_client_id' => $request->co_client_id,
            'salary' => $salaryApp,
            'co_salary' => $cosalaryCo,



        ];

        //

        //Mail::to('NHC.CustomerService@barbados.gov.bb')->send(new ApplicationRentalMail($details));



        $documentsSend = [
            ['base64' => $payslipsBase64], // solo base64, sin filename ni mime
            ['base64' => $idcardBase64],
            ['base64' => $job_letterBase64],
            ['base64' => $passportBase64],
        ];




        //documentos a enviar en el api hex

        $payslipsBase64Api = [];
        if ($request->hasFile('payslips')) {


            foreach ($request->file('payslips') as $file) {
                if ($file->isValid()) {
                    $payslipsBase64Api[] = '0x'.bin2hex(file_get_contents($file->getRealPath()));


                }
            }

             // Unir en una sola cadena separada por coma
        $payslipsBase64Api = implode(',', $payslipsBase64Api);

            //$payslipsBase64Api = (json_encode($payslipsBase64));
        }




        //ID Card:
        // Verifica si hay un archivo antes de llamar a getRealPath()
        $idCardBase64Api = null;
        if ($request->hasFile('id_card')) {
            $idCardBase64Api =  bin2hex(file_get_contents($request->file('id_card')->getRealPath()));
        } else {
            $idCardBase64Api = ""; // O manejar el error de otro modo
        }


        //Job letter:
        $job_letterBase64Api = null;
        if ($request->hasFile('job_letter')) {
            $job_letterBase64Api =  bin2hex(file_get_contents($request->file('job_letter')->getRealPath()));
        } else {
            $job_letterBase64Api = ""; // O manejar el error de otro modo
        }

        //Passport:
        $passportBase64Api = null;
        if ($request->hasFile('passport')) {
            $passportBase64Api =  bin2hex(file_get_contents($request->file('passport')->getRealPath()));
        } else {
            $passportBase64Api = ""; // O manejar el error de otro modo
        }

        /***end******/


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
        if($request->pay_period == "Weekly"){
            $pay_period = 1;
        }
        if($request->pay_period == "Bi-Monthly"){
            $pay_period = 2;
        }
        if($request->pay_period == "Monthly"){
            $pay_period = 3;
        }

        //employment_status
        $employment_status = 1;
        if($request->employment_status == "Government"){
            $employment_status = 1;
        }
        if($request->employment_status == "Private"){
            $employment_status = 2;
        }
        if($request->employment_status == "Self"){
            $employment_status = 3;
        }

        $salary = str_replace(',', '', $request->salary);
        $salary = number_format(floatval($salary), 2, '.', '');


        $phone_home = substr($p = preg_replace('/\D+/', '', $request->phone_home), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
        $phone_work = substr($p = preg_replace('/\D+/', '', $request->phone_work), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
        $phone_cell = substr($p = preg_replace('/\D+/', '', $request->phone_cell), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);

        //OwnLandOrProperty
        $own_landorproperty = 0;
        $state_address = "";
        if($request->own_landorproperty == "no"){
            $own_landorproperty = 0;
            $state_address = "N/A";
        }

        if($request->own_landorproperty == "yes"){
            $own_landorproperty = 1;
            $state_address = $request->state_address;

        }

        //INDEBTED
        $financial_institution = 0;
        $give_details = "None";
        if($request->financial_institution == "no"){
            $financial_institution = 0;
            $give_details = "None";
        }

        if($request->financial_institution == "yes"){
            $financial_institution = 1;
            $give_details = $request->give_details;

        }

        //INDEBTED
        $financial_institution = 0;
        $give_details = "None";
        if($request->financial_institution == "no"){
            $financial_institution = 0;
            $give_details = "None";
        }

        if($request->financial_institution == "yes"){
            $financial_institution = 1;
            $give_details = $request->give_details;

        }

        $occupedaunit = "N/A";
        if($request->occuppiedUnit == "yes"){
            $occupedaunit = $request->occupedaunit;
        }




        //CoApplicant
         //marital_status
         $co_marital_status = 1;
         if($request->co_marital_status == "Single"){
             $co_marital_status = 1;
         }
         if($request->co_marital_status == "Married"){
             $co_marital_status = 2;
         }
         if($request->co_marital_status == "Widowed"){
             $co_marital_status = 3;
         }
         if($request->co_marital_status == "Divorced"){
             $co_marital_status = 4;
         }
         if($request->co_marital_status == "Separated"){
             $co_marital_status = 5;
         }

         //pay_period
         $co_pay_period = 1;
         if($request->co_pay_period == "Weekly"){
             $co_pay_period = 1;
         }
         if($request->co_pay_period == "Bi-Monthly"){
             $co_pay_period = 2;
         }
         if($request->co_pay_period == "Monthly"){
             $co_pay_period = 3;
         }

         //employment_status
         $co_employment_status = 1;
         if($request->co_employment_status == "Government"){
             $co_employment_status = 1;
         }
         if($request->co_employment_status == "Private"){
             $co_employment_status = 2;
         }
         if($request->co_employment_status == "Self"){
             $co_employment_status = 3;
         }

         $co_phone_home = substr($p = preg_replace('/\D+/', '', $request->co_phone_home), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
         $co_phone_work = substr($p = preg_replace('/\D+/', '', $request->co_phone_work), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);
         $co_phone_cell = substr($p = preg_replace('/\D+/', '', $request->co_phone_cell), 0, 3) . '-' . substr($p, 3, 3) . '-' . substr($p, 6);

         $co_salary = str_replace(',', '', $request->co_salary);
         $co_salary = number_format(floatval($co_salary), 2, '.', '');

         $IPAddress =  $_SERVER['REMOTE_ADDR'];


         //para enviar al api

          $salarySend = str_replace(',', '', $request->salary);
          $salarySend = (int)$salarySend;
          $co_salarySend = str_replace(',', '', $request->co_salary);
          $co_salarySend = (int)$co_salarySend;


          //$request->co_client_id
          $coaaplicantId  = 0;
          if($request->co_client_id == ""){
            $coaaplicantId = 0;
          }else{
            $coaaplicantId = $request->co_client_id;
          }


         $postFields = [
            "ClientID" => (int)$request->client_id,
            "NRN" => $request->national_registration_number,

            "ApplicantSalutation" => $request->applicant_salutation,
            "ApplicantSurname" => $request->applicant_surname,
            "ApplicantFirst" => $request->applicant_first,
            "ApplicantMiddle" => $request->applicant_middle,
            "MaidenName" => $request->maiden_name,


            "DateOfBirth" => $request->date_of_birth,
            "TamisNumber" => (int)$request->tamis_number,
            "ApplicantAddress1" => $request->applicant_address,
            "ApplicantAddress2" => $request->applicant_address2,
            "ApplicantParish" => $request->applicant_parish,
            "PhoneHome" => $phone_home,
            "PhoneWork" => $phone_work,
            "PhoneCell" => $phone_cell,
            "Email" => $request->email_field,
            "MaritalStatus" => $marital_status,
            "Citizenship" => $request->citizenship_field,
            "CountryOfResidence" => $request->country_of_residence,
            "Employer" => $request->employer_field,
            "Occupation" => $request->occupation_field,
            "PeriodOfEmployment" => $request->period_of_employment,
            "Salary" => floatval($salarySend),
            "PayPeriod" => $pay_period,
            "EmploymentStatus" => $employment_status,
            "CoApplicantClientID" => $coaaplicantId,
            "CoNRN" => $request->co_national_registration_number ?: "",

            "CoApplicantSalutation" => $request->co_applicant_salutation?: "",
            "CoApplicantSurname" => $request->co_applicant_surname?: "",
            "CoApplicantFirst" => $request->co_applicant_name?: "",
            "CoApplicantMiddle" => $request->co_applicant_middle?: "",
            "CoMaidenName" => $request->co_applicant_maiden_name?: "",


            "CoDateOfBirth" => $request->co_date_of_birth?: "",
            "CoTamisNumber" => $request->co_tamis_number?: 0,
            "CoApplicantAddress1" => $request->co_applicant_address?: "",
            "CoApplicantAddress2" => $request->co_applicant_address2?: "",
            "CoApplicantParish" => $request->co_applicant_parish?: "",
            "CoPhoneHome" => $co_phone_home ?: "",
            "CoPhoneWork" => $co_phone_work ?: "",
            "CoPhoneCell" => $co_phone_cell ?: "",
            "CoEmail" => $request->co_email_field ?: "",
            "CoMaritalStatus" => $co_marital_status ?: 1,
            "CoCitizenship" => $request->co_citizenship_field ?: "",
            "CoCountryOfResidence" => $request->co_country_of_residence ?: "",
            "CoEmployer" => $request->co_employer_field ?: "",
            "CoOccupation" => $request->co_occupation_field ?: "",
            "CoPeriodOfEmployment" => $request->co_period_of_employment ?: "< 1 year",
            "CoSalary" => floatval($co_salarySend) ?: 0,
            "CoPayPeriod" => $co_pay_period ?: 1,
            "CoEmploymentStatus" => $co_employment_status ?: 1,
            "OwnLandOrProperty" =>  $own_landorproperty ?: 0,
            "StatedPropertyAddress" => $state_address ?: "N/A",
            "InDepted" => $financial_institution ?: 0,
            "DebtDetails" => $give_details ?: "None",
            "OccupiedUnitDetails" => $occupedaunit ?: "N/A",
            "imgPayslips" =>  $payslipsBase64Api ?? '',
            "imgIDCard" => $idCardBase64Api ?? '',
            "imgJobLetter" => $job_letterBase64Api ?? '',
            "imgPhoto" => $passportBase64Api ?? '',
            "IPAddress" => $IPAddress,
            "IntendedOccupants" => $request->addmore,
        ];


         Log::info('datos enviados al api:', $postFields);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://1tsomf6sx9.execute-api.us-east-1.amazonaws.com/prod/application-rents',
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

                //dd($responseData);

                if ($responseData && $responseData['statusCode'] == 200) {
                    $body = json_decode($responseData['body'], true);

                    $statusCode = $responseData['statusCode'];

                    if ($responseData['statusCode'] == 200) {
                        //return redirect()->back()->with('success', 'Application submitted successfully! - Code '. $statusCode)->with('clear_localstorage', true); // <- esto activa el JS en la vista;

                        //send email
                        $appNumber = $body['Application Number'];
                         Mail::to($request->email_field)->send(new ApplicationRentalMail($details,$documentsSend,$appNumber));

                        return redirect()->route('thankyou')->with('statusCode', $statusCode)->with('ApplicationNumber', $body['Application Number'])->with('success', 'Application submitted successfully!')->with('clear_localstorage', true);

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

                    //return back()->with('error', 'Failed to submit application.');
                }

            } catch (\Exception $e) {
                return back()->with('error', 'Please try again. ' . $e->getMessage());
            }
    }
}
