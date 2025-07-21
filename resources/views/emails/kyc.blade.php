<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KYC Notification</title>
</head>
<body>
    <h2>KYC Verification is pending</h2>
    <p>Hi {{ $user->name }},</p>
    <p>We have received your KYC (Know Your Customer) verification information, Please hold while we verify your information</p>
   
    <p>If you need assistance, please contact our support team.</p>
    <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
