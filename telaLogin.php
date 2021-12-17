<?php include("includes/head.php") ?>

<body>
    <div class="wrapper">
        <form action="modules/login.php" method="POST">
            <div class="form-group">
                <label for="user">Usuário</label>
                <input type="email" name="user" id="user">
            </div>
            <div class="form-group">
                <label for="pass">Senha</label>
                <input type="password" name="pas" id="pass">
            </div>
            <button type="submit">Logar</button>
        </form>
        <?php if (isset($_GET['error']) && $_GET['error'] == "true") { ?>
            <div class="alert alert-danger">
                Erro: usuário ou senha incorreto.
            </div>
        <?php } ?>
    </div>
    <?php include("includes/footer.php") ?>
</body>

</html>