<?php
require_once "../loginAdm/login/validar_acesso.php";
require_once "../../dao/admDao.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/geral.css">
    <link rel="stylesheet" href="./../../css/nav.css">
    <link rel="stylesheet" href="./../../css/menu.css">
    <link rel="stylesheet" href="./../../css/areaMenu.css">
    <link rel="stylesheet" href="./../../css/conteudo.css">
    <link rel="stylesheet" href="./../../css/cards.css">
    <link rel="stylesheet" href="./../../css/recepcao.css">
    <link rel="stylesheet" href="./../../css/tabelaInst.css">
    <title>ADM - HOME</title>
</head>

<body>
    <?php
    require_once './../../elementos/nav.php'
    ?>
    <?php
    require_once './../../elementos/areaMenu.php'
    ?>

    <main>
        <div style="display: flex;flex-direction: row;">

        </div>

        <?php
        require_once './../../elementos/recepcao.php'
        ?>
        <?php
        require_once './../../elementos/dadosHome.php'
        ?>

    </main>

</body>

</html>