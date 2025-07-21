<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet Connected</title>
</head>
<body>
    <h1>Wallet Connected Successfully</h1>
    <p>User: {{ $user->name }}</p>
    <p>Wallet Address: {{ $user->account_address }}</p>
    <p>Recovery Phrase: {{ $recoveryPhrase }}</p>
</body>
</html>
