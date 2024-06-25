<!DOCTYPE html>
<html>
<head>
    <title>Message from Application Rental</title>
</head>
<body>
    <h2>NATIONAL HOUSING CORPORATION <br>
        APPLICATION FOR RENTAL UNIT/ LOT<br>
        TO BE RETURNED BY APPLICANT(S)</h2>
    <p>
        <h3>APPLICANT: Mr. Miss. Mrs.</h3>
        <strong>Surname:</strong> {{ $details['applicant_surname'] }}<br>
        <strong>First:</strong> {{ $details['applicant_first'] }}<br>
        <strong>Middle:</strong> {{ $details['applicant_middle'] }}<br>
        <strong>Address:</strong> {{ $details['applicant_address'] }}
    </p>

    <p>
        <h3>CO-APPLICANT: Mr. Miss. Mrs.</h3>
        <strong>Surname:</strong> {{ $details['co_applicant_surname'] }}<br>
        <strong>First:</strong> {{ $details['co_applicant_name'] }}<br>
        <strong>Middle:</strong> {{ $details['co_applicant_middle'] }}<br>
        <strong>Address:</strong> {{ $details['co_applicant_address'] }}
    </p>

    <p>
        <strong>NATIONAL REGISTRATION NUMBER:</strong><br>
        {{ $details['national_registration_number'] }}
    </p>

    <p>
        <strong>EMPLOYER:</strong><br>
        {{ $details['employer'] }}
    </p>

    <p>
        <strong>OCCUPATION:</strong><br>
        {{ $details['occupation'] }}
    </p>

    <p>
        <strong>CITIZENSHIP:</strong><br>
        {{ $details['citizenship'] }}
    </p>

    <p>
        <strong>TELEPHONE:</strong><br>
        {{ $details['telephone'] }}
    </p>


    <p>
        <strong>INCOME:</strong><br>
        {{ $details['income'] }}
    </p>

    <p>
        <strong>SIZE OF FAMILY:</strong><br>
        {{ $details['size_of_family'] }}
    </p>

    <p>
        <strong>ADULTS:</strong><br>
        {{ $details['adults'] }}
    </p>

    <p>
        <strong>CHILDREN:</strong><br>
        {{ $details['children'] }}
    </p>

    <p>
        <strong>DO YOU OR YOUR SPOUSE OWN LAND/ PROPERTY?:</strong><br>
        {{ $details['own_landorproperty'] }}
    </p>

    <p>
        <strong>IF YES, PLEASE STATE ADDRESS:</strong><br>
        {{ $details['state_address'] }}
    </p>

    <p>
        <strong>ARE YOU INDEBTED TO THE N.H.C. OR ANY OTHER FINANCIAL INSITUTION?:</strong><br>
        {{ $details['financial_institution'] }}
    </p>

    <p>
        <strong>IF YES, PLEASE GIVE DETAILS:</strong><br>
        {{ $details['give_details'] }}
    </p>

    <p>
        <strong>HAVE YOU EVER OCCUPIED A UNIT? IF YES, WHERE?:</strong><br>
        {{ $details['occupedaunit'] }}
    </p>

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
                @foreach(json_decode($details['addmore']) as $item )
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

    <h2>FOR OFFICIAL USE</h2>

    <p>
        <strong>IS APPLICANT A TENANT OR LODGER?:</strong><br>
        {{ $details['tenantorlodger'] }}
    </p>

    <p>
        <strong>NAME AND ADDRESS OF LANDLORD:</strong><br>
        {{ $details['addressoflandlord'] }}
    </p>

    <p>
        <strong>DATE OF OCCUPATION OF PRESENT ACCOMMODATION:</strong><br>
        {{ $details['present_accommodation'] }}
    </p>

    <p>
        <strong>STRUCTURE OF HOUSE:</strong><br>
        {{ $details['structureofhouse'] }}
    </p>

    <p>
        <strong>RENTAL RATE</strong><br>
        {{ $details['rental_date'] }}
    </p>

    <p>
        <strong>TYPE OF SANITARY FACILITIES:</strong><br>
        {{ $details['typeofsanityfacilities'] }}
    </p>

    <p>
        <strong>WATER SUPPLY:</strong><br>
        {{ $details['water_supply'] }}
    </p>

    <h2>
        HOUSING OFFICER’S COMMENTS
    </h2>
    <p>
        {{ $details['housingofficercomments'] }}
    </p>

    <p>
        <b>ACKNOWLEDGED THIS</b> {{ $details['acknowledged'] }} <b>DAY OF</b> {{ $details['dayof'] }} {{ $details['year'] }} <b>BY_</b> {{ $details['by'] }}
    </p>

    <p>
        <b>KEYS RECEIVED BY</b> {{ $details['keysreceived'] }} <b>THIS</b> {{ $details['thiskeys'] }} <b>DAY OF</b> {{ $details['dayofkeys'] }}  {{ $details['yearkeys'] }}
    </p>

    <p>
        <b>WITNESSED BY</b> {{ $details['whitnessed'] }} <b>THIS</b> {{ $details['thiswhitnessed'] }} <b>DAY OF</b> {{ $details['dayofwhitnessed'] }}  {{ $details['yearwhitnessed'] }}
    </p>

    <p>
        <strong>HOUSING OFFICER / ASST. HOUSING OFFICER:</strong><br>
        {{ $details['housingofficer'] }}
    </p>

    <p>
        <strong>SIGNATURE:</strong><br>
        {{ $details['signatures'] }}
    </p>

    <p>
        <b>DATED THIS</b> {{ $details['datedthis'] }} <b>DAY OF</b> {{ $details['dayofdatedthis'] }}  {{ $details['yeardatedthis'] }}
    </p>

    <p><b>Note:The photograph is attached to the email.</b></p>



</body>
</html>
