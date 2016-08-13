@extends('main')
@section('content')
  @if (Auth::check())
      Hello {{ Auth::user()->name }}
  @else
      <p> Hello Guest!! </p>
  @endif


  @foreach($cards as $card)
    <p>{{ $card->name}} </p>
    <p>{{ $card->class }} </p>
  @endforeach

@endsection
