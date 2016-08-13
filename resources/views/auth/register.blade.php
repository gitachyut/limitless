@extends('main')
@section('content')
  {{ Form::open(array('method' => 'post')) }}

  {{ Form::label('name', 'Name') }}
  {{ Form::text('name') }}

  {{ Form::label('email', 'Email') }}
  {{ Form::email('email') }}


  {{ Form::label('password', 'Password') }}
  {{ Form::password('password') }}


  {{ Form::label('password_confirmation', 'Confirm Password:') }}
  {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

  {{ Form::submit('Register') }}

  {{ Form::close() }}
@endsection
