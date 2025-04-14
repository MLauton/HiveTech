<div style="display: flex;flex-direction: row;">
    <div class="espaco">
        <div class="area">
            <h2>Cursos Cadastradados</h2>
            <div class="botoes">
                <a class="button cursos">CURSOS</a>
                <a class="button categoriaBtn" href="../create/instCreate.php">CATEGORIA</a>
            </div>
        </div>
        <div class="area">
            <input icon="star" class="pesquisa" placeholder="⌕ Pesquise cursos..." />
            <a class="button adicionar">Adicionar +</a>
        </div>
        <div class="tabela">
            <div class="nomesTab">
                <div class="foto">
                    <h5>FOTO</h5>
                </div>
                <div class="nomes">
                    <h5>NOMES </h5>
                </div>
                <div class="categoria">
                    <h5>CATEGORIA</h5>
                </div>
                <div class="botao">
                    <h5>ALTERAR</h5>
                </div>
                <div class="botao">
                    <h5>DELETAR</h5>
                </div>

            </div>
            <div class="listInst">
            <?php
 foreach ($cursos as $c) {
    echo "<div>";
    echo "<h2>" . $c[2] . "</h2>";
    echo "<p><strong>Disciplina:</strong> " . $c['disciplinaCurso'] . "</p>";
    echo "<p><strong>Período:</strong> " . $c['periodoCurso'] . "</p>";
    echo "<p><strong>Modalidade:</strong> " . $c['modalidadeCurso'] . "</p>";
    echo "<p><strong>Categoria:</strong> " . $c['descCategoria'] . "</p>";
    echo "<img src='caminho/imagens/" . $c['nomeImagemCurso'] . "' alt='Imagem do curso'>";
    echo "<p><strong>Texto:</strong> " . $c['contTexto'] . "</p>";
    echo "</div><hr>";
}
?>
                <div class="dados">
                    <div class="foto">
                        <img class="inst" src="./../../img/defaultUser.png" alt="">
                    </div>
                    <div class="nomes">
                        ciencias da computação
                    </div>
                    <div class="categoria">
                        Tecnologia
                    </div>
                    <div class="botao">
                        <img src="./../../img/upd_icon.png" class="button funcao" alt="">
                    </div>
                    <div class="botao">
                        <img src="./../../img/trash_icon.png" class="button funcao" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card createCurso">
        <h2>Formulario - Curso</h2>
        <h3>Descrição do Curso:</h3>
        <textarea class="descForm"></textarea>
        <h3>Video de Apresentação do curso:</h3>
        <input class="video" />
        <h3>Principais Objetivos:</h3>
        <textarea class="objetivo"></textarea>
        <div class="localImg">
            <?php $tem = false ?><!--  embora pareça loucura, isso é para ver se existe uma imagem carregada kkkk -->
            <h3><?= $tem ? '✓  Imagem Carregada' : 'Adicione uma Imagem Ilustrativa para o Curso:' ?></h3>

            <div class="abrir">
                <a class="button adicionarFoto" id="abrir">+</a>
            </div>
        </div>
        <div class="button confirmar">
            Confirmar
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <div class="estruturaModalimgIlustrativa">
        <span class="fechar">&times;</span>
        <div class="centerInfo">
            <p>Adicione uma imagem</p>
            <div class="image">
                <?= $tem ? '<img src="./../../img/defaultUser.png" alt="">' : '+' ?>
            </div>
            <div class="button confirmar">
                Confirmar
            </div>

        </div>
    </div>
</div>

<script src="../../js/abrirFecharModal.js"></script>