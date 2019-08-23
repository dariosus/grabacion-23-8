@extends("layout")

@section("title")
  Product: {{$product->name}}
@endsection

@section("main")
  <div class="jumbotron">
      <h1>{{$product->name}}</h1>
  </div>

  <ul>
    <li>
      Price: ${{$product->price}}
    </li>
    <li>
      Stock: {{$product->stock}}
    </li>
    <li>
      Brand: <a href="/brand/{{$product->brand->id}}">{{$product->brand->name}}</a>
    </li>
    <li>
      Category: <a href="/category/{{$product->category->id}}">{{$product->category->name}}</a>
    </li>
  </ul>

  <a href="/products">
    <button class="btn btn-default" type="button" name="button">All products</button>
  </a>

  @if (Auth::check())
    <form class="" action="/products/delete" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$product->id}}">
      <button type="submit" name="button" class="btn btn-danger">Delete</button>
    </form>
  @endif
@endsection
