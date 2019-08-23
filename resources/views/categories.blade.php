@extends("layout")

@section("title")
  Categories
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Check our categories</h1>
  </div>

  <ul>
    @forelse($categories as $category)
      <li>
        <a href="/category/{{$category->id}}">
          {{$category->name}}
        </a>
      </li>
    @empty
      <p>
        There are no categories :(
      </p>
      <p>
        Try later...
      </p>
    @endforelse
  </ul>
@endsection
