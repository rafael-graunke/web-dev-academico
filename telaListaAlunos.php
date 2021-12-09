
<?php include_once("db/alunoDao.php"); ?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body>
    <?php include('assets/navbar.php') ?>
    <?php include('assets/modal.php') ?>
    <div class="container p-0 mt-3">
        <h3>Tabela <small class="text-muted">de alunos</small></h3>
    </div>
    <div class="container p-0 table-responsive rounded shadow mb-3">
        <table class="table table-striped table-hover mb-0">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Aluno</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">
                        <div class="float-right">
                            <a title="Adicionar" href="telaAdicionaAluno.php" class="text-deco-none">
                                <h5 class="m-0">
                                    <i class="bi bi-plus-square-fill"></i>
                                </h5>
                            </a>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (buscaTodosAlunos() as $aluno) { ?>
                    <tr>
                        <td><?php echo $aluno['nome_aluno'] ?></td>
                        <td><?php echo $aluno['email_aluno'] ?></td>
                        <td class="d-flex justify-content-end">
                            <a class="text-deco-none ml-2" href="telaDetalheAluno.php?id=<?php echo $aluno['id_aluno'] ?>">
                                <i class="text-deco-none bi bi-gear-fill" title="Configurar Aluno"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/modal.js"></script>
</body>