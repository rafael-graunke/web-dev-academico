<?php include("includes/head.php") ?>

<body>
    <div class="login-bg d-flex align-items-center justify-content-center">
        <div class="login-container">
            <div class="logo text-center">
                <img src="assets/img/academico_logo.gif" alt="logo" class="selector" width="100px">
                <h1 class="text-white my-3">Acadêmico</h1>
            </div>
            <div class="login rounded border p-3">
                <h5>Bem-Vindo</h5>
                <form action="modules/login.php" method="POST">
                    <div class="form-group">
                        <input type="email" name="user" id="user" placeholder="E-mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="pass" placeholder="Senha" class="form-control">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Conectar</button>
                    </div>
                </form>
            </div>
            <?php if (isset($_GET['error']) && $_GET['error'] == "true") { ?>
                <div class="alert alert-danger mt-2">
                    Erro: usuário ou senha incorreto.
                </div>
            <?php } ?>            
        </div>
    </div>
    <?php include("includes/footer.php") ?>
</body>

</html>