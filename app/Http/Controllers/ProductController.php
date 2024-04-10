<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $products = Product::create($request->only(['name', 'description', 'price']));
        return response()->json($products);
    }

    public function list(Request $request)
    {
        $products = Product::where('name','LIKE' , '%' . $request->name . '%')->get();
        return response()->json($products);
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->update($request->only(['name', 'description', 'price']));
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'Da xoa san pham thanh cong']);
    }

}
