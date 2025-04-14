

<div style="width: 50%; display: flex; align-items: center;flex-direction: column;">
    <div class="card formCursos">
        <h3 class="nomeForm">Formulario - Fatec - sla</h3>
        <div class="espacoInput primeiro">
        <h4 class="tituloInput"><?= isset($cursoSelecionado['nomeCurso']) ? $cursoSelecionado['nomeCurso'] : 'nome do curso' ?></h4>

        </div>
        <div class="espacoInput segundo">
            <h4 class="tituloInput"><?= isset($cursoSelecionado['modalidadeCurso']) ? $cursoSelecionado['modalidadeCurso'] : 'Modalidade do curso' ?></h4>
        </div>
        <div class="espacoInput segundo">
            <h4 class="tituloInput"><?= isset($cursoSelecionado['contTexto']) ? $cursoSelecionado['contTexto'] : 'Descrição do curso' ?></h4>
        </div>
        <div class="espacoInput segundo">
            <h4 class="tituloInput"><?= isset($cursoSelecionado['objetivoCurso']) ? $cursoSelecionado['objetivoCurso'] : 'Objetivo do curso' ?></h4>
        </div>
        <div class="espacoInput segundo">
            <h4 class="tituloInput"><?= isset($cursoSelecionado['contTexto']) ? $cursoSelecionado['contTexto'] : 'Descrição do curso' ?></h4>
        </div>
        <div class="espacoInput terceiro">
            <h4 class="tituloInput"><?= isset($cursoSelecionado['periodoCurso']) ? $cursoSelecionado['periodoCurso'] : 'Periodo do curso' ?></h4>
        </div>
        <div class="espacoInput quarto">
            <h4 class="tituloInput"><?= isset($cursoSelecionado['disciplinaCurso']) ? $cursoSelecionado['disciplinaCurso'] : 'Disciplina do curso' ?></h4>
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