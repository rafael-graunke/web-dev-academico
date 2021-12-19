<nav class="navbar navbar-expand navbar-light bg-light" style="position: sticky; top: 0px; z-index: 100;">
    <a class="navbar-brand" href="index.php">
        <img src="assets/img/academico_logo.webp" width="30" height="30" class="d-inline-block align-top" alt="">
        Acadêmico
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="telaAlunoLista.php">Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="telaTurmaLista.php">Turmas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="telaDisciplinaLista.php">Disciplinas</a>
            </li>
        </ul>
        <div class="dropdown p-0 m-0">
            <a class="nav-link" href="#" id="userOptions" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/img/user_default.png" class="rounded-circle m-0" width="40px">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userOptions">
                <a class="dropdown-item d-flex justify-content-between px-3" href="#">
                    Configurações
                    <i class="text-deco-none bi bi-gear-fill"></i>
                </a>
                <a class="dropdown-item d-flex justify-content-between px-3" href="modules/logout.php">
                    Desconectar
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</nav>