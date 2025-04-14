<?php
require_once '../../dao/InstituicaoDao.php';
require_once "../../dao/foneInstituicaoDao.php";
require_once "../../dao/enderecoInstituicaoDao.php";
require_once "../../dao/TipoInstituicaoDao.php";
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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="controler.php" method="post" enctype="multipart/form-data">
            <div class="card">
                <input type="hidden" name="acao"placeholder="acao" value="<?= $acao?>">
                <input type="hidden" name="idInstituicao" placeholder="id"value="<?=$id?>">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="file" name="imagem" accept="image/*">
                <input type="file" name="video" accept="video/*">

                <input type="hidden" name="idFone" placeholder="idFone" id="idFone">
                <input type="text" name="numero" id="fone" placeholder="Fone">

                <input type="hidden" name="idEndereco" id="idEndereco" placeholder="Id Endereço">
                <input type="text" name="logradouro" id="logradouro" placeholder="Logradouro">
                <input type="text" name="numerolog" id="numerolog" placeholder="Número">
                <input type="text" name="cep" id="cep" placeholder="CEP">
                <input type="text" name="bairro" id="bairro" placeholder="Bairro">
                <input type="text" name="cidade" id="cidade" placeholder="Cidade">
                <input type="text" name="estado" id="estado" placeholder="Estado">

                <!-- Isso aqui deveria ser um for que recebe o id + nome do tipo intituicao -->
                <!-- select com os inputs com value = id e name = nome -->
                <input type="text" name="idTipo" id="idTipo" placeholder="idTipo">
                <input type="text" name="desc" id="desc" placeholder="Privado/Publica">

                <input type="text" name="idCurso" id="idCurso" placeholder="idCurso">

                <input type="submit" value="Salvar">
            </div>
        </form>
    </div>
</body>

</html>