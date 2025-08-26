<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="card border-1 shadow-sm px-3 pt-3">
            <div class="card-body">
                <h3 class="text-center mb-4">Alterar senha</h3>
                <form action="">
                    <div class="mb-4">
                        <label for="atual-snh" class="form-label">Senha atual</label>
                        <input type="password" class="form-control" id="atual-snh" placeholder="Senha atual" required>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="mb-4 me-3">
                            <label for="trocar-snh" class="form-label">Senha nova</label>
                            <input type="password" class="form-control" id="trocar-snh" placeholder="Senha nova" required>
                        </div>
                        <div class="mb-4">
                            <label for="confirme" class="form-label">Confirme a senha</label>
                            <input type="password" class="form-control" id="confirme" placeholder="Confirme a senha" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <a  href="index.php" class="btn btn-dark w-100 mb-3 mt-1 me-3">Voltar</a>
                        <button type="submit" class="btn btn-dark w-100 mb-3 mt-1">Alterar senha</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>