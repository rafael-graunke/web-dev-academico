
<?php include("includes/head.php") ?>

<body>
    <?php include('assets/navbar.php') ?>
    <div class="container p-0">
        <form action="modules/adicionaAluno.php" method="post" class="mb-2">
            <div class="form-group">
                <label for="nome">Insira o nome do aluno:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Aluno">
            </div>
            <div class="form-group">
                <label for="email">Insira o e-mail do aluno:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="aluno@exemplo.com">
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="float-right">
                        <a href="index.php" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </div>
                </div>
            </div>
        </form>
        <?php if (isset($_GET["error"]) && $_GET["error"] == 'true') { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger">
                        Erro ao adicionar o aluno. Verifique que todos os campos foram preenchidos.
                    </div>
                </div>
            </div>
        <?php } elseif (isset($_GET["error"]) && $_GET["error"] == 'false') { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-success">
                        Aluno cadastrado com sucesso. 
                        <?php if (isset($_GET['id'])) { ?>
                            Clique <strong><a class="text-deco-none" href="telaAlunoDetalhe.php?id=<?php echo $_GET['id'] ?>">aqui </a></strong>
                            para configurar o aluno.
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

        <?php include("includes/footer.php") ?>
    </body>

</html>