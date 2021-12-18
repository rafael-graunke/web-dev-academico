<?php

include_once("../db/conexao.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$conexao = criaConexao();

$sql = "SELECT * FROM usuario WHERE email = :email;";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":email", $user);
$stmt->execute();

$resultados = $stmt->fetchAll();
$resultado  = $resultados[0];
$hash = $resultado['password'];

if (password_verify($pass, $hash)) {
    session_start();
    $_SESSION['id'] = $resultado['id'];
    header("Location: ../index.php");
} else {
    header("Location: ../telaLogin.php?error=true");
}

