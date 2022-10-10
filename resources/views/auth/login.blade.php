 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body style="background-color: #FFCC19">


<div class="container mt-3">
    <div class="row">
        <div class="col-6 mx-auto">

            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="row mt-3">
                    <div class="col-12">
                        <label>EMAIL:</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="email" name="email" class="form-control" placeholder="Insert email">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label>PASSWORD:</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <input type="password" name="password" class="form-control" placeholder="Insert password">
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <button class="btn btn-success">LOG IN</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</body>
</html>
