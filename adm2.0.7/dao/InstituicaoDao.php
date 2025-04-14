<?php
require_once "conexaoDao.php";

class InstituicaoDao{

    /*Metodo feito em um curto periodo de tempo, talvez nao precise de 3 parametros, irei tentar
    de outro jeito outra hora, so que ai o controller muda*/
    public static function insert($instituicao, $endereco, $fone): void{

        $conexao = Conexao::conectar();

        $query = "INSERT INTO tbfoneinstituticao (numeroFoneInstituicao)
        VALUES (?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $fone->getNumero());

        $stmt->execute();

        $idFone = $conexao->lastInsertId();


        $query = "INSERT INTO tbenderecoinstituicao (logradouroEnderecoInstituicao, numeroEnderecoInstituicao, cepEnderecoInstituicao, bairroEnderecoInstituicao, cidadeEnderecoInstituicao, estadoEnderecoInstituicao)
        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $endereco->getLogradouro());
        $stmt->bindValue(2, $endereco->getNumero());
        $stmt->bindValue(3, $endereco->getCep());
        $stmt->bindValue(4, $endereco->getBairro());
        $stmt->bindValue(5, $endereco->getCidade());
        $stmt->bindValue(6, $endereco->getEstado());

        $stmt->execute();

        $idEndereco = $conexao->lastInsertId(); 
        

        $query = "INSERT INTO tbinstituicao (nomeInstituicao, emailInstituicao, senhaInstituicao, videoInstituicao, linkInstitucao, statusInstitucao, cnpjInstituicao, idImagemInstituicao ,idFoneInstituicao, idEnderecoInstituicao, idTipoInstituicao, idCurso, idTextoInstituicao)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $instituicao->getNome());
        $stmt->bindValue(2, $instituicao->getEmail());
        $stmt->bindValue(3, $instituicao->getSenha());
        $stmt->bindValue(4, $instituicao->getVideo());
        $stmt->bindValue(5, $instituicao->getLink());
        $stmt->bindValue(6, $instituicao->getStatus());
        $stmt->bindValue(7, $instituicao->getCnpj());
        $stmt->bindValue(8, $instituicao->getImagem());
        $stmt->bindValue(9, $idFone);
        $stmt->bindValue(10, $idEndereco);
        $stmt->bindValue(11, $instituicao->getTipo());
        $stmt->bindValue(12, $instituicao->getCurso());
        $stmt->bindValue(13, $instituicao->getTexto());


        $stmt->execute();

    }
    public static function selectAll() {
        $conexao = Conexao::conectar();

        $query ="SELECT idInstituicao, nomeInstituicao, emailInstituicao, senhaInstituicao, videoInstituicao, linkInstituicao, statusInstituicao, cnpjInstituicao, tbimageminstituicao.nomeImagemInstituicao, tbfoneinstituticao.numeroFoneInstituicao,
                    tbenderecoInstituicao.logradouroEnderecoInstituicao, tbenderecoInstituicao.numeroEnderecoInstituicao, tbenderecoInstituicao.cepEnderecoInstituicao,
                        tbenderecoInstituicao.bairroEnderecoInstituicao, tbenderecoInstituicao.cidadeEnderecoInstituicao, tbenderecoInstituicao.estadoEnderecoInstituicao, tbtipoinstituicao.descTipoInstituicao, tbcurso.nomeCurso, tbtextoinstituicao.contTextoInstituicao
                            FROM tbinstituicao INNER JOIN tbimageminstituicao ON tbinstituicao.idImagemInstituicao = tbimageminstituicao.idImagemInstituicao
                             INNER JOIN tbfoneinstituticao ON tbinstituicao.idFoneInstituicao = tbfoneinstituticao.idFoneInstituicao
                                INNER JOIN tbEnderecoInstituicao ON tbinstituicao.idEnderecoInstituicao = tbenderecoInstituicao.idEnderecoInstituicao
                                    INNER JOIN tbtipoInstituicao ON tbinstituicao.idTipoInstituicao = tbtipoinstituicao.idTipoInstituicao
                                        INNER JOIN tbcurso ON tbinstituicao.idcurso = tbcurso.idCurso 
                                            INNER JOIN tbtextoinstituicao ON tbinstituicao.idTextoInstituicao = tbtextoinstituicao.idTextoInstituicao";

        $stmt = $conexao->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();   

    }
    public static function selectId($id) {

        $conexao = Conexao::conectar();

        $query = "SELECT * FROM tbInstituicao WHERE idInstituicao = ?";

        $stmt = $conexao->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
 
    }
    public static function deleteId($id) {
        $conexao = Conexao::conectar();

        $query ="DELETE FROM tbInstituicao WHERE idInstituicao =?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
    public static function update($instituicao) {
        $conexao = Conexao::conectar();

        $query = "UPDATE tbinstituicao SET nomeInstituicao = ? , emailInstituicao = ?, senhaInstituicao = ?, videoInstituicao = ?, linkInstituicao = ?, statusInstituicao = ?, cnpjInstituicao = ?, idImagemInstituicao = ? , idFoneInstituicao = ?, idEnderecoInstituicao = ? , idTipoInstituicao = ?,idCurso = ?, idTextoInstituicao = ? WHERE idInstituicao = ?";

        $stmt = $conexao->prepare($query);

        $stmt->bindValue(1, $instituicao->getNome());
        $stmt->bindValue(2, $instituicao->getEmail());
        $stmt->bindValue(3, $instituicao->getSenha());
        $stmt->bindValue(4, $instituicao->getVideo());
        $stmt->bindValue(5, $instituicao->getLink());
        $stmt->bindValue(6, $instituicao->getStatus());
        $stmt->bindValue(7, $instituicao->getCnpj());
        $stmt->bindValue(8, $instituicao->getImagem());
        $stmt->bindValue(9, $idFone);
        $stmt->bindValue(10, $idEndereco);
        $stmt->bindValue(11, $instituicao->getTipo());
        $stmt->bindValue(12, $instituicao->getCurso());
        $stmt->bindValue(13, $instituicao->getTexto());
        $stmt->bindValue(14, $instituicao->getId());


        $stmt->execute();
    }
}
