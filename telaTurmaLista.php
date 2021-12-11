<?php include_once("db/turmaDao.php") ?>
<?php include("includes/head.php") ?>

<body>
    <?php include("assets/navbar.php") ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
    <div class="container p-0 mt-3 mb-1">
    </div>
    <div class="container p-0 responsive-table rounded shadow">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <th>Número</th>
                <th>Disciplina</th>
                <th>Período</th>
            </thead>
            <tbody>
                <?php foreach (buscaTodasTurmas() as $turma) { ?>
                    <tr>
                        <td><?php echo $turma['turma'] ?></td>
                        <td><?php echo $turma['disciplina'] ?></td>
                        <td><?php echo $turma['ano'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php include("includes/footer.php") ?>
</body>