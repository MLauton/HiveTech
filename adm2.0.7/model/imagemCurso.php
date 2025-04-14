<?php
    class imagemCurso {
        public $id, $image;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getImage(){
            return $this->image;
        }
        public function setImage($image){
            $this->image = $image;
        }

        public function salvarImagem($novo_nome) {
            //a foto vem com a extenção $_FILES
            if(empty($_FILES['imagem']['size']) != 1){
                //pegar as extensão do arquivo
                if ($novo_nome ==""){
                    //Ciando um nome novo
                    //O hash MD5 produz uma string de 32 caracteres hexadecimais
                    $novo_nome = md5(time()). ".jpg";
                }
                //definindo o diretorio
                $diretorio = "../../img/";
                //juntando o nome com o diretorio
                $nomeCompleto = $diretorio.$novo_nome;
                //efetuando o upload
                move_uploaded_file($_FILES['imagem']['tmp_name'], $nomeCompleto );
                return $novo_nome;
             }else{
              return $novo_nome;
             }
          }
    }
?>