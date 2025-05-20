<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission Data</title>
</head>
<body>
    <p><span>Full Name: {{ $data['name'] }}</span></p>
    <p><span>Email: {{ $data['email'] }}</span></p>
    <p><span>Phone: {{ $data['phone'] }}</span></p>
    <p><span>Company: {{ $data['company'] }}</span></p>
    <p><span>Designation: {{ $data['designation'] }}</span></p>
    <p><span>Reason: {{ $data['reason'] }}</span></p>
    <p><span>Message: {{ $data['message'] }}</span></p>
</body>
</html>