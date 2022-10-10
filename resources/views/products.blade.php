<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body style="background-color: #FFCC19">
<div class="container">
    @extends('navbar')
    @section('navbar')
    @if(session('status'))
        {{session('status')}}
    @endif
    @foreach($products as $product)
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

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
@endsection
</body>





</body>
</html>
