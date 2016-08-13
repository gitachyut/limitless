@extends('main')

@section('content')




    @foreach ( $products as  $product  )
      <div class="card">
        {{ $product->name }}
          @foreach ( $product->buyers as  $buyer  )
            | {{ $buyer->name }}
          @endforeach
      </div>
    @endforeach


@endsection
