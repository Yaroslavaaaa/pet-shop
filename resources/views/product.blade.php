<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: #FFCC19">
{{--<div class="container">--}}
{{--    @if(session('status'))--}}
{{--        {{session('status')}}--}}
{{--    @endif--}}
{{--    <h1>Product page</h1>--}}
{{--    <h1>{{$product->name}}</h1>--}}
{{--    <img src="storage/{{$product->imageUrl}}" alt="image">--}}
{{--    <p>{{$product->description}}</p>--}}
{{--    <a href="{{route('edit', ['product' =>$product])}}">Edit</a>--}}
{{--    <a href="{{route('delete', ['product' => $product->id])}}">Delete</a>--}}

{{--</div>--}}





<div class="container">
    <nav class="navbar navbar-expand-lg" style="background-color: #FFCC19">
        <div class="container-fluid">
            <span style="background-color: black; font-size: 24px; color: white; padding-left: 5px; padding-right: 5px;
            border-radius: 7px">HP</span>
            <a class="navbar-brand" href="#">HAPPY PET</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Товары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Корзина</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
{{--                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">--}}
{{--                        DELETE--}}
{{--                    </button>--}}
                    <a class="btn btn-danger" href="{{route('delete', ['product' => $product->id])}}">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
