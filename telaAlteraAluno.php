<?php
include_once("alunoDao.php");
if (isset($_GET["id"])) {
    $id_aluno = $_GET['id'];
    $aluno = buscaAluno($id_aluno)[0];
    $nome = $aluno['nome_aluno'];
    $email = $aluno['email_aluno'];
}
?>

<div class="wrapper p-3">
    <?php if (isset($_GET["id"])) { ?>
        <form action="alteraAluno.php" method="post">
            <div class="form-group">
                <label for="novoNome">Insira o novo nome do aluno:</label>
                <input type="text" name="novoNome" id="novoNome" class="form-control" value="<?php echo $nome ?>">
            </div>
            <div class="form-group">
                <label for="novoEmail">Insira o novo e-mail do aluno:</label>
                <input type="email" name="novoEmail" id="novoEmail" class="form-control" value="<?php echo $email ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id_aluno ?>">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a class="btn btn-secondary" data-toggle="collapse" href="#collapseAltera" role="button" aria-expanded="false" aria-controls="collapseAltera">Fechar</a>
                    <button type="reset" class="btn btn-danger ml-2">Resetar</button>
                    <button type="submit" class="btn btn-primary ml-2">Alterar</button>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-warning mt-2">
            Nenhum usuário foi selecionado. Clique
            <a href="index.php" class="text-deco-none"><strong> aqui </strong></a>
            para voltar a lista de usuários.
        </div>
    <?php } ?>
</div>