@extends("layout")

@section("title")
  Add a product
@endsection

@section("main")
  <div class="jumbotron">
      <h1>Add a product</h1>
  </div>

  <form method="POST" action="/products/add">
      @csrf

      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

          <div class="col-md-6">
              <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

              @error('price')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock') }}</label>

          <div class="col-md-6">
              <input id="stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

              @error('stock')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Brand') }}</label>

          <div class="col-md-6">
              <select id="brand" class="form-control @error('brand') is-invalid @enderror" name="brand" required>
                @foreach ($brands as $brand)
                  <option value="{{$brand->id}}" {{$brand->id == old("brand") ? "selected" : ""}}>
                    {{$brand->name}}
                  </option>
                @endforeach

              </select>
              @error('brand')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>

      <div class="form-group row">
          <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

          <div class="col-md-6">
              <select id="category" class="form-control @error('category') is-invalid @enderror" name="category" required>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}" {{$category->id == old("category") ? "selected" : ""}}>
                    {{$category->name}}
                  </option>
                @endforeach

              </select>
              @error('brand')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>



      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Submit') }}
              </button>
          </div>
      </div>
  </form>
@endsection
