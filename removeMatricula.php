<?php 

include_once("inscricaoDao.php");

$id_aluno = $_GET['aluno'];
$id_turma = $_GET['turma'];

removeInscricao($id_aluno, $id_turma);

header("Location: telaDetalheAluno.php?id=".$id_aluno);

?>