<?php
require_once "conexaoDao.php";

class UsuarioDao{
    public static function insert($usuario){

        $conexao = Conexao::conectar();

         // Verificar se o e-mail já está cadastrado (opcional, mas recomendado)
         $queryCheckEmail = "SELECT COUNT(*) FROM tbusuario WHERE emailusuario = ?";
         $stmtCheckEmail = $conexao->prepare($queryCheckEmail);
         $stmtCheckEmail->bindValue(1, $usuario->getEmail());
         $stmtCheckEmail->execute();
 
         if ($stmtCheckEmail->fetchColumn() > 0) {
             throw new Exception("E-mail já cadastrado.");
         }

        $query = "INSERT INTO tbusuario (nomeUsuario, emailUsuario, senhaUsuario, cpfUsuario, imagemUsuario, TokenUsuario, bloquearUsuario ,idTelefoneUsuario) 
        VALUES (?,?,?,?,?,?,?,?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $usuario->getNome());
        $stmt->bindValue(2, $usuario->getEmail());
        $stmt->bindValue(3, $usuario->getPassword());
        $stmt->bindValue(4, $usuario->getCpf());
        $stmt->bindValue(5, $usuario->getImagem());
        $stmt->bindValue(6, $usuario->getToken());
        $stmt->bindValue(7, $usuario->getBloquear());
        $stmt->bindValue(8, $usuario->getTelefone());

        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idusuario, nomeUsuario, emailUsuario, senhaUsuario, cpfUsuario, imagemUsuario, TokenUsuario, bloquearUsuario,tbtelefoneusuario.numeroTelefoneUsuario FROM tbusuario
                    INNER JOIN tbtelefoneusuario ON tbusuario.idTelefoneUsuario = tbtelefoneusuario.idTelefoneUsuario;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbusuario WHERE idusuario = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbusuario WHERE idusuario =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($usuario) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbusuario SET nomeUsuario = ?, emailUsuario = ?, senhaUsuario = ?, cpfUsuario = ?, imagemUsuario = ?, TokenUsuario = ?, bloquearUsuario = ?,idTelefoneUsuario = ?,  WHERE idusuario = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $usuario->getNome());
        $stmt->bindValue(2, $usuario->getEmail());
        $stmt->bindValue(3, $usuario->getPassword());
        $stmt->bindValue(4, $usuario->getCpf());
        $stmt->bindValue(5, $usuario->getImagem());
        $stmt->bindValue(6, $usuario->getToken());
        $stmt->bindValue(7, $usuario->getBloquear());
        $stmt->bindValue(8, $usuario->getTelefone());
        $stmt->bindValue(9, $usuario->getId());

        $stmt->execute();
    }
}
