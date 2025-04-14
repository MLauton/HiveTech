<?php
require_once "conexaoDao.php";

class CategoriaCusoDao{
    public static function insert($cat){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbcategoria (descCategoria)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $cat->getDescricao());

        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idCategoria , descCategoria FROM tbcategoria;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbcategoria WHERE idCategoria  = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbcategoria WHERE idCategoria  =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($cat) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbcategoria SET descCategoria = ?,  WHERE idCategoria  = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $cat->getDescricao());
        $stmt->bindValue(2, $cat->getid());

        $stmt->execute();
    }
}
