<?php
require_once "conexaoDao.php";

class Denuncia {
    public static function insert($denuncia) {

        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbdenuncia (descDenuncia, idTipoDenuncia, idUsuario, idPost) VALUES (?,?,?,?)";

        $stmtInsert = $conexao->prepare($queryInsert);

        $stmtInsert->bindValue(1, $denuncia->setDesc());
        $stmtInsert->bindValue(2, $denuncia->setTipo());
        $stmtInsert->bindValue(3, $denuncia->setUsuario());
        $stmtInsert->bindValue(4, $denuncia->setPost());

        $stmtInsert->execute();
    }

    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query = "SELECT idDenuncia, descDenuncia, tbtipodenuncia.descTipoDenuncia, tbusuario.nomeUsuario,tbusuario.emailUsuario,tbusuario.imagemUsuario, tbpost.comentarioPost FROM tbdenuncia INNER JOIN tbtipodenuncia ON tbdenuncia.idTipoDenuncia = tbtipodenuncia.idTipoDenuncia INNER JOIN tbusuario ON tbdenuncia.idUsuario = tbusuario.idUsuario INNER JOIN tbpost ON tbdenuncia.idPost = tbpost.idPost;";

        $stmt = $conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function selectId($id) {
        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbdenuncia WHERE idDenuncia = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query = "DELETE FROM tbdenuncia WHERE idDenuncia = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public static function update($denuncia) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbdenuncia SET descDenuncia = ? WHERE idDenuncia = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $denuncia->setDesc());
        $stmt->bindValue(2, $denuncia->getId());


        $stmt->execute();
    }
}