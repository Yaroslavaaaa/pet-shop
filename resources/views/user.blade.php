<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
<h1>User page</h1>
<div class="container">
    @extends('navbar')
    @section('navbar')
        <h1>{{$user->name}}</h1>
    @endsection
</div>
</body>
</html>
