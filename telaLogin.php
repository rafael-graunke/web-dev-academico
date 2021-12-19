<?php include("includes/head.php") ?>

<body>
    <div class="login-bg d-flex align-items-center">

        <div class="login m-auto rounded border p-3">

            <!-- <img src="assets/img/academico_logo.gif" width="150px" class="rounded mx-auto">
            <h1 class="">Academico</h1> -->

            <div class="col">
                <div class="row">
                    <img src="assets/img/academico_logo.webp" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
                    <p style="font-size: 1.25rem;">
                        Acadêmico
                    </p>
                </div>
                <div class="row">
                    <h5>
                        Bem-vindo! <br>
                    </h5>

                </div>
            </div>
            <form action="modules/login.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="email" name="user" id="user" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Senha">
                </div>
                <button class="btn btn-success" type="submit">Conectar</button>
            </form>
        </div>
        <?php if (isset($_GET['error']) && $_GET['error'] == "true") { ?>
            <div class="alert alert-danger">
                Erro: usuário ou senha incorreto.
            </div>
        <?php } ?>
        <?php include("includes/footer.php") ?>
    </div>
</body>

</html>