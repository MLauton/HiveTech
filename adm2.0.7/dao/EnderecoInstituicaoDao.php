<?php
require_once "conexaoDao.php";

class EnderecoInstituicaoDao{
    public static function insert($endereco){

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbenderecoinstituicao (logradouroEnderecoInstituicao, numeroEnderecoInstituicao, cepEnderecoInstituicao, bairroEnderecoInstituicao, cidadeEnderecoInstituicao, estadoEnderecoInstituicao, complementoEnderecoInstituicao)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $endereco->getLogradouro());
        $stmt->bindValue(2, $endereco->getNumero());
        $stmt->bindValue(3, $endereco->getCep());
        $stmt->bindValue(4, $endereco->getBairro());
        $stmt->bindValue(5, $endereco->getCidade());
        $stmt->bindValue(6, $endereco->getEstado());
        $stmt->bindValue(7, $endereco->getComplemento());

        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idEnderecoInstituicao, logradouroEnderecoInstituicao, numeroEnderecoInstituicao, cepEnderecoInstituicao, bairroEnderecoInstituicao, cidadeEnderecoInstituicao, estadoEnderecoInstituicao, complementoEnderecoInstituicao FROM tbenderecoInstituicao;";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbEnderecoInstituicao WHERE idEnderecoInstituicao = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbEnderecoInstituicao WHERE idEnderecoInstituicao =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($endereco) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbEnderecoInstituicao SET logradouroEnderecoInstituicao = ?, numeroEnderecoInstituicao = ?, cepEnderecoInstituicao = ?, bairroEnderecoInstituicao = ?, cidadeEnderecoInstituicao = ?, estadoEnderecoInstituicao = ?, complementoEnderecoInstituicao = ? WHERE idEnderecoInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $endereco->getLogradouro());
        $stmt->bindValue(2, $endereco->getNumero());
        $stmt->bindValue(3, $endereco->getCep());
        $stmt->bindValue(4, $endereco->getBairro());
        $stmt->bindValue(5, $endereco->getCidade());
        $stmt->bindValue(6, $endereco->getEstado());
        $stmt->bindValue(7, $endereco->getComplemento());
        $stmt->bindValue(8, $endereco->getId());


        $stmt->execute();
    }
}
