@extends('layouts.app')
@section('title', 'Product Details')
    
@section('content')

<h1 class="text-center">All  product</h1>

<div class="w-50 mx-auto text-center my-5">

  <a href="/products/create" class="btn btn-dark">Product Details</a>
  <a href="/products" class="btn btn-dark">All products</a>


</div>

<div class="card p-3 text-center w-50 mx-auto">

    <img src="{{$product->image}}" class="w-50 mx-auto" alt="">
    <h2>{{$product->name}}</h2>
    <h2>{{$product->price}}</h2>
    <h2>{{$product->description}}</h2>


</div>

@endsection