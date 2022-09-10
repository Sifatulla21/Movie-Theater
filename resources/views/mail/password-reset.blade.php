<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset Email</title>
</head>
<body style="text-align: center;">

<h1>Give A Work</h1>
<h3>Password reset link</h3>

<a href="{!! route('frontend.reset-password') !!}?token={!! $password_reset->token !!}" target="_blank"><h2>Click Here</h2></a>
<a href="{!! route('frontend.reset-password') !!}?token={!! $password_reset->token !!}" target="_blank">{!! route('frontend.reset-password') !!}?token={!! $password_reset->token !!}</a>

</body>
</html>
