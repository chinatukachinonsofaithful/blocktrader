<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw Notification</title>
</head>
<body>
    <h2>Withdrawal Processed</h2>
    <p>Hi {{ $user->name }},</p>
    <p>Your withdrawal request of <strong>${{ $withdrawAmount }}</strong> has been successfully processed.</p>
    <p>Withdrawal ID: {{ $withdrawId }}<br>
    Status: {{ $withdrawStatus }}</p>
    <p>If you have any questions, please feel free to contact us.</p>
    <p>Regards,<br>{{ config('app.name')}}</p>
</body>
</html>
