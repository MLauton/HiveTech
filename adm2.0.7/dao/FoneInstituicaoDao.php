<?php
require_once "conexaoDao.php";

class FoneInstituicaoDao{
    public static function insert($fone){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbfoneinstituticao (numeroFoneInstituicao)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $fone->getNumero());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idFoneInstituicao, numeroFoneInstituicao FROM tbFoneInstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbFoneInstituicao WHERE idFoneInstituicao = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbFoneInstituicao WHERE idFoneInstituicao =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($fone) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbFoneInstituicao SET numeroFoneInstituicao = ? WHERE idFoneInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $fone->getNumero());
        $stmt->bindValue(2, $fone->getId());


        $stmt->execute();
    }
}
