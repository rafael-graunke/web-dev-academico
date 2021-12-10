<?php
include_once("../db/alunoDao.php");

if (isset($_POST["nome"]) && isset($_POST["email"])) {
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
        header("Location: ../telaAlunoAdiciona.php?error=true");
    } else {
        $id = insereAluno($_POST["nome"], $_POST["email"]);
        header("Location: ../telaAlunoAdiciona.php?error=false&id=".$id);
    }    
} else {
    header("Location: ../telaAlunoAdiciona.php?error=true");
}
