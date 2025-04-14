<?php
    class denuncia {
        public $id, $desc, $idtipo, $idusuario, $idpost;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getDesc(){
            return $this->desc;
        }
        public function setDesc($desc){
            $this->desc = $desc;
        }

        public function getTipo(){
            return $this->idtipo;
        }
        public function setTipo($idtipo){
            $this->idtipo = $idtipo;
        }

        public function getUsuario(){
            return $this->idusuario;
        }
        public function setUsuario($idusuario){
            $this->idusuario = $idusuario;
        }

        public function getPost(){
            return $this->idpost;
        }
        public function setPost($idpost){
            $this->idpost = $idpost;
        }
    }
?>