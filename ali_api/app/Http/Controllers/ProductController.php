<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        $products= Product::all();
        // return 'All products';
        return response()->json([
       'message' => 'Data selected Successfully' ,
       'data' => $products
        ]);
        
    }

    public function store(Request $request)
    {
        $product = product::create($request->all());
        return response()->json([
       'message' => 'Data inserted Successfully' ,
       'data' => $product
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // return 'All products';
        return response()->json([
       'message' => 'Get product Successfully' ,
       'data' => $product
        ]);
    }

 
    public function update(Request $request, Product $product)
    {
        $product -> update($request->all());
        return response()->json([
       'message' => 'Data updated Successfully' ,
       'data' => $product
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product -> delete();
        return response()->json([
       'message' => 'Data Deleted Successfully' ,
       'data' => $product
        ]);

    }
}
