<?php 

include_once('../db/inscricaoDao.php');

$aluno = $_POST['aluno'];
$turma = $_POST['turma'];

criaInscricao($aluno, $turma);

header("Location: ../telaDetalheAluno.php?id=".strval($aluno)."&mtr=1");

?>