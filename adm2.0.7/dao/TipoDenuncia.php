<?php
require_once "conexaoDao.php";

class TipoDenuncia {
    public static function insert($tipo) {

        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbtipodenuncia(descTipoDenuncia) VALUES (?)";

        $stmtInsert = $conexao->prepare($queryInsert);

        $stmtInsert->bindValue(1, $tipo->setDesc());

        $stmtInsert->execute();
    }

    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query = "SELECT idTipoDenuncia, descTipoDenuncia FROM tbtipodenuncia;";

        $stmt = $conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function selectId($id) {
        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbtipodenuncia WHERE idTipoDenuncia = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query = "DELETE FROM tbtipodenuncia WHERE idTipoDenuncia = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public static function update($tipo) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbtipodenuncia SET nomeAdmin = ? WHERE idTipoDenuncia = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $tipo->setDesc());
        $stmt->bindValue(2, $tipo->getId());


        $stmt->execute();
    }
}