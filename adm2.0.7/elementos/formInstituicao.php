<div style="width: auto; display: flex;justify-content: center; align-items: center;flex-direction: column;">
    <div class="card formInst">
        <div style="width: 100%; height: auto; display: flex; align-items:center ;justify-content: space-between; ;flex-direction: row">
            <h3>Formulario - Fatec - sla</h3>
            <h5 class="abrir">Avançar ></h5>

        </div>
        <div class="formulario">
            <div class="cnpj">
                <h4>CNPJ</h4>
                <input class="inputComum" />
            </div>
            <div class="email">
                <h4>Email</h4>
                <input class="inputComum" />
            </div>
            <div class="imgs">
                <?php $tem = true ?><!--  embora pareça loucura, isso é para ver se existe uma imagem carregada kkkk -->
                <div>
                    <h4>Imagem Logo</h4>
                    <?= $tem ? '<img src="./../../img/defaultUser.png" class="img logo" alt="">' : '<a class="img logo" >+</a>' ?>
                </div>
                <div>
                    <h4>Imagem Banner</h4>
                    <?= $tem ? '<img src="./../../img/defaultUser.png" class="img banner" alt="">' : '<a class="img banner">+</a>' ?>
                </div>
            </div>
            <div class="inputLittle">
                <div class="nSei">
                    <h4>Endereço: 1 sla</h4>
                    <input class="inputPequeno" />
                </div>
                <div class="nSei">
                    <h4>Endereço: 1 sla</h4>
                    <input class="inputPequeno" />
                </div>
            </div>
            <div class="Video">
                <h4>Link do video apresentação</h4>
                <input class="inputComum" />
            </div>
            <div class="endereco">
                <h4>Endereço: 1 sla</h4>
                <input class="inputComum" />
            </div>
        </div>


        <div id="myModal" class="modal">
            <div class="card formInstDois">
                <div style="width: 100%; height: auto; display: flex; align-items:center ;justify-content: space-between; ;flex-direction: row">
                    <h5 class="fechar">
                        < Voltar </h5>

                </div>
                <div class="formulario">
                    <div class="inputEspaco">
                        <h4>Descrição</h4>
                        <textarea class="inputGrande"></textarea>
                    </div>
                    <div class="inputEspacoCa">
                        <h4>Caracteristicas Principais: 1</h4>
                        <textarea class="inputGrande"></textarea>
                    </div>
                    <div class="inputEspacoCa">
                        <h4>Caracteristicas Principais: 2</h4>
                        <textarea class="inputGrande"></textarea>
                    </div>
                    <div class="inputEspacoCa">
                        <h4>Caracteristicas Principais: 3</h4>
                        <textarea class="inputGrande"></textarea>
                    </div>
                    <div class="inputEspaco">
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
        </div>
    </div>
    <script src="../../js/abrirFecharModal.js"></script>