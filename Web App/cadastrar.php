<?php
session_start();
include('bd-webapp.php');
if (isset($_POST['submit'])) {


    $login = $_POST['login'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(login, senha, nome) VALUES('$login', '$password', '$name')");
}
mysqli_close($conexao);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="card border-1 shadow-sm px-3 pt-3">
            <div class="card-body">
                <h3 class="text-center mb-4">Cadastrar</h3>
                <form action="cadastrar.php" method="POST">
                    <div class="col-12 d-flex">
                        <div class="mb-4 me-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="name" id="nome" placeholder="Nome" required>
                        </div>
                        <div class="mb-4">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password" id="senha" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex">
                        <div class="mb-4 me-3">
                            <label for="login" class="form-label">Login</label>
                            <input type="email" class="form-control" name="log" id="login" placeholder="Login" required>
                        </div>
                        <div class="mb-4 me-3">
                            <label for="con_senha" class="form-label">Confirmar senha</label>
                            <input type="password" class="form-control" name=c_senha" id="con_senha" placeholder="Confrimar senha" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark w-100 mb-3 mt-1">Confirmar</button>
                    <p class="text-center"><a class="link-opacity-75 link-opacity-100-hover link-dark" href="index.php">Já tem uma conta? Fazer login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>