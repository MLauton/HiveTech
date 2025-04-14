<?php
require_once "conexaoDao.php";

class TextoCursoDao{
    public static function insert($texto){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbtextocurso (contTexto)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $texto->getTexto());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idTextoCurso , contTexto FROM tbtextocurso;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbtextocurso WHERE idTextoCurso  = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbtextocurso WHERE idTextoCurso  =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($texto) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbtextocurso SET contTexto = ? WHERE idTextoCurso = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $texto->getTexto());
        $stmt->bindValue(2, $texto->getId());


        $stmt->execute();
    }
}
