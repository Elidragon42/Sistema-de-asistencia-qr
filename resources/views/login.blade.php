<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container align-center p-5">
        <form method="POST" action="{{route('Inicia-sesion')}}">
        @csrf
        <div class="mb-3">
            <label for="emailInput" class="form-label">Email</label>
            <label type="email" class="form-control" id="emailInput" name="email" required>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">password</label>
            <input type="password" class="form-control" id="passwordInput" name="password" required>
        </div>
        <div class="mb-3" form-check>
            <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
            <label class="form-check-label" class="rememberCheck">Mantener sesion iniciada</label>
        </div>
        <p>¿No tienes cuenta?<a href="{{route('regristro')}}"></a></p>
    </div>
    <button type="submit" class="btn btn-primary">Acceder</button>
    </form>
    </main>
</body>
</html>