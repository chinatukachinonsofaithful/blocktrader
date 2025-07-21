<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment Notification</title>
</head>
<body>
    <h2>Investment Confirmation</h2>
    <p>Hi {{ $user->name }},</p>
    <p>We are pleased to inform you that your investment of <strong>${{ $investmentAmount }}</strong> has been successfully made.</p>
    <p>Investment ID: {{ $investmentId }}<br>
    Status: {{ $investmentStatus }}</p>
    <p>Thank you for investing with us. We will keep you updated on your investment progress.</p>
    <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
