<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <title>import - excel</title>
</head>
<body>
    <div class="container">
    <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <div class="row">
                    <form action="{{ url('frutas/importar') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <input type="file" name="documento" id="">
                        </div>
                        <br>
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Importar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-success">Exportar</button>
            </div>
        </div>
    </div>
</body>
</html>
