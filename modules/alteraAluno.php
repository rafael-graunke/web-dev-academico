<?php

include_once("../db/alunoDao.php");

$id = $_POST['id'];
$novoNome = $_POST['novoNome'];
$novoEmail = $_POST['novoEmail'];

alteraAluno($id,$novoNome,$novoEmail);

header("Location: ../telaAlunoDetalhe.php?id=".$id."&alt=1");