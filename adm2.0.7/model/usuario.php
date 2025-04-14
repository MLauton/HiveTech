<?php
    class usuario {
        public $id, $nome, $email, $password, $imagem, $token, $idtelefone;

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

        public function getPassword(){
            return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }
          
        public function getImagem(){
            return $this->imagem;
        }
        public function setImagem($imagem){
            $this->imagem = $imagem;
        }
         
        public function getToken(){
            return $this->token;
        }
        public function setToken($token){
            $this->token = $token;
        }

        public function getTelefone(){
            return $this->idtelefone;
        }
        public function setTelefone($idtelefone){
            $this->idtelefone = $idtelefone;
        }
    
        public function generateToken() {
            //random_bytes(16): Essa parte da função gera 16 bytes de dados aleatórios. O número 16 representa o número de bytes que você deseja gerar. Cada byte pode representar valores de 0 a 255, então 16 bytes fornecem uma boa quantidade de aleatoriedade.
            //bin2hex(...): Essa função converte os dados binários gerados por random_bytes em uma representação hexadecimal. O resultado será uma string composta por caracteres de 0 a 9 e de a a f, onde cada byte é representado por dois caracteres hexadecimais.
            //Saída: um exemplo pode ser '4b5f1e7e8e9a4c4d5e6f8a7b0e1c2d3f'
            return bin2hex(random_bytes(16));
        }
    
        public function salvarImagem($novo_nome) {
            //a foto vem com a extenção $_FILES
            if(empty($_FILES['foto']['size']) != 1){
                //pegar as extensão do arquivo
                if ($novo_nome ==""){
                    //Ciando um nome novo
                    //O hash MD5 produz uma string de 32 caracteres hexadecimais
                    $novo_nome = md5(time()). ".jpg";
                }
                //definindo o diretorio
                $diretorio = "../../img/usuario/";
                //juntando o nome com o diretorio
                $nomeCompleto = $diretorio.$novo_nome;
                //efetuando o upload
                move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
                return $novo_nome;
            }else{
                return $novo_nome;
            }
        }
    
    
    }
?>