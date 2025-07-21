<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Notification</title>
</head>
<body>
    <h2>{{ $user->name }} New Survey Form,</h2>
    <p>
        {{ $networth }},<br>
        {{ $stocktrading }},<br>
        {{ $monthlytrading }},<br>
        {{ $purpose }},<br>
        {{ $source }},<br>
        {{ $annual }},<br>
        {{ $liquid }},<br>
    </p>
   
    <p>If you need assistance, please contact our support team.</p>
    <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
