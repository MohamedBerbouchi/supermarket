@extends('products.layout')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                add new product.<br>
                <a class="btn btn-primary mt-3" href="{{ route('products.index') }}">back</a>
            </div>
        </div>

        <form action="{{ route('products.store')}}" method="POST" class="mt-5">
            @csrf
            @method('post')
            <div class="mb-3">
                <label class="form-label">name</label>
                <input type="text" name="name" class="form-control" placeholder="product name">
            </div>
            <div class="mb-3">
                <label class="form-label">price</label>
                <input type="text"  name="price" class="form-control" placeholder="product price">
            </div>
            <div class="mb-3">
                <label  class="form-label">Detail</label>
                <textarea class="form-control" name="detail" rows="3"></textarea>
            </div>
            <div class="mb-3">
                    <button type="submit" class="btn btn-primary"> save</button>
            </div>
        </form>
    </div>
@endsection
