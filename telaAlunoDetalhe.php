<?php include_once("db/alunoDao.php"); ?>
<?php include_once("db/turmaDao.php"); ?>
<?php include_once("modules/auth.php") ?>
<?php $id_aluno = $_GET['id']; ?>
<?php $aluno = buscaAluno($id_aluno)[0]; ?>
<?php $turmas = buscaTurmasPorAluno($_GET['id']); ?>

<?php include("includes/head.php") ?>

<body>
    <?php include('assets/navbar.php') ?>
    <?php include('assets/modal.php') ?>
    <div class="wrapper">
        <div class="row p-0 m-0">
            <div class="col-auto p-0">
                <div class="sidebar active" id="sidebar">
                    <div class="sidebar-header">
                        <img src="assets/img/user_default.png" width="150px" class="rounded-circle mb-2">
                        <h3><?php echo $aluno['nome_aluno'] ?></h3>
                        <p><i class="bi bi-envelope"></i> <?php echo $aluno['email_aluno'] ?></p>
                        <hr>
                    </div>
                    <div class="sidebar-body">
                        <ul class="nav flex-column">
                            <li>
                                <p>
                                    <a data-toggle="collapse" href="#collapseCadastro" role="button" aria-expanded="false" aria-controls="collapseCadastro">
                                        Matricular aluno em nova turma
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a data-toggle="collapse" href="#collapseAltera" role="button" aria-expanded="false" aria-controls="collapseAltera">
                                        Alterar dados do aluno
                                    </a>
                                </p>
                            </li>
                            <li>
                                <p><a class="remove-item" href="modules/removeAluno.php?id=<?php echo $aluno['id_aluno'] ?>" data-toggle="modal" data-target="#exampleModal">Excluir aluno</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-footer">
                        <a href="index.php" class="btn btn-primary"><i class="bi bi-house-door-fill"></i> Voltar</a>
                    </div>
                    <div class="sidebar-tab">
                        <a class="w-100 h-100 d-block text-center" href="#" id="sidebar-collapse">
                            <img src="assets/img/caret.png" width="20px" alt="" id="caret">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col p-0">
                <div class="content p-5">
                    <h3>Tabela <small class="text-muted">de turmas</small></h3>
                    <div class="table-responsive table-sm rounded shadow mt-0" id="turmas">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <th>Disciplina</th>
                                <th>Semestre</th>
                                <th>Ano</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <?php if (count($turmas) > 0) { ?>
                                    <?php foreach ($turmas as $turma) { ?>
                                        <tr>
                                            <td><?php echo $turma['disciplina'] ?></td>
                                            <td><?php echo $turma['semestre'] ?>°</td>
                                            <td><?php echo $turma['ano'] ?></td>
                                            <td>
                                                <a class="text-deco-none" href="modules/removeMatricula.php?aluno=<?php echo $id_aluno ?>&turma=<?php echo $turma['turma'] ?>">
                                                <i class="bi bi-trash-fill icon-red"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="4">
                                            <i>O aluno não está matriculado em nenhuma turma</i>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div id="selector">
                        <div data-parent="#selector" class="collapse mt-3 rounded border <?php if (isset($_GET['mtr']) && $_GET['mtr'] == '1') echo 'show' ?>" id="collapseCadastro">
                            <?php include("telaAlunoMatricula.php") ?>
                        </div>
                        <div data-parent="#selector" class="collapse mt-3 rounded border <?php if (isset($_GET['alt']) && $_GET['alt'] == '1') echo 'show' ?>" id="collapseAltera">
                            <?php include("telaAlunoAltera.php") ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("includes/footer.php") ?>
    
</body>

</html>