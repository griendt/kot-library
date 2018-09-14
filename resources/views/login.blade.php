<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
<title>Look at me Login</title>
</head>
<body>

{{ Form::open(array('route' => 'post.login')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<p>
    {{ Form::label('email', 'E-mail address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
</p>

<p>
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
</p>

<p>{{ Form::submit('Log in') }}</p>
{{ Form::close() }}
