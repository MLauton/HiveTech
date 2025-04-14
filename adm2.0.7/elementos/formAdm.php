<?php
require_once '../../dao/AdmDao.php';
if (empty($_POST)) {
    $acao = "INSERIR";
    $id = "";
    $cpf = "";
    $nome = "";
    $email = "";
    $senha = "";
    $imagem = "";
} else {
    $acao = "ATUALIZAR";
    $id = $admDao['idAdmin'];
    $cpf = $admDao['cpfAdmin'];
    $nome = $admDao['nomeAdmin'];
    $email = $admDao['emailAdmin'];
    $senha = $admDao['senhaAdmin'];
    $imagem = $admDao['imagemAdmin'];
}

?>

<div class="containerAdm">
    <form action="controler.php" class="registerAdm" id="formRegister" method="post" enctype="multipart/form-data">
        <div class="cabeForm">
            <p>REGISTER</p>
            <input type="hidden" name="acao" value="<?= $acao?>">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="hidden" name="imagem" value="<?=$imagem?>">
        </div>
        <div class="contForm">
            <div class="prt1">
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?=$nome?>">
                <div class="val">
                    <input type="email" name="email" id="email" placeholder="E-mail" value="<?=$email?>">
                    <span id="erroEmail"></span>
                </div>
                <div class="val">
                <button id="verSenha" ><img id="icone" src="../../img/olho.png" alt=""></button>
                    <input type="password" minlength="8" id="senha" name="senha" placeholder="Senha" value="<?= $senha?>">
                    <span id="erroSenha"></span>
                </div>
                <input type="text" data-mask="000.000.000-00" name="cpf" id="cpf" placeholder="Cpf" value="<?= $cpf?>">
            </div>
            <div class="prt2">
                <p>Foto usuário</p>
                <form>
                    <label for="fotoAdmin" class="uparFoto" style="background-image: url(../../img/<?=$imagem?>);">
                        <p id="iconMais">&#43;</p>
                    </label>
                    <img id="visuFoto" src="../../img/" alt="era pra ter algo aq" style="display: none;">
                    <input type="file" accept="image/jpg, image/png, image/jpeg, image/webp" name="imagem" id="fotoAdmin">
                </form>
                <div class="prt3">
                    <a href="index.php" style="width: 100%;"><input type="button" value="Cancelar" class="btnForm" id="left"></a>
                    <input type="submit" value="Cadastrar" class="btnForm" id="right">
                </div>
            </div>
        </div>
    </form>
</div>

<script src="../js/validarEmail.js"></script>
<script src="../js/validarSenha.js"></script>
<script src="../js/jquery-3.0.0.min.js"></script>
<script src="../js/jquery.mask.min.js"></script>