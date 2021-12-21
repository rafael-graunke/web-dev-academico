<?php include_once("../db/usuarioDao.php") ?>
<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

$usuario = buscaUsuario($user);

if (count($usuario) > 0) {
    $hash = $usuario['senha'];
    if (password_verify($pass, $hash)) {
        session_start();
        $_SESSION['id'] = $usuario['id'];
        header("Location: ../index.php");
    } else {
        header("Location: ../telaLogin.php?error=true");
    }
} else {
    header("Location: ../telaLogin.php?error=true");
}