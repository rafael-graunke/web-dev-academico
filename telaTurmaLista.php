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
    <div class="container">
        <div class="responsive-table">
            <table>
                <thead>
                    <th>Número</th>
                    <th>Disciplina</th>
                    <th>Período</th>
                </thead>
                <tbody>
                    <?php foreach (buscaTodasTurmas() as $turma) { ?>
                        <tr>
                            <td><?php $turma['numero'] ?></td>
                            <td><?php $turma['disciplina'] ?></td>
                            <td><?php $turma['ano'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include("includes/footer.php") ?>
</body>