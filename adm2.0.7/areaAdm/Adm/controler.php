<?php
require "../../model/Admin.php";
require "../../dao/AdmDao.php";

$admin = new Admin();

switch ($_POST['acao']){

    case 'INSERIR';
        $admin->setId($_POST['id']);
        $admin->setNome($_POST['nome']);
        $admin->setCpf($_POST['cpf']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['senha']);
        $admin->setToken($admin->generateToken());
        $admin->setImagem($admin->salvarImagem(''));
      
        try{
            $admDao = AdmDao::insert($admin);
            header('Location: index.php');
        }
        catch (Exception $e){
            header('Location: register.php');
            echo('deu erro');
        }
    break;

    case 'ALTERAR';
        try{
            $admDao = AdmDao::selectId($_POST['id']);
            include('register.php');
        }
        catch(Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
    break;

    case 'EXCLUIR';
        try{
            $admDao = AdmDao::deleteId($_POST['id']);
            header('Location: index.php');
        }catch (Exception $e){
            echo "Erro";
        }
    break;

    case 'ATUALIZAR';

        $admin = new Admin();
        $admin->setId($_POST['id']);
        $admin->setNome($_POST['nome']);
        $admin->setCpf($_POST['cpf']);
        $admin->setEmail($_POST['email']);
        $admin->setPassword($_POST['senha']);
        $admin->setImagem($admin -> salvarImagem($_POST['imagem']));

        try{
            $admDao = AdmDao::update($admin);
            header('Location: index.php');
        }catch(Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
}


?>