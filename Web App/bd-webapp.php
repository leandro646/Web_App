<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "webapp"; 

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    echo"Connection failed: ";
}
?>