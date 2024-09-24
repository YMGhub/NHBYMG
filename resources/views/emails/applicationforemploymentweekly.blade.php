<!DOCTYPE html>
<html>

<head>
    <title>Message from National Housing Corporation - Application For Employment (Weekly)</title>
</head>

<body>
    <h2>NATIONAL HOUSING CORPORATION <br>

        APPLICATION FOR EMPLOYMENT (WEEKLY) </h2>
    <p>


    <p>
        <strong>Name: </strong><br>
        {{ $details['name'] }}
    </p>

    <p>
        <strong>Address:</strong><br>
        {{ $details['address'] }}
    </p>

    <p>
        <strong>Telephone No.:</strong><br>
        {{ $details['telephone_no'] }}
    </p>

    <p>
        <strong>Citizenship :</strong><br>
        {{ $details['citizenship'] }}
    </p>

    <p>
        <strong>Date of Birth: </strong><br>
        {{ $details['telephone_no'] }}
    </p>


    <p>
        <strong>National Registration No. </strong><br>
        {{ $details['national_registration_no'] }}
    </p>

    <p>
        <strong>NIS No.</strong><br>
        {{ $details['nis_no'] }}
    </p>



    <p>
        <strong>Type of Work Required</strong><br>
    <p><strong>Masonry:</strong> {{ $details['Masonry'] ? 'Sí' : 'No' }}</p>
    <p><strong>Carpentry:</strong> {{ $details['Carpentry'] ? 'Sí' : 'No' }}</p>
    <p><strong>Painting:</strong> {{ $details['Painting'] ? 'Sí' : 'No' }}</p>
    <p><strong>Electrical:</strong> {{ $details['Electrical'] ? 'Sí' : 'No' }}</p>
    <p><strong>Plumbing:</strong> {{ $details['Plumbing'] ? 'Sí' : 'No' }}</p>
    <p><strong>Labourer:</strong> {{ $details['Labourer'] ? 'Sí' : 'No' }}</p>
    <p><strong>Other:</strong> {{ $details['Other'] ? 'Sí' : 'No' }}</p>



    </p>

    <p>
        <strong>Work Experience</strong><br>
        {{ $details['work_experience'] }}
    </p>
    <p>
        <strong>Education/Qualifications </strong><br>
        {{ $details['education_qualification'] }}
    </p>
    <p>
        <strong>Referee (Job Related) Name</strong><br>
        {{ $details['refereejob_name'] }}
    </p>
    <p>
        <strong> Address </strong><br>
        {{ $details['refereejob_address'] }}
    </p>
    <p>
        <strong>Length of Time Known</strong><br>
        {{ $details['refereejob_lenght_of_time'] }}
    </p>
    <p>
        <strong>Referee (Personal) Name</strong><br>
        {{ $details['refereejob_name_2'] }}
    </p>
    <p>
        <strong> Address </strong><br>
        {{ $details['refereejob_address_2'] }}
    </p>
    <p>
        <strong>Length of Time Known</strong><br>
        {{ $details['refereejob_lenght_of_time_2'] }}
    </p>
    <p>
        <strong>Any Other Information</strong><br>
        {{ $details['any_other_information'] }}
    </p>
    <p>
        <strong>Signature of Applicant</strong><br>
        {{ $details['signature'] }}
    </p>
    <p>
        <strong>Date</strong><br>
        {{ $details['date'] }}
    </p>

    <p>
        <label><b>NB:Application must be accompanied by a Certificate of Character, the date of
                which must not
                exceed three (3) months.</b></label>
    </p>




</body>

</html>
