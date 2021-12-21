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

function alteraUsuario($id, $novo_email, $nome_completo, $nova_senha) {
    $conexao = criaConexao();

    $sql = "UPDATE usuario SET senha = :senha, email = :email, nome_completo = :nome_completo
    WHERE id = :id";

    $pass = password_hash($nova_senha, "sha256");

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":email", $novo_email);
    $stmt->bindParam(":senha", $pass);
    $stmt->bindParam(":nome_completo", $nome_completo);
    $stmt->execute();
}