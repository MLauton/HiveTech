<?php
    class instituicao {
        public $id, $nome, $email, $senha, $video, $link, $status, $cnpj, $idimagem, $idfone, $idendereco, $idtipo, $idcurso, $idtexto;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getEmail(){
            return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getVideo(){
            return $this->video;
        }
        public function setVideo($video){
            $this->video = $video;
        }

        public function getLink(){
            return $this->link;
        }
        public function setLink($link){
            $this->link = $link;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }

        public function getCnpj(){
            return $this->cnpj;
        }
        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function getImagem(){
            return $this->idimagem;
        }
        public function setImagem($idimagem){
            $this->idimagem = $idimagem;
        }

        public function getFone(){
            return $this->idfone;
        }
        public function setFone($idfone){
            $this->idfone = $idfone;
        }

        public function getEndereco(){
            return $this->idendereco;
        }
        public function setEndereco($idendereco){
            $this->idendereco = $idendereco;
        }

        public function getTipo(){
            return $this->idtipo;
        }
        public function setTipo($idtipo){
            $this->idtipo = $idtipo;
        }

        public function getCurso(){
            return $this->idcurso;
        }
        public function setCurso($idcurso){
            $this->idcurso = $idcurso;
        }

        public function getTexto(){
            return $this->idtexto;
        }
        public function setTexto($idtexto){
            $this->idtexto = $idtexto;
        }

        public function generateSenha() {
            //random_bytes(16): Essa parte da função gera 16 bytes de dados aleatórios. O número 16 representa o número de bytes que você deseja gerar. Cada byte pode representar valores de 0 a 255, então 16 bytes fornecem uma boa quantidade de aleatoriedade.
            //bin2hex(...): Essa função converte os dados binários gerados por random_bytes em uma representação hexadecimal. O resultado será uma string composta por caracteres de 0 a 9 e de a a f, onde cada byte é representado por dois caracteres hexadecimais.
            //Saída: um exemplo pode ser '4b5f1e7e8e9a4c4d5e6f8a7b0e1c2d3f'
            return bin2hex(random_bytes(8));
        }

          public function salvarVideo($novo_nome) {
            //a foto vem com a extenção $_FILES
            if(empty($_FILES['video']['size']) != 1){
                //pegar as extensão do arquivo
                if ($novo_nome ==""){
                    //Ciando um nome novo
                    //O hash MD5 produz uma string de 32 caracteres hexadecimais
                    $novo_nome = md5(time()). ".mp4";
                }
                //definindo o diretorio
                $diretorio = "../../video/";
                //juntando o nome com o diretorio
                $nomeCompleto = $diretorio.$novo_nome;
                //efetuando o upload
                move_uploaded_file($_FILES['video']['tmp_name'], $nomeCompleto );
                return $novo_nome;
             }else{
              return $novo_nome;
             }
          }
    }
?>