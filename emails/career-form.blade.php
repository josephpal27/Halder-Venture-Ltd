<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Form Submission Data</title>
</head>
<body>
    <p><span>First Name: {{ $data['first_name'] }}</span></p>
    <p><span>Last Name: {{ $data['last_name'] }}</span></p>
    <p><span>Phone: {{ $data['phone'] }}</span></p>
    <p><span>Current Organization: {{ $data['current_organization'] }}</span></p>
    <p><span>Current Industry: {{ $data['current_industry'] }}</span></p>
    <p><span>Experience: {{ $data['experience'] }}</span></p>
    <p><span>Current CTC: {{ $data['current_ctc'] }}</span></p>
    <p><span>Expected CTC: {{ $data['expected_ctc'] }}</span></p>
    <p><span>Notice Period: {{ $data['notice_period'] }}</span></p>
    <p><span>Resume:</span><a href="https://halderventure.in/uploads/resumes/{{$data['resume']}}">View</a></p>
</body>
</html>