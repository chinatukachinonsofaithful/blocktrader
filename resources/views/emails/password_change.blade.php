<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change Notification</title>
</head>
<body>
    <h2>Password Changed</h2>
    <p>Hi {{ $user->name }},</p>
    <p>We wanted to let you know that your account password has been successfully changed.</p>
    <p>If you did not request this change, please reset your password immediately by clicking the link below:</p>
   <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
