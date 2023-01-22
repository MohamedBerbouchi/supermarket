@extends('products.layout')

@section("content")

<div class="container">
    <div class="card mt-5">
        <div class="card-body">
          <h1>Product info</h1>
          <p><b>Product name</b>: {{$product->name}}</p>
          <p><b>Product price:</b> {{$product->price}}</p>
          <p><b>Product detail:</b> {{$product->detail}}</p>
          <a class="btn btn-primary mt-3" href="{{ route('products.index') }}">back</a>
        </div>
    </div>
</div>

@endsection