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
            <a class="navbar-brand" href="/">HAPPY PET</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('products')}}">Товары</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('create')}}">Добавить новый товар</a>
                    </li>


                    @if(\Illuminate\Support\Facades\Auth::user())
                        <a class="nav-link active" href="{{route('logout')}}">Выйти</a>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('register')}}">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('auth')}}">Авторизация</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('navbar')
</div>
</body>
</html>
