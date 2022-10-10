<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: #FFCC19">
<div class="container">
    @extends('navbar')
    @section('navbar')
    @if(session('status'))
        {{session('status')}}
    @endif
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="row mt-3">
                <div class="col-12">
                    <label>PRODUCT NAME:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <input type="text" readonly class="form-control" value="{{$product->name}}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>ABOUT PRODUCT:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <textarea class="form-control" readonly>{{$product->description}}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>PRODUCT PRICE:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <input type="text" readonly class="form-control" value="{{$product->price}}">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <img src="/storage/{{$product->imageUrl}}" alt="image" width="450px">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <a type="button" class="btn btn-success" href="{{route('edit', ['product' =>$product])}}">
                        EDIT
                    </a>
                    <a class="btn btn-danger" href="{{route('delete', ['product' => $product->id])}}">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>
