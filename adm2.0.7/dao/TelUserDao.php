<?php
require_once "conexaoDao.php";

class TelUserDao{
    public static function insert($Tel){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbtelefoneusuario (numeroTelefoneUsuario)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $Tel->getNumero());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idTelInstituicao, numeroTelInstituicao FROM tbTelInstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbTelInstituicao WHERE idTelInstituicao = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbTelInstituicao WHERE idTelInstituicao =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($Tel) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbTelInstituicao SET numeroTelInstituicao = ? WHERE idTelInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $Tel->getNumero());
        $stmt->bindValue(2, $Tel->getId());


        $stmt->execute();
    }
}
