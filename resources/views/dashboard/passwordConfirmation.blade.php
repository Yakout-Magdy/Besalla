<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Password</title>
</head>

<body>
    <h1>Password Confirmation</h1>
    <p>Hello {{ $name }} </p>
    <p>Your password to our site is:</p>
    <p><strong>{{ $password }}</strong></p>
    <p>Please use this password to log in and confirm it by changing to a password of your choice as soon as possible.
    </p>

    <p>To confirm your password, please log in using the following link:</p>
    <p>
        <a href="{{ route('login') }}"
            style="display: inline-block; padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
            Confirm Password and Login
        </a>
    </p>

    <p>If you did not request this password reset, please contact support immediately.</p>
    <p>Thank you!</p>
</body>

</html>
