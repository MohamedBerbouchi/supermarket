@extends('products.layout')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
          This is some text within a card body.<br>
          <a class="btn btn-primary mt-3" href="{{ route('products.create') }}">add product</a>
        </div>
    </div>

    <div>
 
      @if ($message = Session::get("success"))
      <div class="alert alert-success d-flex align-items-center m-3" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
          {{$message}} 
        </div>
      </div>
          

      @endif
    </div>
    <table class="table container mt-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i = 0
            @endphp
            @foreach ($products as $item)
                
                <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->price}} DH</td>
                <td class="row sm">
                    <div class="col-2">
                      <a href="{{route('products.show', $item->id)}}"  class="  btn btn-primary">show</a>
                    </div>
                    <div class="col-2">
                      <a href="{{ route('products.edit', $item->id) }}" class=" btn btn-success">Edit</a>
                    </div>
                    <form method="POST"  class="col" action="{{route('products.destroy',$item->id )}}">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </td>
                </tr>
            @endforeach

        </tbody>
      </table>
      <div>
        {{$products->links()}}
      </div>
</div>
@endsection