@extends('layouts.app')
@section('title', 'Add new product')
    
@section('content')

<h1 class="text-center">Add new product</h1>

<div class="w-50 mx-auto text-center my-5">

        <a href="/products" class="btn btn-dark">All products</a>
        

</div>

<div class="card p-3 text-center w-50 mx-auto">
    <form action="/products/store" method="post">
      @csrf

      <input type="text" name="name" placeholder="Product Name" class="form-control mb-3">
      <input type="text" name="image" placeholder="Product image" class="form-control mb-3">
      <input type="text" name="price" placeholder="Product price" class="form-control mb-3">
      <textarea name="description" placeholder="Product description" row="3" class="form-control mb-3"></textarea>
      <button class="btn btn-primary" type="submit">Add new product</button>
    </form>
   
  </div>   <!-- card -->
    
@endsection