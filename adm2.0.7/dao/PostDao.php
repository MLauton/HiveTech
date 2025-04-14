<?php
require_once "conexaoDao.php";

class PostDao{
    public static function insert($post){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbPost (comentarioPost, idusuario, idInstituicao)
        VALUES (?, ?, ?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $post->getNumero());
        $stmt->bindValue(2, $post->getUsuario());
        $stmt->bindValue(3, $post->getInstituicao());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idPost, comentarioPost, tbUsuario.nomeUsuario, tbInstituicao.nomeInstituicao FROM tbPost
                    INNER JOIN tbUsuario ON tbPost.idUsuario = tbUsuario.idUsuario
                        INNER JOIN tbInstituicao ON tbPost.idInstituicao = tbInstituicao.idInstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbPost WHERE idPost = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbPost WHERE idPost =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($post) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbPost SET comentarioPost = ?, idusuario = ?, idInstituicao = ? WHERE idPost = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $post->getNumero());
        $stmt->bindValue(2, $post->getUsuario());
        $stmt->bindValue(3, $post->getInstituicao());
        $stmt->bindValue(4, $post->getId());


        $stmt->execute();
    }
}
