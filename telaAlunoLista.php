<?php include("includes/head.php") ?>
<?php include_once("db/alunoDao.php"); ?>

<body>
    <?php include('assets/navbar.php') ?>
    <?php include('assets/modal.php') ?>
    <div class="container p-0 mt-3 mb-1">
        <div class="row">
            <div class="col-auto">
                <h3>Tabela <small class="text-muted">de alunos</small></h3>
            </div>
            <div class="col">
                <form action="" method="GET" class="form-inline">
                    <div class="form-group w-100 d-flex justify-content-end">
                        <?php if (isset($_GET['nome'])) { ?>
                            <a href="telaAlunoLista.php" class="text-deco-none mr-2">
                                <i class="bi bi-x-lg"></i>
                            </a>
                        <?php } ?>
                        <input type="text" name="nome" id="nome" class="form-control mr-2" value="<?php if (isset($_GET['nome'])) {
                                                                                                        echo $_GET['nome'];
                                                                                                    } ?>">
                        <button type="submit" class="btn btn-success">Pesquisar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="container p-0 table-responsive rounded shadow mb-3">
        <table class="table table-striped table-hover mb-0">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Aluno</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">
                        <div class="float-right">
                            <a title="Adicionar" href="telaAlunoAdiciona.php" class="text-deco-none">
                                <h5 class="m-0">
                                    <i class="bi bi-plus-square-fill"></i>
                                </h5>
                            </a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['nome'])) {
                    $lista = buscaAlunosPorNome($_GET['nome']);
                } else {
                    $lista = buscaTodosAlunos();
                }

                ?>
                <?php foreach ($lista as $aluno) { ?>
                    <tr>
                        <td><?php echo $aluno['nome_aluno'] ?></td>
                        <td><?php echo $aluno['email_aluno'] ?></td>
                        <td class="d-flex justify-content-end">
                            <a class="text-deco-none ml-2" href="telaAlunoDetalhe.php?id=<?php echo $aluno['id_aluno'] ?>">
                                <i class="text-deco-none bi bi-gear-fill" title="Configurar Aluno"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <?php include("includes/footer.php") ?>
    
</body>