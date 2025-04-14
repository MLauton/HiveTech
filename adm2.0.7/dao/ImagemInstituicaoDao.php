<?php
require_once "conexaoDao.php";

class ImagemInstituicaoDao{
    public static function insert($imagem){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbimageminstituicao (nomeImagemInstituicao)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $imagem->getImage());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idImagemInstituicao , nomeImagemInstituicao FROM tbimageminstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbimageminstituicao WHERE idImagemInstituicao  = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbimageminstituicao WHERE idImagemInstituicao  =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($imagem) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbimageminstituicao SET nomeImagemInstituicao = ? WHERE idImagemInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $imagem->getImage());
        $stmt->bindValue(2, $imagem->getId());


        $stmt->execute();
    }
}
