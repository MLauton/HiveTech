<?php
require_once "conexaoDao.php";

class AdmDao {
    public static function insert($admin) {
        $conexao = Conexao::conectar();

        // Verificar se o e-mail já está cadastrado (opcional, mas recomendado)
        $queryCheckEmail = "SELECT COUNT(*) FROM tbadmin WHERE emailAdmin = ?";
        $stmtCheckEmail = $conexao->prepare($queryCheckEmail);
        $stmtCheckEmail->bindValue(1, $admin->getEmail());
        $stmtCheckEmail->execute();

        if ($stmtCheckEmail->fetchColumn() > 0) {
            throw new Exception("E-mail já cadastrado.");
        }

 
        $queryInsert = "INSERT INTO tbadmin (nomeAdmin, cpfAdmin, emailAdmin, senhaAdmin, tokenAdmin, imagemAdmin)
                        VALUES (?, ?, ?, ?, ?, ?)";

        $stmtInsert = $conexao->prepare($queryInsert);

        $stmtInsert->bindValue(1, $admin->getNome());
        $stmtInsert->bindValue(2, $admin->getCpf());
        $stmtInsert->bindValue(3, $admin->getEmail());
        $stmtInsert->bindValue(4, $admin->getPassword());
        $stmtInsert->bindValue(5, $admin->getToken());
        $stmtInsert->bindValue(6, $admin->getImagem());

        $stmtInsert->execute();
    }

    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query = "SELECT idAdmin, nomeAdmin, cpfAdmin, emailAdmin, senhaAdmin, tokenAdmin, imagemAdmin FROM tbadmin;";

        $stmt = $conexao->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function selectId($id) {
        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbadmin WHERE idAdmin = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query = "DELETE FROM tbadmin WHERE idAdmin = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

    public static function update($adm) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbadmin SET nomeAdmin = ?, cpfAdmin = ?, emailAdmin = ?, imagemAdmin = ?, senhaAdmin = ? WHERE idAdmin = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $adm->getNome());
        $stmt->bindValue(2, $adm->getCpf());
        $stmt->bindValue(3, $adm->getEmail());
        $stmt->bindValue(4, $adm->getImagem());
        $stmt->bindValue(5, $adm->getPassword()); 
        $stmt->bindValue(6, $adm->getId());

        $stmt->execute();
    }
}