@extends("layout")

@section("title")
  Category: {{$category->name}}
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Check out products from category {{$category->name}}</h1>
  </div>

  <ul>
    @forelse($category->products as $product)
      <li>
        <a href="/product/{{$product->id}}">
          {{$product->name}}
        </a>
      </li>
    @empty
      <p>
        There are no products for this category :(
      </p>
      <p>
        Try later...
      </p>
    @endforelse
  </ul>

  <a href="/categories">
    <button class="btn btn-default" type="button" name="button">All categories</button>
  </a>
@endsection
