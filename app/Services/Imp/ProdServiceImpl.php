<?php

namespace App\Services\Imp;

use App\Models\Product;
use App\Services\ProdService;

class ProdServiceImpl implements ProdService
{

    public function getAll(){
        $products = Product::all();

        if ($products == null){
            throw new \Exception('Нет данных!', 404);
        }
        return $products;
    }

    public function createNew($request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->imageUrl = $request->get('imageUrl');


        $product->save();

        if ($product == null){
            throw new \Exception('Не удалось создать!', 404);
        }

        return $product;
    }

    public function updateProd($request, $id)
    {
        $product = Product::find($id);

        if ($product == null){
            throw new \Exception('Не найдено продукта!', 404);
        }

        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->imageUrl = $request->get('imageUrl');

        $product->save();

        return $product;
    }

    public function getById($request, $id)
    {
        $product = Product::find($id);

        if ($product == null){
            throw new \Exception('Нет данных!', 404);
        }

        return $product;

    }

    public function deleteProd($request, $id)
    {
        $product = Product::find($id);

        if ($product == null){
            throw new \Exception('Не найдено продукта!', 404);
        }

        $product->delete();

        return true;

    }
}
