<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>import - excel</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="clod-md-4"></div>
            <div class="clod-md-6">
                <form action="{{ url('frutas/importar') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="clo-md-6">
                        <input type="file" name="documento" id="">
                    </div>
                    <div class="clo-md-6">
                        <button class="btn btn-primary" type="submit">Importar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <button class="btn btn-success">Exportar</button>
            </div>
        </div>
    </div>
</body>
</html>
