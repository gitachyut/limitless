@extends('main')
@section('title')
  <title>{!! $title !!}</title>
@endsection
@section('content')

  <div class="agent_add">
     <a href="{{ route('agents.create') }}"> Create Agent</a>
  </div>
  @if(count($agents)>0)

    @foreach ($agents as  $agent)
      <div class="card">
        <h3>
          {{  $agent->name }}
        </h3><br>
          <ul>
            @foreach ( $agent->products as  $product )
                <li>{{ $product->name }}</li>
                <ul>
                  @foreach ( $product->buyers  as  $buyer )
                  <li>{{ $buyer->name }}</li>
                  @endforeach
                </ul>
            @endforeach
          </ul>
      </div>
    @endforeach
    <div class="pagination">
    {{ $agents->links() }}
    </div>
  @else
    <h1 style="text-align:center">
      No Body Found!
    </h1>

  @endif

@endsection
