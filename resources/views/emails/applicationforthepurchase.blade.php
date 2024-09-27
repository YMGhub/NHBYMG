<!DOCTYPE html>
<html>

<head>
    <title>Message from Application Rental</title>
</head>

<body>
    <h2>NATIONAL HOUSING CORPORATION<br>
        APPLICATION FORM FOR THE PURCHASE OF LAND OR PROPERT
    </h2>


    <p>
    <h3>NAME</h3>
    <strong>Saludation:</strong> {{ $details['salutation'] }}<br>
    <strong>Surname:</strong> {{ $details['applicant_surname'] }}<br>
    <strong>First:</strong> {{ $details['applicant_first'] }}<br>
    <strong>Middle:</strong> {{ $details['applicant_middle'] }}<br>
    <strong>Maiden name:</strong> {{ $details['applicant_maiden_name'] }}
    </p>

    <p>
        <strong>NATIONAL REGISTRATION NUMBER:</strong><br>
        {{ $details['applicant_national_registration_number'] }}
    </p>

    <p>
        <strong>TAMIS NO:</strong><br>
        {{ $details['applicant_tamis_no'] }}
    </p>

    <p>
        <strong>ADDRESS:</strong><br>
        {{ $details['applicant_address'] }}
    </p>

    <p>
        <strong>DATE OF BIRTH:</strong><br>
        {{ $details['applicant_date_birth'] }}
    </p>

    <p>
        <strong>TELEPHONE NUMBER:</strong><br>
        <strong>HOME: :</strong><br>{{ $details['applicant_phone_home'] }}
        <strong>WORK: :</strong><br>{{ $details['applicant_phone_work'] }}
        <strong>CELL: :</strong><br>{{ $details['applicant_phone_cell'] }}
    </p>


    <p>
        <strong>EMAIL:</strong><br>
        {{ $details['applicant_email'] }}
    </p>

    <p>
        <strong>MARITAL STATUS:</strong><br>
        {{ $details['marital_status'] }}
    </p>

    <p>
        <strong>CITIZENSHIP:</strong><br>
        {{ $details['applicant_citizenship'] }}
    </p>

    <p>
        <strong>COUNTRY OF RESIDENCE:</strong><br>
        {{ $details['applicant_country_of_residence'] }}
    </p>

    <p>
        <b>CO-APPLICANT</b><br>
    </p>

    <p>
        <strong>SALUDATION:</strong><br>
        {{ $details['coapplicant_salutation'] }}
    </p>

    <p>
        <strong>Surname:</strong><br>
        {{ $details['coapplicant_surname'] }}
    </p>

    <p>
        <strong>First Name:</strong><br>
        {{ $details['coapplicant_first'] }}
    </p>

    <p>
        <strong>Middle name:</strong><br>
        {{ $details['coapplicant_middle'] }}
    </p>

    <p>
        <strong>Maiden name:</strong><br>
        {{ $details['coapplicant_maiden_name'] }}
    </p>

    <p>
        <strong>NATIONAL REGISTRATION NUMBER:</strong><br>
        {{ $details['coapplicant_national_registration_number'] }}
    </p>

    <p>
        <strong>TAMIS NO:</strong><br>
        {{ $details['coapplicant_tamis_no'] }}
    </p>

    <p>
        <strong>ADDRESS:</strong><br>
        {{ $details['coapplicant_address'] }}
    </p>

    <p>
        <strong>DATE OF BIRTH:</strong><br>
        {{ $details['coapplicant_date_birth'] }}
    </p>

    <p>
        <strong>TELEPHONE NUMBER:</strong><br>
        <strong>HOME: :</strong><br>{{ $details['coapplicant_phone_home'] }}
        <strong>WORK: :</strong><br>{{ $details['coapplicant_phone_work'] }}
        <strong>CELL: :</strong><br>{{ $details['coapplicant_phone_cell'] }}
    </p>


    <p>
        <strong>PERIOD OF EMPLOYMENT:</strong><br>
        {{ $details['applicant_period'] }}
        {{ $details['co_applicant_period'] }}
    </p>

    <p>
        <strong>OCCUPATION:</strong><br>
        {{ $details['applicant_occup'] }}
        {{ $details['co_applicant_occup'] }}
    </p>

    <p>
        <strong>EMPLOYER:</strong><br>
        {{ $details['applicant_employer'] }}
        {{ $details['co_applicant_employer'] }}
    </p>

    <p>
        <strong>SALARY:</strong><br>
        {{ $details['applicant_salary'] }}
        {{ $details['co_applicant_salary'] }}
    </p>


    <p>
        <strong>GOVERNMENT:</strong><br>
        {{ $details['government'] }}
    </p>

    <p>
        <strong>GOVERNMENT:</strong><br>
        {{ $details['government'] }}
    </p>

    <p>
        <strong>PRIVATE:</strong><br>
        {{ $details['private'] }}
    </p>

    <p>
        <strong>SELF:</strong><br>
        {{ $details['self'] }}
    </p>

    <p>
        <strong>MONTHLY:</strong><br>
        {{ $details['monthly'] }}
    </p>

    <p>
        <strong>WEEKLY:</strong><br>
        {{ $details['weekly'] }}
    </p>

    <p>
        <strong>FORT-NIGHTLY:</strong><br>
        {{ $details['forth_nightly'] }}
    </p>

    <p>
        <strong>HOUSE TYPE:</strong><br>
        {{ $details['house_type'] }}
    </p>

    <p>
        <strong>PURCHASING OPTIONS:</strong><br>
        {{ $details['purchasing_options'] }}
    </p>

    <p>
        <strong>IF YOU INTEND TO PURCHASE PROPERTY, FILL OUT THIS SECTION:</strong><br>
    </p>

    <p>
        <strong>PREFERRED HOUSE TYPE:</strong><br>
        {{ $details['preferedhousetype'] }}
    </p>

    <p>
        <strong>NO OF OCCUPANTS:</strong><br>
        {{ $details['no_of_occupants'] }}
    </p>

    <p>
        <strong>CHILDREN’S AGES:</strong><br>
        {{ $details['children_ages'] }}
    </p>

    <p>
        <strong>ARE THERE ANY PERSONS WITH DISABILITIES WITHIN THE HOUSEHOLD?:</strong><br>
        {{ $details['disabilitieswithinthehousehold'] }}
    </p>

    <p>
        <strong>ALTERNATIVE SOURCES OF INCOME IN HOUSEHOLD: (Maintenance, Alimony, Second
            Job, Adults working but not listed on this application etc…):</strong><br>
        {{ $details['alternative'] }} AMOUNT:${{ $details['alternative_amount'] }}<br>
        {{ $details['alternative1'] }} AMOUNT:${{ $details['alternative_amount2'] }}
    </p>

    <p>
        <strong>Are you currently renting?:</strong><br>
        {{ $details['areyourenting'] }}
    </p>

    <p>
        <strong>If yes, how much is your rent?:</strong><br>
        {{ $details['ifyeshowmuch'] }}
    </p>

    <p>
        <strong>Do you have your own land and wish us to provide you with a Housing solution?:</strong><br>
        {{ $details['yourownland'] }}
    </p>

    <p>
        <strong>Are you a tenant of the land on which you wish to build your Housing solution?:</strong><br>
        {{ $details['tenant'] }}
    </p>

    <p>
        <strong>(If yes, you MUST have a letter of permission from the landlord/agent):</strong><br>
        {{ $details['land_or_agent'] }}
    </p>

    <p>
        <strong>FINANCING OF PROPERTY/LAND</strong><br>
    </p>

    <p>
        <strong>How will you finance the purchase of property / land? :</strong><br>
        {{ $details['financethepurchsaseproporty'] }}
    </p>

    <p>
        <strong>If mortgage or loan, please indicate a potential lending institution of your choice:</strong><br>
        {{ $details['mortgage_or_loan'] }}
    </p>

    <p>
        <strong>What is the amount of deposit available?:</strong><br>
        {{ $details['the_amount_of_deposit'] }}
    </p>

    <p>
        <strong>APPLICATION FOR HOUSING EVERY LAST PERSON (H.E.L.P)</strong>
        {{ $details['land_or_property'] }}
    </p>

    <p>
        <strong>Signature(s): Applicant:</strong><br>
        {{ $details['signature_applican'] }}
    </p>

    <p>
        <strong>Co-Applicant:</strong><br>
        {{ $details['signature_coapplicant'] }}
    </p>

    <p>
        <strong>Date:</strong><br>
        {{ $details['dateend'] }}
    </p>




</body>

</html>
