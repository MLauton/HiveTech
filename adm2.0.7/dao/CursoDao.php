<?php
require_once "conexaoDao.php";

class CursoDao{
    public static function insert($curso){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbCurso (nomeCurso, videoCurso, cargaHorariaCurso, disciplinaCurso, periodoCurso, modalidadeCurso, idCategoria idImagemCurso, idTextoCurso)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $curso->getNome());
        $stmt->bindValue(2, $curso->getVideo());
        $stmt->bindValue(3, $curso->getCargahoraria());
        $stmt->bindValue(4, $curso->getDisciplina());
        $stmt->bindValue(5, $curso->getPeriodo());
        $stmt->bindValue(6, $curso->getModalidade());
        $stmt->bindValue(7, $curso->getCategoria());
        $stmt->bindValue(8, $curso->getImagem());
        $stmt->bindValue(9,$curso->getTexto());

        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idCurso, nomeCurso, videoCurso, cargaHorariaCurso, disciplinaCurso, periodoCurso,modalidadeCurso, tbCategoria.descCategoria, tbImagemCurso.nomeImagemCurso, tbTextoCurso.contTexto
            FROM tbcurso INNER JOIN tbcategoria ON tbcurso.idCategoria = tbcategoria.idCategoria INNER JOIN tbimagemcurso ON tbcurso.idImagemCurso = tbImagemCurso.idImagemCurso INNER JOIN tbtextocurso ON tbcurso.idTextoCurso = tbtextocurso.idTextoCurso;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbcurso WHERE idcurso = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbcurso WHERE idcurso =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($curso) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbcurso SET nomeCurso = ?, videoCurso = ?, cargaHorariaCurso = ?, disciplinaCurso = ?, periodoCurso = ?, modalidadeCurso = ?, idCategoria = ?, idImagemCurso = ?, idTextoCurso = ? WHERE idCurso = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $curso->getNome());
        $stmt->bindValue(2, $curso->getVideo());
        $stmt->bindValue(3, $curso->getCargahoraria());
        $stmt->bindValue(4, $curso->getDisciplina());
        $stmt->bindValue(5, $curso->getPeriodo());
        $stmt->bindValue(6, $curso->getModalidade());
        $stmt->bindValue(7, $curso->getCategoria());
        $stmt->bindValue(8, $curso->getImagem());
        $stmt->bindValue(9, $curso->getTexto());
        $stmt->bindValue(10,$curso->getId());

        $stmt->execute();
    }
    public static function selectCursos(){
        $conexao = Conexao::conectar();

        $query = "SELECT COUNT(idCurso) AS 'total' FROM tbcurso";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        $result = $stmt->fetch();

        return $result; // This will return an array like ['total' => 10]
    }
}

