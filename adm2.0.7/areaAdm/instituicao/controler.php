<?php
require "../../model/instituicao.php";
require "../../dao/InstituicaoDao.php";

require "../../model/foneInstituicao.php";
require "../../dao/foneInstituicaoDao.php";

require "../../model/enderecoInstituicao.php";
require "../../dao/enderecoInstituicaoDao.php";

require "../../model/tipoInstituicao.php";
require "../../dao/TipoInstituicaoDao.php";

require "../../model/imagemInstituicao.php";
require "../../dao/imagemInstituicaoDao.php";

require "../../model/textoInstituicao.php";
require "../../dao/textoInstituicaoDao.php";

$instituicao = new instituicao();
$fone = new foneInstituicao();
$endereco = new enderecoInstituicao();
$tipoinstituicao = new tipoInstituicao();
$imageminstituicao = new imagemInstituicao();
$textoinstituicao = new textoInstituicao();

switch ($_POST['acao']){

    case 'INSERIR';

    /*Fiz a maneira que eu sei fazer, mas vamos melhorar com o tempo e com laravel -----> KKKK NÃO*/
        $instituicao->setId($_POST['idInstituicao']);
        $instituicao->setNome($_POST['nome']);
        $instituicao->setEmail($_POST['email']);
        $instituicao->setVideo($instituicao->salvarVideo(''));
        $instituicao->setLink($_Post['link']);
        $instituicao->setStatus(0);
        $instituicao->setCnpj($_POST['cnpj']);
        $instituicao->setImagem($_POST['idImagemInstituicao']);
        $instituicao->setFone($_POST['idFone']);
        $instituicao->setEndereco($_POST['idEndereco']);
        $instituicao->setTipo($_POST['idTipo']);
        $instituicao->setCurso($_POST['idCurso']);
        $instituicao->setTexto($_POST['idTexto']);

        $fone->setId($_POST['idFone']);
        $fone->setNumero($_POST['numero']);

        $endereco->setId($_POST['idEndereco']);
        $endereco->setLogradouro($_POST['logradouro']);
        $endereco->setNumero($_POST['numero']);
        $endereco->setCep($_POST['cep']);
        $endereco->setBairro($_POST['bairro']);
        $endereco->setCidade($_POST['cidade']);
        $endereco->setEstado($_POST['estado']);
        $endereco->setComplemento($_POST['complemento']);

        $tipoinstituicao->setId($_POST['idTipo']);
        $tipoinstituicao->setDesc($_POST['desc']);

        $imageminstituicao->setId($_POST['idImagemInstituicao']);
        $imageminstituicao->setImage($imageminstituicao->salvarImagem(''));

        $textoinstituicao->setId($_POST['idtextoInstituicao']);
        $textoinstituicao->setTexto($_POST['contTextoInstituicao']);

        try{
            $instituicao = InstituicaoDao::insert($instituicao, $endereco, $fone, $tipoinstituicao, $textoinstituicao, $imageminstituicao);
            header('Location: sim.php');
        }
        catch (Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
    break;

    case 'ALTERAR';
        try{
            $instituicao = InstituicaoDao::selectId($_POST['id']);

            $fone = FoneInstituicaoDao::selectId($_POST['id']);

            $endereco = EnderecoInstituicaoDao::selectId($_POST['id']);

            $tipoinstituicao = TipoInstituicaoDao::selectId($tipoinstituicao);

            $imageminstituicao = ImagemInstituicaoDao::selectId($_POST['id']);

            $textoinstituicao = TextoInstituicaoDao::selectId($_POST['id']);

            include('register.php');
        }
        catch(Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }

        
    break;

    case 'EXCLUIR';
        try{
            $instituicao = InstituicaoDao::deleteId($_POST['id']);

            $fone = FoneInstituicaoDao::deleteId($_POST['id']);

            $endereco = EnderecoInstituicaoDao::deleteId($_POST['id']);

            $tipoinstituicao = TipoInstituicaoDao::deleteId($_POST['id']);

            $textoinstituicao = TextoInstituicaoDao::deleteId($_POST['id']);

            $imageminstituicao = imagemInstituicaoDao::deleteId($_POST['id']);

            header('Location: index.php');
        }catch (Exception $e){
            echo "Erro";
        }
    break;

    case 'ATUALIZAR';

    $instituicao = new instituicao();
    $fone = new foneInstituicao();
    $endereco = new enderecoInstituicao();
    $tipoinstituicao = new tipoInstituicao();
    $textoinstituicao = new textoInstituicao();
    $imageminstituicao = new imagemInstituicao();

        $instituicao->setId($_POST['id']);
        $instituicao->setNome($_POST['nome']);
        $instituicao->setEmail($_POST['email']);
        $instituicao->setImagem($_POST['imagem']);
        $instituicao->setVideo($_POST['video']);
        $instituicao->setFone($_POST['fone']);
        $instituicao->setEndereco($_POST['endereco']);
        $instituicao->setTipo($_POST['tipo']);
        $instituicao->setCurso($_POST['curso']);

        
        $fone->setId($_POST['id']);
        $fone->setNumero($_POST['numero']);

        $endereco->setId($_POST['id']);
        $endereco->setLogradouro($_POST['logradouro']);
        $endereco->setNumero($_POST['numero']);
        $endereco->setCep($_POST['cep']);
        $endereco->setBairro($_POST['bairro']);
        $endereco->setCidade($_POST['cidade']);
        $endereco->setEstado($_POST['estado']);

        $tipoinstituicao->setId($_POST['idtipo']);
        $tipoinstituicao->setDesc($_POST['desc']);

        $textoinstituicao->setId($_POST['id']);
        $textoinstituicao->setTexto($_POST['contTextoInstituicao']);

        $imageminstituicao->setId($_POST['id']);
        $imageminstituicao->setImage($_POST['linkImagemInstituicao']);

        try{
            $instituicao = InstituicaoDao::update($instituicao);

            $fone = FoneInstituicaoDao::update($fone);

            $endereco = EnderecoInstituicaoDao::update($endereco);

            $tipoinstituicao = TipoInstituicaoDao::update($tipoinstituicao);

            $textoinstituicao = TextoInstituicaoDao::update($textoinstituicao);

            $imageminstituicao = ImagemInstituicaoDao::update($imageminstituicao);

            header('Location: index.php');
        }catch(Exception $e){
            echo "Erro";
        }

     function selectInstituicaos() {
        $conexao = Conexao::conectar();
    
        $query = "SELECT COUNT(idInstituicao) AS 'total' FROM tbinstituicao";
    
        $stmt = $conexao->prepare($query);
    
        $stmt->execute();
    
        $result = $stmt->fetch();
    
        return $result; // This will return an array like ['total' => 10]
    }
}


?>