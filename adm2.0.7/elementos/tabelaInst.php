<?php
require_once "../../dao/InstituicaoDao.php";
$inst = InstituicaoDao::selectAll();
$qtdInst = count($inst);
?>

<div class="espaco">
    <div style="width: 90%;margin:15px;">
<h2>Instituições </h2></div>
<div class="tabela">
    <div class="nomesTab">
        <div class="infoTab id">
            <h5>ID</h5>
        </div>
        <div class="infoTab nome">
            <h5>NOME</h5>
        </div>
        <div class="infoTab email">
            <h5>EMAIL</h5>
        </div>
        <div class="infoTab tipo">
            <h5>TIPO</h5>
        </div>
        <div class="infoTab fone">
            <h5>TELEFONE</h5>
        </div>
    </div>
    <?php
        foreach ($inst as $a=> $inst) {
    ?>
        <div class="dados">
            <div class="id">
            <?= $inst[0] ?>
            </div>
            <div class="nome">
            <?= $inst[1] ?>
            </div>
            <div class="email">
            <?= $inst[2] ?>
            </div>
            <div class="tipo">
            <?= $inst[12] ?>
            </div>
            <div class="fone">
            <?= $inst[5] ?>
            </div>
        </div>
    <?php
                    }
                    ?>
</div>
</div>