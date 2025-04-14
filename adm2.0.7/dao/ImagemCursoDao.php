<?php
require_once "conexaoDao.php";

class ImagemCursoDao{
    public static function insert($imagem){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbimagemcurso(nomeImagemCurso)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $imagem->getImage());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idImagemCurso, nomeImagemCurso FROM tbimagemcurso;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbimagemcurso WHERE idImagemCurso  = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbimagemcurso WHERE idImagemCurso  =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($imagem) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbimagemcurso SET nomeImagemCurso = ? WHERE idImagemCurso = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $imagem->getImage());
        $stmt->bindValue(2, $imagem->getId());


        $stmt->execute();
    }
}
