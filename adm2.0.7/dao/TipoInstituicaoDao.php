<?php
require_once "conexaoDao.php";

class TipoInstituicaoDao{
    public static function insert($tipo){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbtipoinstituicao (descTipoInstituicao)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $tipo->getDesc());

        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idtipoinstituicao, descTipoInstituicao FROM tbTipoInstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbtipoinstituicao WHERE idTipoInstituicao = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbtipoinstituicao WHERE idTipoInstituicao =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($tipo) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbtipoinstituicao SET descTipoInstituicao = ?,  WHERE idTipoInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $tipo->getDesc());
        $stmt->bindValue(2, $tipo->getId());

        $stmt->execute();
    }
}
