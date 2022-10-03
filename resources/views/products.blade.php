<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: #FFCC19">
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
    <h1>Products page</h1>
    <a href="{{route('create')}}">Add new product</a>
{{--    <div class="cards">--}}
        @foreach($products as $product)
{{--        <div class="card">--}}
{{--            <h3><a href="{{route('product', ['product' => $product->id])}}">{{$product->name}}</a></h3>--}}
{{--            <div>{{$product->descrition}}</div>--}}
{{--            <div>{{$product->price}}</div>--}}
{{--            <span>{{$product->category->name}}</span>--}}
{{--            <br>--}}
{{--            <img src="storage/{{$product->imageUrl}}" width="300px">--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mt-2 mb-2" style="background-color: #FFE381">
                        <img src="storage/{{$product->imageUrl}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p>Цена: {{$product->price}}</p>
                            <a href="{{route('product', ['product' => $product->id])}}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach

</body>





</body>
</html>
