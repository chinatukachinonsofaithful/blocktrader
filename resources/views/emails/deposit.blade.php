<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Notification</title>
</head>
<body>
    <h2>Deposit Successful</h2>
    <p>Hi {{ $user->name }},</p>
    <p>We are happy to inform you that your deposit of <strong>${{ $depositAmount }}</strong> has been successfully processed.</p>
    <p>Deposit ID: {{ $depositId }}<br>
    Status: {{ $depositStatus }}</p>
    <p>Thank you for using our services.</p>
    <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
