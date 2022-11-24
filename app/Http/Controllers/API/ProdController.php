<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProdService;
use http\Env\Response;
use Illuminate\Http\Request;

class ProdController extends Controller
{
    protected $prodService;

    public function __construct(ProdService $prodService){
        $this->prodService = $prodService;
    }

    public function index(){
        try {
            $products = $this->prodService->getAll();

            return response()->json([
                'status' => true,
                'products' => ProductResource::collection($products)
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }

    public function show(Request $request, $id){
        try{

            $product = $this->prodService->getById($request, $id);

            return response()->json([
                'status' => true,
                'product' => new ProductResource($product)
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }

    public function store(Request $request){
        try {

           $product = $this->prodService->createNew($request);

            return response()->json([
                'status' => true,
                'product' => new ProductResource($product)
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }


    public function update(Request $request, $id){
        try {

            $product = $this->prodService->updateProd($request, $id);


                return response()->json([
                    'status' => true,
                    'product' => new ProductResource($product)
                ]);

        }catch (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }


    public function delete(Request $request, $id){

        try {

            $status = $this->prodService->deleteProd($request, $id);
                return response()->json([
                    'status' => $status,
                    'product' => null
                ]);

        }catch  (\Exception $e){
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
