@extends('layouts.app')
@section('title', 'Edit products')
    
@section('content')

<h1 class="text-center">Edit products</h1>

<div class="w-50 mx-auto text-center my-5">

        <a href="/products" class="btn btn-dark">Edit products</a>
        <a href="/products/create" class="btn btn-dark">Add New Products</a>

        

</div>

<div class="card p-3 text-center w-50 mx-auto">
    <form action="/products/update/{{$product->id}}" method="post">
      @csrf
      @method('PUT')

      <input type="text" name="name" value="{{ $product->name }}" placeholder="Product Name" class="form-control mb-3">
      <input type="text" name="image" value="{{ $product->image }}" placeholder="Product image" class="form-control mb-3">
      <input type="text" name="price" value="{{ $product->price }}" placeholder="Product price" class="form-control mb-3">
      <textarea name="description" placeholder="Product description" row="3" class="form-control mb-3">{{ $product->description }}</textarea>
      <button class="btn btn-primary" type="submit">update product</button>
    </form>
   
  </div>   <!-- card -->
    
@endsection