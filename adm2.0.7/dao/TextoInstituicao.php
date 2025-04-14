<?php
require_once "conexaoDao.php";

class TextoInstituicao{
    public static function insert($texto){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbtextoinstituicao (contTextoInstituicao)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $texto->getTexto());

        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idTextoInstituicao, contTextoInstituicao FROM tbtextoinstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbtextoinstituicao WHERE idTextoInstituicao = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbtextoinstituicao WHERE idTextoInstituicao =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($texto) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbtextoinstituicao SET contTextoInstituicao = ?,  WHERE idTextoInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $texto->getTexto());
        $stmt->bindValue(2, $texto->getId());

        $stmt->execute();
    }
}
