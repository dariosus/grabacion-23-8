@extends("layout")

@section("title")
  Welcome!
@endsection

@section("main")
  <div class="jumbotron">
    <h1>Welcome!</h1>
    <h2>Check our products</h2>
    <a href="/products">
      <button class="btn btn-primary" type="button" name="button">Products</button>
    </a>
  </div>
@endsection
