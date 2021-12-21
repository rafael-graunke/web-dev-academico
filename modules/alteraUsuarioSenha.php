<?php include_once("../db/usuarioDao.php") ?>
<?php 

$id = $_POST['id'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirmar_senha'];

if ($senha == $confirma_senha) {
    alteraSenha($id, $senha);
    header("Location: ../telaUsuarioDetalhe.php");
} else {
    header("Location: ../telaUsuarioDetalhe.php?error=true");
}