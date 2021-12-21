<?php include_once("conexao.php"); ?>
<?php

function buscaUsuario($user) {
    $conexao = criaConexao();

    $sql = "SELECT * FROM usuario WHERE email = :email OR usuario = :user;";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $user);
    $stmt->bindParam(":user", $user);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $resultado;
}

function buscaUsuarioPorID($id) {
    $conexao = criaConexao();

    $sql = "SELECT * FROM usuario WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $resultado;
}

function alteraSenha($user, $nova_senha) {
    $conexao = criaConexao();

    $sql = "UPDATE usuario SET senha = :senha WHERE email = :email OR usuario = :user";

    $pass = password_hash($nova_senha, "sha256");

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $user);
    $stmt->bindParam(":user", $user);
    $stmt->bindParam(":senha", $pass);
    $stmt->execute();
}