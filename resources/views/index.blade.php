<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
</head>
<body style="background-color: #FFCC19">

<div class="container">
    @extends('navbar')
    @section('navbar')
    <div class="row mt-5">
        <div class="col-7 mt-5 mx-auto" >
                <div>
                    <h3>Порадуй своего маленького друга</h3>
                    <p style="font-size: 24px">Онлайн-магазин товаров для  домашних любимцев осчастливит   твоего домашнего питомца.</p>
                    <a href="{{route('products')}}" class="btn" style="background-color: #F22254; border-radius: 20px; font-size: 22px;
                color: white; box-shadow: 0 0 5px #F22254">Смотреть товары</a>
                </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
