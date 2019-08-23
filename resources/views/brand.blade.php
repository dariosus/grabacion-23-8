@extends("layout")

@section("title")
  Brand: {{$brand->name}}
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Check out products from brand {{$brand->name}}</h1>
  </div>

  <ul>
    @forelse($brand->products as $product)
      <li>
        <a href="/product/{{$product->id}}">
          {{$product->name}}
        </a>
      </li>
    @empty
      <p>
        There are no products for this brand :(
      </p>
      <p>
        Try later...
      </p>
    @endforelse
  </ul>

  <a href="/brands">
    <button class="btn btn-default" type="button" name="button">All brands</button>
  </a>
@endsection
