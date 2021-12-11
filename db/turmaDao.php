<?php
include_once("conexao.php");

function buscaTurmasPorAluno($id) {
    $conexao = criaConexao();

    $sql = "SELECT disciplina.nome AS disciplina,
    turma.ano, turma.semestre, turma.id_turma AS turma FROM disciplina
    INNER JOIN turma ON turma.id_disciplina = disciplina.id_disciplina
    INNER JOIN inscricao ON inscricao.turma = turma.id_turma
    INNER JOIN aluno ON aluno.id_aluno = inscricao.aluno
    WHERE aluno.id_aluno = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $resultado = $stmt->fetchAll();
    return $resultado;

}

function buscaTodasTurmas() {
    $conexao = criaConexao();

    $sql = "SELECT disciplina.nome AS disciplina,
    turma.ano AS ano, turma.semestre AS semestre, turma.id_turma AS turma FROM disciplina
    INNER JOIN turma ON turma.id_disciplina = disciplina.id_disciplina";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $resultado = $stmt->fetchAll();
    return $resultado;

}
