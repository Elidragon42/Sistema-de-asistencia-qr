<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container align-center p-5">
        <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <label type="email" class="form-control" id="emailInput" name="email" required autocomplete="disable">
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">password</label>
            <input type="password" class="form-control" id="passwordInput" name="password" required>
        </div>
        <div class="mb-3">
            <label for="UserInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="UserInput" name="name" required autocomplete="disable">
        </div>
        <button type="submit" class="btn btn-primary">registrarse</button>
        </form>
    </main>
</body>
</html>