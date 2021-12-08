<?php include_once("conexao.php") ?>
<?php 

function criaInscricao($id_aluno, $id_turma) {
    $conexao = criaConexao();

    $sql = "INSERT INTO inscricao (aluno, turma) VALUES (:id_aluno, :id_turma)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id_aluno", $id_aluno);
    $stmt->bindParam(":id_turma", $id_turma);

    try {
        return $stmt->execute();
    } catch (PDOException $e) {
        echo "Erro na conexão. Erro gerado: " . $e->getMessage();
    }
}

function removeInscricao($id_aluno, $id_turma) {
    $conexao = criaConexao();

    $sql = "DELETE FROM inscricao WHERE aluno = :id_aluno AND turma = :id_turma";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id_aluno", $id_aluno);
    $stmt->bindParam(":id_turma", $id_turma);

    try {
        $stmt->execute();
        echo $stmt->rowCount() . " registro excluído.";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>