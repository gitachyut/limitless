@extends('main')
@section('title')
  <title>{!! $title !!}</title>
@endsection
@section('content')

  <div class="agent_add_form">
    <h2>Add Agent</h2>
  {{ Form::open(array('route' => 'agents.store', 'method' => 'post')) }}


      <label for="name">Name:</label>
      {{ Form::text('name') }}<br>

      <label for="email">Email:</label>
      {{ Form::email('email') }}<br>

      <label for="age">Age:</label>
      {{ Form::number('age') }}<br>

      <label for="bio">Bio:</label>
      {{ Form::textarea('bio') }} <br>

      <input type="submit"  value="Add Agent">
  {{ Form::close() }}
  </div>

@endsection
