<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $emp = employees::all();

        return response()->json([
            'success'=>true,
            'message'=>$emp
        ]);
    }



    public function store(Request $request){
        $emp = employees::create($request->all());

        return response()->json([
            'success'=>true,
            'message'=>$emp
        ]);
    }
}
