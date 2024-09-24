<!DOCTYPE html>
<html>

<head>
    <title>Message from National Housing Corporation</title>
</head>

<body>
    <h2>NATIONAL HOUSING CORPORATION <br>
        APPLICATION FOR EMPLOYMENT </h2>
    <p>


    <p>
        <strong>1. APPLICATION FOR THE POST OF: </strong><br>
        {{ $details['application_for_the_post'] }}
    </p>

    <p>
        <strong>2. SURNAME:</strong><br>
        {{ $details['surname'] }}
    </p>

    <p>
        <strong>3.  CHRISTIAN NAMES:</strong><br>
        {{ $details['christian_names'] }}
    </p>

    <p>
        <strong>4.  PERMANENT ADDRESS:</strong><br>
        {{ $details['permanent_address'] }}
    </p>

    <p>
        <strong>5.   TELEPHONE NO.: </strong><br>
        {{ $details['telephone_no'] }}
    </p>


    <p>
        <strong>6.   DATE OF BIRTH: </strong><br>
        {{ $details['date_of_birth'] }}
    </p>

    <p>
        <strong>7.   NATIONALITY::</strong><br>
        {{ $details['nationality'] }}
    </p>

    <p>
        <strong>8.   NATIONAL REGISTRATION NO.: </strong><br>
        {{ $details['national_registration_no'] }}
    </p>

    <p>
        <strong>9.  NATIONAL INSURANCE NO.:</strong><br>
        {{ $details['national_insurance_no'] }}
    </p>

    <p>
        <strong>10. TERTIARY:</strong><br>
    <table>
        <thead>
            <th>EDUCATION </th>
            <th>SCHOOL/COLLEGE/UNIVERSITY </th>
            <th>FROM </th>
            <th>TO</th>
        </thead>

        <tbody>
            @foreach (json_decode($details['addmore1']) as $item)
                <tr>
                    <td>{{ $item->education_tertiary }}</td>
                    <td>{{ $item->school_collage_university_tertiary }}</td>
                    <td>{{ $item->from_tertiary }}</td>
                    <td>{{ $item->to_tertiary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </p>

    <p>
        <strong>10.1 SECONDARY:</strong><br>
    <table>
        <thead>
            <th>EDUCATION </th>
            <th>SCHOOL/COLLEGE/UNIVERSITY </th>
            <th>FROM </th>
            <th>TO</th>
        </thead>

        <tbody>
            @foreach (json_decode($details['addmore2']) as $item)
                <tr>
                    <td>{{ $item->education_secondary }}</td>
                    <td>{{ $item->school_collage_university_secondary }}</td>
                    <td>{{ $item->from_secondary }}</td>
                    <td>{{ $item->to_secondary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </p>

    <p>
        <strong>10.2 PRIMARY:</strong><br>
    <table>
        <thead>
            <th>EDUCATION </th>
            <th>SCHOOL/COLLEGE/UNIVERSITY </th>
            <th>FROM </th>
            <th>TO</th>
        </thead>

        <tbody>
            @foreach (json_decode($details['addmore3']) as $item)
                <tr>
                    <td>{{ $item->education_primary }}</td>
                    <td>{{ $item->school_collage_university_primary }}</td>
                    <td>{{ $item->from_primary }}</td>
                    <td>{{ $item->to_primary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </p>

    <p>
        <strong<b>11. QUALIFICATIONS: </b><br>(IN REVERSE CHRONOGICAL ORDER)</strong><br>
            <table>
                <thead>
                    <th>SUBJECTS/COURSES </th>
                    <th>LEVEL </th>
                    <th>YEAR </th>
                    <th>EXAMINING BODY</th>
                    <th>GRADES</th>
                </thead>

                <tbody>
                    @foreach (json_decode($details['addmore4']) as $item)
                        <tr>
                            <td>{{ $item->subject_courses }}</td>
                            <td>{{ $item->level }}</td>
                            <td>{{ $item->year }}</td>
                            <td>{{ $item->examining_body }}</td>
                            <td>{{ $item->grades }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </p>

    <p>
        <strong<b>12. HISTORY OF EMPLOYMENT: (IN REVERSE CHRONOLOGICAL ORDER) </strong><br>
            <table>
                <thead>
                    <th>EMPLOYER</th>
                    <th>POST HELD </th>
                    <th>FROM </th>
                    <th>TO</th>
                </thead>

                <tbody>
                    @foreach (json_decode($details['addmore5']) as $item)
                        <tr>
                            <td>{{ $item->employer }}</td>
                            <td>{{ $item->post_held }}</td>
                            <td>{{ $item->from }}</td>
                            <td>{{ $item->to }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </p>

    <p>
        <strong>>13. PERSONNEL REFERENCES:</strong><br>
    </p>

    <p>
        <strong>NAME</strong><br>
        {{ $details['name_personal_1'] }}
    </p>

    <p>
        <strong>ADDRESS</strong><br>
        {{ $details['address_personal_1'] }}
    </p>

    <p>
        <strong>>OCCUPATION</strong><br>
        {{ $details['occupation_personal_1'] }}
    </p>

    <p>
        <strong>>LENGTH OF TIME KNOWN: </strong><br>
        {{ $details['length_personal_1'] }}
    </p>


    <p>
        <strong>NAME</strong><br>
        {{ $details['name_personal_2'] }}
    </p>

    <p>
        <strong>ADDRESS</strong><br>
        {{ $details['address_personal_2'] }}
    </p>

    <p>
        <strong>>OCCUPATION</strong><br>
        {{ $details['occupation_personal_2'] }}
    </p>

    <p>
        <strong>>LENGTH OF TIME KNOWN: </strong><br>
        {{ $details['length_personal_2'] }}
    </p>

    <p>
        <strong>14. TESTIMONIALS (TO BE PRESENTED ON REQUEST) </strong><br>
    </p>

    <p>
        <strong>NAME</strong><br>
        {{ $details['name_testimonial_1'] }}
    </p>

    <p>
        <strong>ADDRESS</strong><br>
        {{ $details['address_testimonial_1'] }}
    </p>

    <p>
        <strong>>OCCUPATION</strong><br>
        {{ $details['occupation_testimonial_1'] }}
    </p>

    <p>
        <strong>NAME</strong><br>
        {{ $details['name_testimonial_2'] }}
    </p>

    <p>
        <strong>ADDRESS</strong><br>
        {{ $details['address_testimonial_2'] }}
    </p>

    <p>
        <strong>>OCCUPATION</strong><br>
        {{ $details['occupation_testimonial_2'] }}
    </p>

    <p>
        <strong>>ANY OTHER INFORMATION:</strong><br>
        {{ $details['any_other_information'] }}
    </p>

    <p>
        <strong>>SIGNATURE:</strong><br>
        {{ $details['signature'] }}
    </p>

    <p>
        <strong>>DATE:</strong><br>
        {{ $details['date'] }}
    </p>



</body>

</html>
