<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: #FFCC19">

<div class="container">
    <nav class="navbar navbar-expand-lg mt-3" style="background-color: #FFCC19">
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
    <div class="row mt-5"  style="display: flex">
        <div class="col-4 mt-5" >
                <div>
                    <h3>Порадуй своего маленького друга</h3>
                    <p style="font-size: 24px">Онлайн-магазин товаров для  домашних любимцев осчастливит   твоего домашнего питомца.</p>
                    <a href="{{route('products')}}" class="btn" style="background-color: #F22254; border-radius: 20px; font-size: 22px;
                color: white; box-shadow: 0 0 5px #F22254">Смотреть товары</a>
                </div>
                <div>
                    <img src="/public/storage/images/собака2.png">
                </div>
        </div>
    </div>
</div>




{{--<div class="wrapper">--}}
{{--    <div class="header">--}}
{{--        <div class="container">--}}
{{--            <div class="header__row">--}}
{{--                <div class="header__logo">--}}
{{--                    <div class="header__logo-image">--}}
{{--                        <div class="header__logo-image-text">HP</div>--}}
{{--                    </div>--}}
{{--                    <div class="header__logo-text">Happy Pet</div>--}}
{{--                    <a href="{{route('products')}}">Products</a>--}}
{{--                </div>--}}
{{--                <div class="header__nav"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</body>
</html>
