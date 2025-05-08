<!DOCTYPE html>
<html>

<head>
    <title>Message from Application Rental</title>
</head>

<body>
    <h2>NATIONAL HOUSING CORPORATION <br>
        APPLICATION FOR RENTAL UNIT/ LOT<br>
        TO BE RETURNED BY APPLICANT(S)</h2>

   {{-- APPLICANT --}}
    @if (!empty($details['applicant_surname']) || !empty($details['applicant_first']) || !empty($details['applicant_middle']) || !empty($details['applicant_address']))
    <p>
        <h3>APPLICANT:</h3>

        @if (!empty($details['client_id']))
            <strong>Client ID:</strong> {{ $details['client_id'] }}<br>
        @endif
        @if (!empty($details['email_field']))
            <strong>Email:</strong> {{ $details['email_field'] }}<br>
        @endif
        @if (!empty($details['national_registration_number']))
            <strong>NATIONAL REGISTRATION NUMBER:</strong> {{ $details['national_registration_number'] }}<br>
        @endif
        @if (!empty($details['applicant_surname']))
            <strong>Surname:</strong> {{ $details['applicant_surname'] }}<br>
        @endif
        @if (!empty($details['applicant_first']))
            <strong>First:</strong> {{ $details['applicant_first'] }}<br>
        @endif
        @if (!empty($details['applicant_middle']))
            <strong>Middle:</strong> {{ $details['applicant_middle'] }}<br>
        @endif
        @if (!empty($details['maiden_name']))
        <strong>Maiden Name:</strong> {{ $details['maiden_name'] }}<br>
        @endif
        @if (!empty($details['date_of_birth']))
            <strong>Date of Birth:</strong> {{ $details['date_of_birth'] }}<br>
        @endif
        @if (!empty($details['applicant_gender']))
        <strong>Gender:</strong> {{ $details['applicant_gender'] }}<br>
        @endif
        @if (!empty($details['tamis_number']))
        <strong>Tamis Number:</strong> {{ $details['tamis_number'] }}<br>
        @endif
        @if (!empty($details['applicant_address']))
        <strong>Address 1:</strong> {{ $details['applicant_address'] }}<br>
        @endif
        @if (!empty($details['applicant_address2']))
        <strong>Address 2:</strong> {{ $details['applicant_address2'] }}<br>
        @endif
        @if (!empty($details['applicant_parish']))
        <strong>PARISH:</strong> {{ $details['applicant_parish'] }}<br>
        @endif
        @if (!empty($details['phone_home']))
        <strong>Telephone Home Number:</strong> {{ $details['phone_home'] }}<br>
        @endif
        @if (!empty($details['phone_work']))
        <strong>Telephone Work Number:</strong> {{ $details['phone_work'] }}<br>
        @endif
        @if (!empty($details['phone_cell']))
        <strong>Telephone Cell Number:</strong> {{ $details['phone_cell'] }}<br>
        @endif
        @if (!empty($details['marital_status']))
        <strong>Marital Status:</strong> {{ $details['marital_status'] }}<br>
        @endif

        @if (!empty($details['citizenship_field']))
        <strong>CITIZENSHIP:</strong> {{ $details['citizenship_field'] }}<br>
        @endif

        @if (!empty($details['country_of_residence']))
        <strong>Country of Residence:</strong> {{ $details['country_of_residence'] }}<br>
        @endif

        @if (!empty($details['employer_field']))
        <strong>Employer:</strong> {{ $details['employer_field'] }}<br>
        @endif

        @if (!empty($details['occupation_field']))
        <strong>Occupation:</strong> {{ $details['occupation_field'] }}<br>
        @endif

        @if (!empty($details['period_of_employment']))
        <strong>Period of Employment:</strong> {{ $details['period_of_employment'] }}<br>
        @endif

        @if (!empty($details['salary']))
        <strong>Salary:</strong> {{ $details['salary'] }}<br>
        @endif

        @if (!empty($details['pay_period']))
        <strong>Pay Period:</strong> {{ $details['pay_period'] }}<br>
        @endif

        @if (!empty($details['employment_status']))
        <strong>Employment Status:</strong> {{ $details['employment_status'] }}<br>
        @endif

        @if (!empty($details['own_landorproperty']))
        <strong>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?:</strong> {{ $details['own_landorproperty'] }}<br>
        @endif

        @if ($details['own_landorproperty'] == "yes" && !empty($details['state_address']))
        <strong>IF YES, PLEASE STATE ADDRESS:</strong> {{ $details['state_address'] }}<br>
        @endif

        @if (!empty($details['financial_institution']))
        <strong>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSTITUTION:</strong> {{ $details['financial_institution'] }}<br>
        @endif

        @if ($details['financial_institution'] == "yes" && !empty($details['give_details']))
        <strong>IF YES, PLEASE GIVE DETAILS:</strong> {{ $details['give_details'] }}<br>
        @endif

        @if (!empty($details['occuppiedUnit']))
        <strong>HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?:</strong> {{ $details['occuppiedUnit'] }}<br>
        @endif

        @if ($details['occuppiedUnit'] == "yes" && !empty($details['occupedaunit']))
        <strong>IF YES, PLEASE GIVE DETAILS YOU EVER OCCUPIED A UNIT:</strong> {{ $details['occupedaunit'] }}<br>
        @endif

        @php
        $occupantxs = collect(json_decode($details['addmore']))->filter(function ($item) {
            return $item->name_occupant || $item->relation_occupant || $item->age_accupant || $item->occupation_school_occupant || $item->income_occupant;
        });
    @endphp
    @if ($occupantxs->isNotEmpty())
        <p>
            <strong>INFORMATION ON INTENDED OCCUPANTS:</strong><br>
        <table>
            <thead>
                <th>NAME</th>
                <th>RELATION</th>
                <th>AGE</th>
                <th>OCCUPATION/ SCHOOL</th>
                <th>INCOME</th>
            </thead>

            <tbody>
                @foreach (json_decode($details['addmore']) as $item)
                    <tr>
                        <td>{{ $item->name_occupant }}</td>
                        <td>{{ $item->relation_occupant }}</td>
                        <td>{{ $item->age_accupant }}</td>
                        <td>{{ $item->occupation_school_occupant }}</td>
                        <td>{{ $item->income_occupant }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
        @endif


        <strong>The documents are attached to the email</strong><br>



        </p>
    @endif


    {{-- CO-APPLICANT --}}
    @if (!empty($details['co_applicant_surname']) || !empty($details['co_applicant_name']) || !empty($details['co_applicant_middle']) || !empty($details['co_applicant_address']))
    <p>
        <h3>CO-APPLICANT:</h3>

        @if (!empty($details['co_client_id']))
            <strong>Co Client ID:</strong> {{ $details['co_client_id'] }}<br>
        @endif

        @if (!empty($details['co_national_registration_number']))
        <strong>NATIONAL REGISTRATION NUMBER:</strong> {{ $details['co_national_registration_number'] }}<br>
        @endif
        @if (!empty($details['co_email_field']))
            <strong>EMAIL:</strong> {{ $details['co_email_field'] }}<br>
        @endif
        @if (!empty($details['co_applicant_surname']))
            <strong>Surname:</strong> {{ $details['co_applicant_surname'] }}<br>
        @endif
        @if (!empty($details['co_applicant_name']))
            <strong>Name:</strong> {{ $details['co_applicant_name'] }}<br>
        @endif
        @if (!empty($details['co_applicant_middle']))
        <strong>Middle:</strong> {{ $details['co_applicant_middle'] }}<br>
        @endif
        @if (!empty($details['co_maiden_name']))
            <strong>Maiden Name:</strong> {{ $details['co_maiden_name'] }}<br>
        @endif

        @if (!empty($details['co_date_of_birth']))
        <strong>Date of Birth:</strong> {{ $details['co_date_of_birth'] }}<br>
        @endif

        @if (!empty($details['co_tamis_number']))
        <strong>Tamis Number:</strong> {{ $details['co_tamis_number'] }}<br>
        @endif

        @if (!empty($details['co_applicant_address']))
        <strong>Address:</strong> {{ $details['co_applicant_address'] }}<br>
        @endif

        @if (!empty($details['co_applicant_address2']))
        <strong>Address 2:</strong> {{ $details['co_applicant_address2'] }}<br>
        @endif

        @if (!empty($details['co_applicant_parish']))
        <strong>PARISH:</strong> {{ $details['co_applicant_parish'] }}<br>
        @endif

        @if (!empty($details['co_phone_home']))
        <strong>Telephone Home Number:</strong> {{ $details['co_phone_home'] }}<br>
        @endif
        @if (!empty($details['co_phone_work']))
        <strong>Telephone Work Number:</strong> {{ $details['co_phone_work'] }}<br>
        @endif
        @if (!empty($details['co_phone_cell']))
        <strong>Telephone Cell Number:</strong> {{ $details['co_phone_cell'] }}<br>
        @endif

        @if (!empty($details['co_marital_status']))
        <strong>Marital Status:</strong> {{ $details['co_marital_status'] }}<br>
        @endif

        @if (!empty($details['co_citizenship_field']))
        <strong>CITIZENSHIP:</strong> {{ $details['co_citizenship_field'] }}<br>
        @endif

        @if (!empty($details['co_country_of_residence']))
        <strong>Country of Residence:</strong> {{ $details['co_country_of_residence'] }}<br>
        @endif

        @if (!empty($details['co_employer_field']))
        <strong>Employer:</strong> {{ $details['co_employer_field'] }}<br>
        @endif

        @if (!empty($details['co_occupation_field']))
        <strong>Occupation:</strong> {{ $details['co_occupation_field'] }}<br>
        @endif

        @if (!empty($details['co_period_of_employment']))
        <strong>Period of Employment:</strong> {{ $details['co_period_of_employment'] }}<br>
        @endif

        @if (!empty($details['co_salary']))
        <strong>Salary:</strong> {{ $details['co_salary'] }}<br>
        @endif

        @if (!empty($details['co_pay_period']))
        <strong>Pay Period:</strong> {{ $details['co_pay_period'] }}<br>
        @endif

        @if (!empty($details['co_employment_status']))
        <strong>Employment Status:</strong> {{ $details['co_employment_status'] }}<br>
        @endif

    </p>
    @endif





</body>

</html>
