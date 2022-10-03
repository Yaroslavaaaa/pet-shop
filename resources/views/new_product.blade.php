<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body style="background-color: #FFCC19">

{{--<div class="container">--}}
{{--    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <input type="text" placeholder="Input product name" name="name">--}}
{{--        <select name="category_id">--}}
{{--            @foreach($categories as $category)--}}
{{--                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--        <textarea placeholder="Input description" name="description"></textarea>--}}
{{--        <input type="number" placeholder="Input price" name="price">--}}
{{--        <input type="file" placeholder="Choose image" name="imageUrl">--}}
{{--        <input type="submit" value="Add">--}}
{{--    </form>--}}
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
    <div class="row">
        <div class="col-6 mx-auto">


            <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-3">
                    <div class="col-12">
                        <label>PRODUCT NAME:</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="text" name="name" class="form-control" placeholder="Insert name" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label>CATEGORY:</label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>ABOUT PRODUCT:</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <textarea class="form-control" name="description"  placeholder="About product"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>PRODUCT PRICE:</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="number" name="price" class="form-control" placeholder="Insert price" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>IMAGE:</label>
                    </div>
                </div>
                <div class="row mt-2 mb-3">
                    <div class="col-12">
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="imageUrl">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Добавить</button>
                <a class="btn btn-danger" href="{{route('products')}}">Отменить</a>

            </form>

        </div>
    </div>
</div>
</body>
</html>
