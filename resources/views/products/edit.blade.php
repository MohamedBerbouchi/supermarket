@extends('products.layout')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                edit new product : {{$product->name}}.<br>
                <a class="btn btn-primary mt-3" href="{{ route('products.index') }}">back</a>
            </div>
        </div>

        <form method="POST" action="{{ route('products.update', $product->id)}}" class="mt-5">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">name</label>
                <input value="{{$product->name}}" type="text" name="name" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input value="{{$product->price}}"  type="text"  name="price" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Detail</label>
                <textarea  class="form-control" name="detail" rows="3">
                    {!!  $product->detail !!}
                </textarea>
            </div>
            <div class="mb-3">
                    <button type="submit" class="btn btn-primary"> save</button>
            </div>
        </form>
    </div>
@endsection
