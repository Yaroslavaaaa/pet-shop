<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function products(){
        $products = Product::with('category')->get();
        return view('products', [
           'products' => $products
        ]);
    }

    public function create(){
        $categories = Category::all();
        return view('new_product', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request){
        if($request->hasFile('imageUrl')){
            $product = new Product();
            $product->name = $request->get('name');
            $product->category_id = $request->get('category_id');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $url = $request->file('imageUrl')->store('images');
            $product->imageUrl = $url;

            $product->save();

            return redirect('/products')->with('status', 'Данные успешно сохранены!');
        }

    }

    public function product(Product $product){
        return view('product', [
           'product' => $product
        ]);
    }

    public function edit(Product $product){
        $categories = Category::all();
        return view('edit_product', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function editSave(Product $product, Request $request){
        if($request->hasFile('imageUrl')){
            $product->name = $request->get('name');
            $product->category_id = $request->get('category_id');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $url = $request->file('imageUrl')->store('images');
            $product->imageUrl = $url;

            $product->save();

            return redirect('/products')->with('status', 'Данные успешно сохранены!');
        }

    }

    public function delete(Product $product){
        $product->delete();
        return redirect('/products')->with('status', 'Данные успешно удалены!');
    }

}
