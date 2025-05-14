<!DOCTYPE html>
<html>

<head>
    <title>Message from Application Rental</title>
</head>

<body>
    <h2>NATIONAL HOUSING CORPORATION<br>
        APPLICATION FORM FOR THE PURCHASE OF LAND OR PROPERTY
    </h2>


    {{-- @if (!empty($details['client_id']))
            <strong>Client ID:</strong> {{ $details['client_id'] }}<br>
        @endif--}}

         @if (!empty($appNumber))
            <strong>Application Number:</strong> {{ $appNumber }}<br>
        @endif

      @if (!empty($details['applicant_email']))
    <p>
        <strong>EMAIL:</strong><br>
        {{ $details['applicant_email'] }}
    </p>
    @endif

      @if (!empty($details['applicant_national_registration_number']))
    <p>
        <strong>NATIONAL REGISTRATION NUMBER:</strong><br>
        {{ $details['applicant_national_registration_number'] }}
    </p>
     @endif

      @if (!empty($details['salutation']))
    <p>
    <h3>NAME</h3>
    <strong>Salutation:</strong> {{ $details['salutation'] }}<br>
    <strong>First:</strong> {{ $details['applicant_first'] }}<br>
    <strong>Middle:</strong> {{ $details['applicant_middle'] }}<br>
    <strong>DATE OF BIRTH:</strong> {{ $details['applicant_date_birth'] }}<br>
    <strong>Gender:</strong> {{ $details['applicant_gender'] }}<br>
    </p>
     @endif




  @if (!empty($details['applicant_tamis_no']))
    <p>
        <strong>TAMIS NO:</strong><br>
        {{ $details['applicant_tamis_no'] }}
    </p>
    @endif

    @if (!empty($details['applicant_address']))
    <p>
        <strong>ADDRESS:</strong><br>{{ $details['applicant_address'] }}<br>
        <strong>ADDRESS 2:</strong><br>{{ $details['applicant_address2'] }}<br>
        <strong>ADDRESS 3:</strong><br>{{ $details['applicant_address3'] }}<br>
    </p>
    @endif


    @if (!empty($details['applicant_parish']))
    <p>
        <strong>PARISH:</strong><br>{{ $details['applicant_parish'] }}
    </p>
     @endif



     @if (!empty($details['applicant_phone_home']))
    <p>
        <strong>TELEPHONE NUMBER:</strong><br>
        <strong>HOME: :</strong><br>{{ $details['applicant_phone_home'] }}<br>
        <strong>WORK: :</strong><br>{{ $details['applicant_phone_work'] }}<br>
        <strong>CELL: :</strong><br>{{ $details['applicant_phone_cell'] }}<br>
    </p>
    @endif



@if (!empty($details['marital_status']))
    <p>
        <strong>MARITAL STATUS:</strong><br>
        {{ $details['marital_status'] }}
    </p>
     @endif

     @if (!empty($details['applicant_citizenship']))
    <p>
        <strong>CITIZENSHIP:</strong><br>
        {{ $details['applicant_citizenship'] }}
    </p>
     @endif

      @if (!empty($details['applicant_country_of_residence']))
    <p>
        <strong>COUNTRY OF RESIDENCE:</strong><br>
        {{ $details['applicant_country_of_residence'] }}
    </p>
     @endif


      @if (!empty($details['employer_field']))
    <p>
        <strong>Employer:</strong><br>
        {{ $details['employer_field'] }}
    </p>
    @endif


     @if (!empty($details['occupation_field']))
    <p>
        <strong>Occupation:</strong><br>
        {{ $details['occupation_field'] }}
    </p>
     @endif



    @if (!empty($details['app_period_of_employment']))

        <strong>Period of Employment:</strong>
        @if ($details['app_period_of_employment'] == "< 1 year")
    Less than 1 year

    @else
        {{ $details['app_period_of_employment'] }}
    @endif
    <br>
    @endif

    @if (!empty($details['app_salary']))
        <strong>Salary:</strong> {{ $details['app_salary'] }}<br>
    @endif


    @if (!empty($details['app_pay_period']))
        <strong>Pay Period:</strong> {{ $details['app_pay_period'] }}<br>
    @endif

    @if (!empty($details['app_employment_status']))
        <strong>Employment Status:</strong> {{ $details['app_employment_status'] }}<br>
    @endif

    @if (!empty($details['addmore[0][adult_person]']))
        <strong>INFORMATION ON INTENDED OCCUPANTS:</strong><br>
        <strong>Adults:</strong>{{ $details['addmore[0][adult_person]'] }}</br>
        <strong>Children:</strong>{{ $details['addmore[0][children_person]'] }}</br>
    @endif

    @if (!empty($details['disabilitieswithinthehousehold']))
        <strong>ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?::</strong><br>
        {{ $details['disabilitieswithinthehousehold'] }}<br>
    @endif

    @if (!empty($details['disabilitieswithinthehousehold']))
        <strong>ALTERNATIVE SOURCES OF INCOME IN HOUSEHOLD: (Maintenance, Alimony, Second Job, Adults working but not
            listed on this application etc…):</strong><br>
        <strong>Alternative:</strong>{{ $details['alternative'] }}</br>
        <strong>Amount:</strong>{{ $details['alternative_amount'] }}</br>
        <strong>Alternative:</strong>{{ $details['alternative1'] }}</br>
        <strong>Amount:</strong>{{ $details['alternative_amount2'] }}</br>
    @endif

    @if (!empty($details['areyourenting']))
        <strong>Are you currently renting?:</strong> {{ $details['areyourenting'] }}<br>
    @endif

    @if ($details['areyourenting'] == 'Yes')
        <strong>If yes, how much is your rent?:</strong> {{ $details['ifyeshowmuch'] }}<br>
    @endif

    @if (!empty($details['yourownland']))
        <strong>Do you wish us to provide a housing solution on land you own?</strong><br>
        {{ $details['yourownland'] }}<br>
    @endif

    @if ($details['yourownland'] == 'Yes')
        <strong>Prompt the applicant to provide the location of the Land Lot</strong><br>
        {{ $details['land_or_lot'] }}<br>
    @endif

    @if (!empty($details['tenant']))
        <strong>Do you wish the NHC to provide a housing solution on land you do not own (and not owned by the
            NHC)?:</strong> <br>{{ $details['tenant'] }}<br>
    @endif

    @if ($details['tenant'] == 'Yes')
        <strong>The Letter of permission from the landlord/agent was attached in email.</strong><br>
    @endif



     @if (!empty($details['financethepurchsaseproporty']))
      FINANCING OF PROPERTY/LAND:<br>
        <strong>How will you finance the purchase of property / land?:</strong><br> {{ $details['financethepurchsaseproporty'] }}<br>
    @endif

     @if ($details['financethepurchsaseproporty'] == "Mortgage" || $details['financethepurchsaseproporty'] == "Loan")
        @if (!empty($details['mortgage_or_loan']))
        <strong>If mortgage or loan, please indicate a potential lending institution of your choice</strong> {{ $details['mortgage_or_loan'] }}<br>
          @endif
          @if (!empty($details['the_amount_of_deposit']))
        <strong>What is the amount of deposit available?</strong> {{ $details['the_amount_of_deposit'] }}<br>
        @endif

         @if (!empty($details['qualifyngamount']))
        <strong>Qualifying Amount :</strong> {{ $details['qualifyngamount'] }}<br>
        @endif
    @endif

     @if ($details['financethepurchsaseproporty'] == "Full Cash Payment")

        <strong>Applicant to submit bank statement</strong> Is attached in the email.<br>
    @endif



    @if (!empty($details['coapplicant_national_registration_number']))
        <p>
            <b>CO-APPLICANT</b><br>
        </p>


    @if (!empty($details['coapplicant_national_registration_number']))
        <p>

            <strong>NATIONAL REGISTRATION NUMBER::</strong><br>
            {{ $details['coapplicant_national_registration_number'] }}
        </p>
    @endif

    @if (!empty($details['coapplicant_email']))
        <p>

            <strong>EMAIL:</strong><br>
            {{ $details['coapplicant_email'] }}
        </p>
    @endif

    @if (!empty($details['coapplicant_salutation']))
        <p>

            <strong>SALUTATION:</strong><br>
            {{ $details['coapplicant_salutation'] }}
        </p>
    @endif

    @if (!empty($details['coapplicant_first']))
        <p>

            <strong>fIRST NAME:</strong><br>
            {{ $details['coapplicant_first'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_middle']))
        <p>

            <strong>Middle:</strong><br>
            {{ $details['coapplicant_middle'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_maiden_name']))
        <p>

            <strong>Maiden Name:</strong><br>
            {{ $details['coapplicant_maiden_name'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_date_birth']))
        <p>

            <strong>DATE OF BIRTH:</strong><br>
            {{ $details['coapplicant_date_birth'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_tamis_no']))
        <p>

            <strong>TAMIS NO:</strong><br>
            {{ $details['coapplicant_tamis_no'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_address']))
        <p>

            <strong>ADDRESS:</strong><br>
            {{ $details['coapplicant_address'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_address2']))
        <p>

            <strong>ADDRESS 2:</strong><br>
            {{ $details['coapplicant_address2'] }}
        </p>
    @endif

    @if (!empty($details['coapplicant_address3']))
        <p>

            <strong>ADDRESS 3:</strong><br>
            {{ $details['coapplicant_address3'] }}
        </p>
    @endif

    @if (!empty($details['coapplicant_parish']))
        <p>

            <strong>PARISH:</strong><br>
            {{ $details['coapplicant_parish'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_phone_home']))
        <p>

            <strong>TELEPHONE NUMBER::</strong><br>
            <strong>HOME:</strong><br>{{ $details['coapplicant_phone_home'] }}
            <strong>WORK:</strong><br>{{ $details['coapplicant_phone_work'] }}
            <strong>CELL:</strong><br>{{ $details['coapplicant_phone_cell'] }}
        </p>
    @endif


    @if (!empty($details['coapplicant_parish']))
        <p>

            <strong>PARISH:</strong><br>
            {{ $details['coapplicant_parish'] }}
        </p>
    @endif

    @if (!empty($details['co_marital_status']))
        <p>

            <strong>Marital Status::</strong><br>
            {{ $details['co_marital_status'] }}
        </p>
    @endif

    @if (!empty($details['co_applicant_citizenship']))
        <p>

            <strong>CITIZENSHIP:</strong><br>
            {{ $details['co_applicant_citizenship'] }}
        </p>
    @endif

    @if (!empty($details['co_applicant_country_of_residence']))
        <p>

            <strong>CITIZENSHIP:</strong><br>
            {{ $details['co_applicant_country_of_residence'] }}
        </p>
    @endif

    @if (!empty($details['co_app_employer_field']))
        <p>

            <strong>Employer:</strong><br>
            {{ $details['co_app_employer_field'] }}
        </p>
    @endif

    @if (!empty($details['co_app_employer_field']))
        <p>

            <strong>Occupation:</strong><br>
            {{ $details['co_app_occupation_field'] }}
        </p>
    @endif


    @if (!empty($details['co_app_period_of_employment']))
        <p>

            <strong>Period of Employment:</strong><br>
            {{ $details['co_app_period_of_employment'] }}
        </p>
    @endif

    @if (!empty($details['co_app_salary']))
        <p>

            <strong>Salary:</strong><br>
            {{ $details['co_app_salary'] }}
        </p>
    @endif

    @if (!empty($details['co_app_pay_period']))
        <p>

            <strong>Pay Period:</strong><br>
            {{ $details['co_app_pay_period'] }}
        </p>
    @endif

    @if (!empty($details['co_app_employment_status']))
        <p>

            <strong>Employment Status:</strong><br>
            {{ $details['co_app_employment_status'] }}
        </p>
    @endif

    @if (!empty($details['co_house_type']))
        <p>

            <strong>APPLICATION TYPE:</strong><br>
            {{ $details['co_house_type'] }}
        </p>
    @endif


    @if (!empty($details['co_bedrooms']))
        <p>

            <strong>PREFERRED HOUSE TYPE:</strong><br>
            @if ($details['co_bedrooms'] == 2)
                2 Bedroom

            @else
                3 Bedroom
            @endif
        </p>
    @endif

      @if (!empty($details['co_no_occupants_adult']))
        <p>

            <strong>NO OF OCCUPANTS:</strong><br>
            Adults: {{ $details['co_no_occupants_adult'] }}<br>
            Children:{{ $details['co_no_occupants_children'] }}<br>
        </p>
    @endif


          @if (!empty($details['co_no_occupants_adult']))
        <p>

            <strong>CHILDREN’S AGES:::</strong>{{ $details['co_children_age'] }}<br>

        </p>
    @endif
      @endif




</body>

</html>
