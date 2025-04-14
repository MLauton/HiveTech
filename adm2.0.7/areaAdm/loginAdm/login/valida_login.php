<?php

session_start();
require "../../../dao/AdmDao.php";
$adms = AdmDao::selectAll();

$usuario_autenticado = false;

foreach($adms as $adm) {

    if ($adm['emailAdmin'] == ($_POST['email']) && $adm['senhaAdmin'] == ($_POST['password'])){
        $usuario_autenticado = true;
        $_SESSION['nomeAdmin'] = $adm[1];
    }
}

    if($usuario_autenticado){
        $_SESSION['autenticado']="SIM";
        header('location: ../../home/index.php');
    }else{
        $_SESSION['autenticado']="NÃO";
        header('location: ../../../index.php?login=erro');
 }


?>