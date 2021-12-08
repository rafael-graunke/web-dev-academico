<?php
include_once("alunoDao.php");

excluiAluno($_GET['id']);

header("Location: index.php");
