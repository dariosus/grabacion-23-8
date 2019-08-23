@extends("layout")

@section("title")
  Products
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Check our products</h1>
  </div>

  <ul>
    @forelse($products as $product)
      <li>
        <a href="/product/{{$product->id}}">
          {{$product->name}}
        </a>
      </li>
    @empty
      <p>
        There are no products :(
      </p>
      <p>
        Try later...
      </p>
    @endforelse
  </ul>

  {{$products->links()}}
@endsection
