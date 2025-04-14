<?php
require_once "conexaoDao.php";

class Favoritos {
    public static function insert($favoritos) {

        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbfavorito (statu, idUsuario, idInstituicao) VALUES (?,?,?)";

        $stmtInsert = $conexao->prepare($queryInsert);

        $stmtInsert->bindValue(1, $favoritos->setDesc());
        $stmtInsert->bindValue(2, $favoritos->setStatus());
        $stmtInsert->bindValue(3, $favoritos->setUsuario());
        $stmtInsert->bindValue(4, $favoritos->setInstituicao());

        $stmtInsert->execute();
    }

    public static function selectId($id) {
        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbfavorito WHERE idFavorito = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query = "DELETE FROM tbfavorito WHERE idFavorito = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public static function update($favoritos) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbfavorito SET statu = ? WHERE idFavorito = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $favoritos->setStatus());
        $stmt->bindValue(2, $favoritos->getId());


        $stmt->execute();
    }
}