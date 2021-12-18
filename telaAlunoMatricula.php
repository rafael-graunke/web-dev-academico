<?php include_once("db/turmaDao.php") ?>
<?php include_once("modules/auth.php") ?>
<div class="p-3">
    <form action="modules/matriculaAluno.php" method="POST">
        <div class="form-group">
            <label for="turma">Escolha a turma para registrar o aluno</label>
            <select name="turma" id="turma" class="form-control">
                <?php foreach (buscaTodasTurmas() as $turma) { ?>
                    <option value="<?php echo $turma['turma'] ?>">
                        <?php echo $turma['disciplina'] ?> - <?php echo $turma['semestre'] ?>° Semestre de <?php echo $turma['ano'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <input type="hidden" name="aluno" id="aluno" value="<?php echo $id_aluno ?>">
        <div class="form-group d-flex justify-content-end">
            <a class="btn btn-secondary mr-2" data-toggle="collapse" href="#collapseCadastro" role="button" aria-expanded="false" aria-controls="collapseCadastro">
                Fechar
            </a>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>