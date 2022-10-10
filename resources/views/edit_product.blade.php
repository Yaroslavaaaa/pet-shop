<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">

</head>
<body style="background-color: #FFCC19">
<div class="container">
    @extends('navbar')
    @section('navbar')
    <div class="row">
        <div class="col-6 mx-auto">


    <form action="{{route('editSave', ['product' => $product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
{{--        <input type="hidden" name="id" value="<?php echo $game['id']; ?>">--}}


            <div class="row mt-3">
                <div class="col-12">
                    <label>PRODUCT NAME:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="Insert name" required>
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
                        <option value="{{$product->category_id}}">{{$product->category->name}}</option>
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
                    <textarea class="form-control" name="description"  placeholder="About product">{{$product->description}}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>PRODUCT PRICE:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <input type="number" name="price" class="form-control" value="{{$product->price}}" placeholder="Insert price" required>
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
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a class="btn btn-danger" href="{{route('product', ['product' => $product->id])}}">Отменить</a>


    </form>

    </div>
</div>
</div>
@endsection
</body>
</html>
