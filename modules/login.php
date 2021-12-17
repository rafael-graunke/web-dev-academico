<?php

include_once("../db/conexao.php");

$user = $_POST['user'];
$pass = hash('sha256', $_POST['pass']);

echo $pass;

$conexao = criaConexao();

$sql = "SELECT * FROM usuario WHERE email = :email AND password = :password";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":email", $user);
$stmt->bindParam(":password", $pass);
$stmt->execute();

$resultado = $stmt->fetchAll();
if (count($resultado) != 0) {
    session_start();
    $_SESSION['id'] = $resultado[0]['id'];
    // header("Location: ../index.php");
} else {
    // header("Location: ../telaLogin.php?error=true");
}
