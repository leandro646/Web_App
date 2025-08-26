<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="card border-1 shadow-sm px-3 pt-3">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>
                <form action="">
                    <div class="mb-4">
                        <label for="email" class="form-label">Login</label>
                        <input type="email" class="form-control" id="email" placeholder="Login" required>
                    </div>
                    <div class="mb-4">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha" required>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mb-3 mt-1">Confirmar</button>
                    <div class="col-12 d-flex justify-content-between">
                        <p class="text-center"><a class="link-opacity-75 link-opacity-100-hover link-dark" href="alt-senha.php">Alterar senha</a></p>
                        <p class="text-end"><a class="link-opacity-75 link-opacity-100-hover link-dark" href="cadastrar.php">Cadastrar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>