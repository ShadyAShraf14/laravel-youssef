@extends('layouts.app')
@section('title', 'All product')
    
@section('content')

<h1 class="text-center">All  product</h1>

<div class="w-50 mx-auto text-center my-5">

  <a href="/products/create" class="btn btn-dark">Add New Products</a>

</div>

<div class="card p-3 text-center w-50 mx-auto">
  <table class="table table-primary table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Price</th>
        <th class="text-center">Image</th>
        <th class="text-center">Details</th>
        <th class="text-center">Edit</th>
        <th class="text-center">Delete</th>
      </tr>
    </thead>

    <tbody>

      @foreach ($products as $product)
          
      <tr>
        <td class="text-center">{{$product->Id}}</td>
        <td class="text-center">{{$product->name}}</td>
        <td class="text-center">{{$product->price}}</td>
        <td class="text-center"><img src="{{$product->image}}" height="50" alt=""></td>
        <td class="text-center"><a href="/products/show/{{$product->id}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></a></td>
        <td class="text-center"><a href="/products/edit/{{$product->id}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-user-pen"></i></a></td>
        <td class="text-center">
          <form action="/products/destroy/{{$product->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
          </form>
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

          
          
          


    





    