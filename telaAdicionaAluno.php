<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Aluno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

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
                            Clique <strong><a class="text-deco-none" href="telaDetalheAluno.php?id=<?php echo $_GET['id'] ?>">aqui </a></strong>
                            para configurar o aluno.
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>