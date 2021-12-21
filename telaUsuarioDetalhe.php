<?php include_once("db/usuarioDao.php"); ?>
<?php include_once("modules/auth.php") ?>
<?php $id_usuario = $_SESSION['id']; ?>
<?php $usuario = buscaUsuarioPorID($id_usuario); ?>

<?php include("includes/head.php") ?>

<body>
    <?php include('assets/navbar.php') ?>
    <div class="wrapper">
        <div class="row p-0 m-0">
            <div class="col-auto p-0">
                <div class="sidebar active" id="sidebar">
                    <div class="sidebar-header">
                        <img src="assets/img/user_default.png" width="150px" class="rounded-circle mb-2">
                        <h3>
                            <?php
                            if ($usuario['nome_completo'] != null) {
                                echo $usuario['nome_completo'];
                            } else {
                                echo $usuario['usuario'];
                            }
                            ?>
                        </h3>
                        <p class="text-left px-3"><i class="bi bi-person"></i> <?php echo $usuario['usuario'] ?></p>
                        <p class="text-left px-3"><i class="bi bi-envelope"></i> <?php echo $usuario['email'] ?></p>
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
                    <h5>Alterar Dados</h5>
                    <div class="border rounded p-3">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="nome_completo">Nome Completo</label>
                                <input class="form-control" type="text" name="nome_completo" id="nome_completo" value="<?php echo $usuario['nome_completo'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="email" name="email" id="email" value="<?php echo $usuario['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="senha">Nova Senha</label>
                                <input class="form-control" type="password" name="senha" id="senha" placeholder="Nova Senha">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Confirmar Senha">
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-success">Alterar</button>
                            </div>
                            <div class="alert alert-danger d-none" id="senha_aviso">
                                As senhas não correspondem
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("includes/footer.php") ?>
    <script src="assets/js/password.js"></script>

</body>

</html>