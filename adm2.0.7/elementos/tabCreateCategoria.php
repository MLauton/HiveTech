<div class="espaco">
    <div class="area">
        <h2>Categorias Cadastradadas</h2>
        <div class="botoesTela">
            <a class="buttonTela categoriaBtn" href="../create/index.php">CURSOS</a>
            <a class="buttonTela cursos">CATEGORIA</a>
        </div>
    </div>
    <div class="areadois">
        <input icon="star" class="pesquisa" placeholder="⌕ Pesquise categorias...." />
        <div class="abrir">
            <a class="buttonTela adicionar" id="abrir">Adicionar +</a>
        </div>
    </div>
</div>

<div class="listCategoria">
    <div class="card categoria">
        <h2>Tecnologia</h2>
        <h5>"Transforme ideias em inovação: os cursos de tecnologia preparam você para construir o futuro!" </h5>
        <div class="botoes">
            <div class="abrirTres">
                <a class="button alterar">
                    Alterar
                </a>
            </div>
            <div class="abrirDois">
                <a class="button excluir">
                    Deletar
                </a>
            </div>
        </div>
    </div>
</div>



<div id="myModal" class="modal">
    <div class="centerCard">

        <div class="estruturaModal">
            <span class="fechar">&times;</span>
            <div class="centerInfo">
                <h2>Adicionar</h2>
                <p>Preencha os dados corretamente:</p>
                <div class="titleInput">
                    <p>Titulo:</p>
                    <input class="inputs titulo" />
                </div>
                <div class="titleInput">
                    <p>Descrição:</p>
                    <textarea class="inputs desc"></textarea>
                </div>
                <div class="button manter">
                    Confirmar
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myModalDois" class="modal">
    <div class="centerCard">

        <div class="estruturaModal">
            <span class="fechar">&times;</span>
            <div class="centerInfo">
                <h2>Deletar</h2>
                <p>Deseja deletar essa categoria?</p>
                <img class="inst" src="./../../img/defaultUser.png" alt="">
                <p>{nome categoria}</p>
                <div class="button manter">
                    Confirmar
                </div>
            </div>
        </div>
    </div>
</div>


<div id="myModalTres" class="modal">
    <div class="centerCard">

        <div class="estruturaModal">
            <span class="fechar">&times;</span>
            <div class="centerInfo">
                <h2>Alterar</h2>
                <div class="titleInput">
                    <p>Titulo:</p>
                    <input class="inputs titulo" />
                </div>
                <div class="titleInput">
                    <p>Descrição:</p>
                    <textarea class="inputs desc"></textarea>
                </div>
                <h5>*Após a alteração, os dados anteriores não serão salvos.</h5>
                <div class="button manter">
                    Confirmar
                </div>
            </div>
        </div>
    </div>
</div>


<script src="../../js/abrirFecharModal.js"></script>
<script src="../../js/abrirFecharModalDois.js"></script>
<script src="../../js/abrirFecharModalTres.js"></script>