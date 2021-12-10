<?php
include_once("conexao.php");

function insereAluno($nome, $email)
{
    $conexao = criaConexao();

    $sql = "INSERT INTO aluno (nome_aluno, email_aluno) VALUES (:nome, :email)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);

    try {
        $stmt->execute();
        return buscaIdPorEmail($email);
    } catch (PDOException $e) {
        echo "Erro na conexão. Erro gerado: " . $e->getMessage();
    }
}

function buscaIdPorEmail($email)
{
    $conexao = criaConexao();

    $sql = "SELECT id_aluno FROM aluno WHERE email_aluno = :email";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $resultado = $stmt->fetchAll();
    return $resultado[0]['id_aluno'];
}

function buscaTodosAlunos()
{
    $conexao = criaConexao();

    $sql = "SELECT * FROM aluno";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $resultado = $stmt->fetchAll();
    return $resultado;
}

function buscaAlunosPorNome($n)
{
    $nome = $n."%";

    $conexao = criaConexao();

    $sql = "SELECT * FROM aluno WHERE nome_aluno LIKE :nome";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nome);
    $stmt->execute();

    $resultado = $stmt->fetchAll();
    return $resultado;
}

function buscaAluno($id)
{
    $conexao = criaConexao();

    $sql = "SELECT * FROM aluno WHERE id_aluno = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $resultado = $stmt->fetchAll();
    return $resultado;
}


function excluiAluno($id)
{
    $conexao = criaConexao();

    $sql = "DELETE FROM aluno WHERE id_aluno = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
        echo $stmt->rowCount() . " registro excluído.";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}


function alteraAluno($id, $nomeNovo, $emailNovo)
{
    $conexao = criaConexao();

    $sql = "UPDATE aluno SET nome_aluno = :nome, email_aluno = :email WHERE id_aluno = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome", $nomeNovo);
    $stmt->bindParam(":email", $emailNovo);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
        echo $stmt->rowCount();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
