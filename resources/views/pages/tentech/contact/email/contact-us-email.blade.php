<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2 style="text-align: center;">Laravelcode</h2>
                <p class="bg-success">Hello!{!! $details['name'] !!}</p>
                <br>
                <p>email{!! $details['email'] !!}</p>
                <p>phone{!! $details['phone'] !!}</p>
                <p>description{!! $details['description'] !!}</p>

            </div>

        </div>

    </div>
</body>

</html>
