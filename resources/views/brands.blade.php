@extends("layout")

@section("title")
  Brands
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Check our brands</h1>
  </div>

  <ul>
    @forelse($brands as $brand)
      <li>
        <a href="/brand/{{$brand->id}}">
          {{$brand->name}}
        </a>
      </li>
    @empty
      <p>
        There are no brands :(
      </p>
      <p>
        Try later...
      </p>
    @endforelse
  </ul>
@endsection
