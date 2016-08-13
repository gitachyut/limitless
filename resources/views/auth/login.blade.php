@extends('main')
@section('content')
{{ Form::open(array('url' => 'auth/login', 'method' => 'post')) }}


{{ Form::label('email', 'Email') }}
{{ Form::email('email') }}


{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}

{{ Form::label('remember', 'Remember Me') }}
{{ Form::checkbox('remember') }}


{{ Form::submit('Login') }}

{{ Form::close() }}
@endsection
