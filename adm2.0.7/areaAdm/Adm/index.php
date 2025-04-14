<link rel="stylesheet" href="./../../css/geral.css">
<link rel="stylesheet" href="./../../css/nav.css">
<link rel="stylesheet" href="./../../css/menu.css">
<link rel="stylesheet" href="./../../css/areaMenu.css">
<link rel="stylesheet" href="./../../css/conteudo.css">
<link rel="stylesheet" href="./../../css/indexAdm.css">
<?php
require_once "../loginAdm/login/validar_acesso.php";
require_once "../../dao/AdmDao.php";
$adms = AdmDao::selectAll();
?>

<body>


    <?php
    require_once './../../elementos/nav.php'
    ?>
    <?php
    require_once './../../elementos/areaMenu.php';
    ?>
    <div>
        <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Temporária</title>
  <style>
    /* Estilos gerais */
    div {
      margin: 0;
      padding: 0;
    }

*{
    text-align: center;
}



    h1 {
        padding-top: 8rem;
      color: #ff6f61;
      font-size: 2.5rem;
    }

    p {
      font-size: 1.2rem;
      margin: 20px 0;
    }

    .joke {
      font-size: 1.5rem;
      color: #009688;
      font-weight: bold;
    }

    .footer {
      margin-top: 30px;
      font-size: 0.9rem;
      color: #888;
    }
  </style>
</head>
    <h1>Esta Página tambem Deletada</h1>
    <p>pois adm n cadastra adm</p>
    <div class="footer">mas vai que a gente precise do forms,deixa ai por enquanto</div>

</html>
</div>

    <div class="containerIndexAdm">

        <div class="admsCad">
            <div class="algo">
                <div class="direita">
                    <h1>ADMS</h1>
                </div>
                <div class="esquerda">
                    <a href="register.php"><button id="btnAdd">&#43;</button></a>
                </div>
            </div>
            <div class="mds5">
                <div class="admCab">
                    <div class="nomeAdm">
                        foto
                    </div>
                    <div class="nomeAdm">
                        Nome
                    </div>
                    <div class="emailAdm">
                        Email
                    </div>
                    <div class="cpfAdm">
                        Cpf
                    </div>
                    <div class="nadaAdm">
                        Ações
                    </div>
                </div>
                <div class="coisas_banco">
                    <?php
                    $cores = ["#dddddd", "#c2c2c2"];
                    foreach ($adms as $corzinha => $adm) {
                        $fundo = $cores[$corzinha % count($cores)];
                    ?>
                        <div class="contDao" style="background-color: <?= $fundo ?>">
                            <div class="admFoto">
                                <img src="./../../img/<?= $adm[6] ?>" alt="">
                            </div>

                            <div class="nomeAdm">
                                <?= $adm[1] ?>
                            </div>
                            <div class="emailAdm">
                                <?= $adm[3] ?>
                            </div>
                            <div class="cpfAdm">
                                <?= $adm[2] ?>
                            </div>
                            <div class="btnsForms">
                                <form action="controler.php" method="post">
                                    <input type="hidden" id='acao' name="acao" value="ALTERAR">
                                    <input type="hidden" id='id' name="id" value="<?= $adm[0] ?>">
                                    <button type="submit" value="" id="btnEdit">
                                        <img src="./../../img/upd_icon.png" id="penBtn" alt="">
                                    </button>
                                </form>
                                <form action="controler.php" method="post">
                                    <input type="hidden" id='acao' name="acao" value="EXCLUIR">
                                    <input type="hidden" id='id' name="id" value="<?= $adm[0] ?>">
                                    <button type="submit" value="" id="btnEdit">
                                        <img src="./../../img/trash_icon.png" id="penBtn" alt="">
                                    </button>
                                </form>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>