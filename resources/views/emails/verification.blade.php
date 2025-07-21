<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
    <h2>Email Verification</h2>
    <p>Hi {{ $user->name }},</p>
    <p>Thank you for registering with us. Please verify your email address by clicking the button below:</p>
    <a href="{{ $verificationUrl }}" style="background-color:#4CAF50;color:white;padding:10px 20px;text-decoration:none;border-radius:5px;">Verify Email</a>
    <p>If you did not register for this account, please ignore this email.</p>
    <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
