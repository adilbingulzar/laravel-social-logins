<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Logins</title>
</head>
<body>

<div class="social-login">
    <a href="{{ url('/login/google') }}" class="btn btn-google">Sign in with Google</a>
    <a href="{{ url('/login/facebook') }}" class="btn btn-facebook">Sign in with Facebook</a>
    <a href="{{ url('/login/linkedin') }}" class="btn btn-linkedin">Sign in with LinkedIn</a>
</div>

</body>
</html>