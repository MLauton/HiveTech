<?php
require "../../model/curso.php";
require "../../dao/CursoDao.php";

require "../../model/categoria.php";
require "../../dao/CategoriaDao.php";

require "../../model/imagemCurso.php";
require "../../dao/ImagemCursoDao.php";

require "../../model/textoCurso.php";
require "../../dao/TextoCursoDao.php";

$curso = new curso();
$categoria = new categoria();
$imagemcurso = new imagemCurso();
$textocurso = new textoCurso();

switch ($_POST['acao']){

    case 'INSERIR';
        $curso->setId($_POST['id']);
        $curso->setNome($_POST['nome']);
        $curso->setVideo($_POST['video']);
        $curso->setObjetivo($_POST['objetivo']);
        $curso->setCargaHoraria($_POST['cargahoraria']);
        $curso->setDisciplina($_POST['disciplina']);
        $curso->setPeriodo($_POST['periodo']);
        $curso->setModalidade($_POST['modalidade']);
        $curso->setCategoria($_POST['idCategoria']);
        $curso->setTexto($_POST['idTexto']);
        $curso->setImagem($_POST['idImagem']);

        $categoria->setId($_POST['id']);
        $categoria->setDesc($_POST['desc']);

        $imagemcurso->setId($_POST['id']);
        $imagemcurso->setImagem($imagemcurso->salvarImagem(''));

        $textocurso->setId($_POST['id']);
        $textocurso->setTexto($_POST['contTextoCurso']);
      
        try{
            $curso = CursoDao::insert($curso, $categoria, $imagemcurso, $textocurso);
            header('Location: index.php');
        }
        catch (Exception $e){
            header('Location: register.php');
        }
    break;

    case 'ALTERAR';
        try{
            $curso = CursoDao::selectId($_POST['id']);

            $categoria = CategoriaDao::selectId($_POST['id']);

            $imagemcurso = ImagemCursoDao::selectId($_POST['id']);

            $textocurso = TextoCursoDao::selectId($_POST['id']);

            include('register.php');
        }
        catch(Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
    break;

    case 'EXCLUIR';
        try{
            $curso = CursoDao::deleteId($_POST['id']);

            $categoria = CategoriaDao::deleteId($_POST['id']);

            $imagemcurso = ImagemCursoDao::deleteId($_POST['id']);

            $textocurso = TextoCursoDao::deleteId($_POST['id']);

            header('Location: index.php');
        }catch (Exception $e){
            echo "Erro";
        }
    break;

    case 'ATUALIZAR';

        $curso = new curso();
        $categoria = new categoria();
        $imagemcurso = new imagemCurso();
        $textocurso = new textoCurso();

        $curso->setId($_POST['id']);
        $curso->setNome($_POST['nome']);
        $curso->setVideo($_POST['video']);
        $curso->setObjetivo($_POST['objetivo']);
        $curso->setCargaHoraria($_POST['cargahoraria']);
        $curso->setDisciplina($_POST['disciplina']);
        $curso->setPeriodo($_POST['periodo']);
        $curso->setModalidade($_POST['modalidade']);
        $curso->setCategoria($_POST['idCategoria']);
        $curso->setTexto($_POST['idTexto']);
        $curso->setImagem($_POST['idImagem']);

        $categoria->setId($_POST['id']);
        $categoria->setDesc($_POST['desc']);

        $imagemcurso->setId($_POST['id']);
        $imagemcurso->setImagem($imagemcurso->salvarImagem(''));

        $textocurso->setId($_POST['id']);
        $textocurso->setTexto($_POST['contTextoCurso']);


        try{
            $curso = CursoDao::update($curso);

            $categoria = CategoriaDao::update($categoria);

            $imagemcurso = ImagemCursoDao::update($imagemcurso);

            $textocurso = TextoCursoDao::update($textocurso);

            header('Location: index.php');
        }catch(Exception $e){
            echo "Erro";
        }

    function selectCursos(){
        $conexao = Conexao::conectar();
    
        $query = "SELECT COUNT(idCurso) AS 'total' FROM tbcurso";
    
        $stmt = $conexao->prepare($query);
    
        $stmt->execute();
    
        $result = $stmt->fetch();
    
        return $result; 
    }
}


?>