<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>index</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row align-items-center">
            <h1>Input URL</h1>
            <form action="/new" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="FormControlInput" placeholder="Past Long URL">
                </div>
                <button type="button" class="btn btn-outline-primary">Crete Short URL</button>
            </form>
        </div>
    </div>


</body>
</html>
