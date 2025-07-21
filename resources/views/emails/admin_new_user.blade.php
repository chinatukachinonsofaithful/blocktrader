<!DOCTYPE html>
<html>
<head>
    <title>New User Registration</title>
</head>
<body>
    <h1>New User Registered</h1>
    <p>A new user has registered on your platform. Here are the details:</p>
    <ul>
        <li><strong>Name:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Phone:</strong> {{ $user->phone }}</li>
        <li><strong>Address:</strong> {{ $user->address }}</li>
        <li><strong>Country:</strong> {{ $user->country }}</li>
        <li><strong>Referral ID:</strong> {{ $user->referral_id ?? 'N/A' }}</li>
        <li><strong>Unique Ref ID:</strong> {{ $user->refid }}</li>
    </ul>
</body>
</html>
