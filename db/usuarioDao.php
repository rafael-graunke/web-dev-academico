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

function alteraUsuario($id, $novo_email, $nome_completo) {
    $conexao = criaConexao();

    $sql = "UPDATE usuario SET email = :email, nome_completo = :nome_completo
    WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":email", $novo_email);
    $stmt->bindParam(":nome_completo", $nome_completo);
    $stmt->execute();
}

function alteraSenha($id, $nova_senha) {
    $conexao = criaConexao();

    $sql = "UPDATE usuario SET senha = :senha WHERE id = :id";

    $pass = password_hash($nova_senha, PASSWORD_BCRYPT);

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":senha", $pass);
    $stmt->execute();
}