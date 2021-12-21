<?php include_once("../db/usuarioDao.php") ?>
<?php 

$id = $_POST['id'];
$nome_completo = $_POST['nome_completo'];
$email = $_POST['email'];

alteraUsuario($id, $email, $nome_completo);

header("Location: ../telaUsuarioDetalhe.php");
