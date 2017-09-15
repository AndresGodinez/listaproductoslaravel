<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    public function index(){
      $products = Product::orderBy('id','asc')->paginate();
      return view('products.index', compact('products'));
    }
    public function show($id){
      $product= Product::find($id);
      return view('products.show', compact('product'));
    }
    public function edit($id){
      $product = Product::find($id);
      return view('products.edit', compact('product'));
    }
    public function update(ProductRequest $request, $id){
      return "Producto Actualizado". $id;
    }
    public function create(){
      return view('products.create');
    }
    public function store(ProductRequest $request){
      return "Producto Guardado";
    }
    public function destroy($id){
      $product = Product::find($id);
      $product->delete();
      return back()->with('info', 'Producto eliminado');

    }
}
