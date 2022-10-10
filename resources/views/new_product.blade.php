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
@endsection
</body>
</html>
