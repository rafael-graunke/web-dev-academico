<?php
include_once("../db/alunoDao.php");

excluiAluno($_GET['id']);

header("Location: ../telaAlunoLista.php");
