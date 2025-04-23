<div style="width: 50%; display: flex; align-items: center;flex-direction: column;">
    <div class="card formCursos">
        <h3 class="nomeForm">Formulario - Fatec - sla</h3>
        <div class="espacoInput primeiro">
            <h3>Nome do Curso : </h3>
            <h4 class="tituloInput"><?= isset($cursoSelecionado['nomeCurso']) ? $cursoSelecionado['nomeCurso'] : 'Não contém informações' ?></h4>
        </div>
        <div class="espacoInput segundo">
            <h3>Modalidade do curso: </h3>
            <h4 class="tituloInput"><?= isset($cursoSelecionado['modalidadeCurso']) ? $cursoSelecionado['modalidadeCurso'] : 'Não contém informações' ?></h4>
        </div>
        <div class="espacoInput terceiro">
            <h3>Periodo do curso: </h3>
            <h4 class="tituloInput"><?= isset($cursoSelecionado['periodoCurso']) ? $cursoSelecionado['periodoCurso'] : 'Não contém informações' ?></h4>
        </div>
        <div class="espacoInput quarto">
            <h3>Disciplina do curso: </h3>
            <h4 class="tituloInput"><?= isset($cursoSelecionado['disciplinaCurso']) ? $cursoSelecionado['disciplinaCurso'] : 'Não contém informações' ?></h4>
        </div>
        <div class="espacoInput segundo">
            <h3>Grade Curricular: </h3>
            <h4 class="tituloInput"><?= isset($cursoSelecionado['modalidadeCurso']) ? $cursoSelecionado['modalidadeCurso'] : 'Não contém informações' ?></h4>
        </div>
        <h3>Imagem Logo:</h3>
        <div class="espacoInput sexto">
        <?php $tem = true ?><!--  embora pareça loucura, isso é para ver se existe uma imagem carregada kkkk -->
            <?= $tem ? '<img src="./../../img/defaultUser.png" class="img logo" alt="">' : '<a class="img logo" >+</a>' ?>
        </div>
        <div class="espacoInput quinto">
            <div class="botoes">
                <div class="button confirmar">
                    Confirmar
                </div>
                <div class="button recusar">
                    Recusar
                </div>
            </div>
        </div>
    </div>
</div>
