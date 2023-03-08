<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap w/ Vite</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
    ])
</head>
<body class="text-center">   

    <main class="form-signin w-100 m-auto">
    <form>
        <h1 class="h3 mb-3 fw-normal">Tela de login</h1>

        <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Endereço de E-mail</label>
        </div>
        <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Senha</label>
        </div>

        <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Logar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    </form>
    </main>

  </body>
</html>