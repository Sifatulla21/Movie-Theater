<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration Email</title>
</head>
<body style="text-align: center;">


<h1 style="color:red">National check mail work or not</h1>
<br>


<h2 style="color:green">User Register Confirmation mail</h2>

<p><a href="{!! route('admin.register.confirm') !!}?token={!! $user->remember_token !!}">Click Here</a> to confirm</p>
<a href="{!! route('admin.register.confirm') !!}?token={!! $user->remember_token !!}" target="_blank">{!! route('admin.register.confirm') !!}?token={!! $user->remember_token !!}</a>



</body>
</html>