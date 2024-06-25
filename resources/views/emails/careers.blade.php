<!DOCTYPE html>
<html>
<head>
    <title>Careers Form Message</title>
</head>
<body>
    <h2>Careers Form Message</h2>
    <p>
        <strong>First Name:</strong><br>
        {{ $details['first_name'] }}
    </p>

    <p>
        <strong>Last Name:</strong><br>
        {{ $details['last_name'] }}
    </p>

    <p>
        <strong>Gender:</strong><br>
        {{ $details['gender'] }}
    </p>

    <p>
        <strong>Age:</strong><br>
        {{ $details['age'] }}
    </p>

    <p>
        <strong>Phone (Home):</strong><br>
        {{ $details['phone_home'] }}
    </p>

    <p>
        <strong>Phone (Work):</strong><br>
        {{ $details['phone_work'] }}
    </p>

    <p>
        <strong>Phone (Mobile):</strong><br>
        {{ $details['phone_mobile'] }}
    </p>

    <p>
        <strong>Email Address:</strong><br>
        {{ $details['email'] }}
    </p>

    <p>
        <b>The resume file and Cover Letter file are attached to the email.</b>
    </p>
</body>
</html>
