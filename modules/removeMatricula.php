<?php 

include_once("../db/inscricaoDao.php");

$id_aluno = $_GET['aluno'];
$id_turma = $_GET['turma'];

removeInscricao($id_aluno, $id_turma);

header("Location: ../telaAlunoDetalhe.php?id=".$id_aluno);

?>