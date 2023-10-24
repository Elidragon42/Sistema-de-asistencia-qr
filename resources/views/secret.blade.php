<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina privada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-felx flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center col-md-3 md-2 mb-mb-0 text-dark text-decoration-none">
                Pagina Privada
            </a>
            <div class="col-md-3 text-end">
                <a href="{{route('logout')}}"><button type="button" calss="btn btn-outline-primary me-2">Salir</button></a>
            </div>
        </header>
    </div>
    <article class="container">
        <h2>Tu seccion privada</h2>
    </article>
</body>
</html>