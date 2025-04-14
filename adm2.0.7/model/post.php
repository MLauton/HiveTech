<?php
    class post {
        public $id, $comentario, $idinstituicao, $idusuario;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getComentario(){
            return $this->comentario;
        }
        public function setComentario($comentario){
            $this->comentario = $comentario;
        }

        public function getInstituicao(){
            return $this->idinstituicao;
        }
        public function setInstituicao($idinstituicao){
            $this->idinstituicao = $idinstituicao;
        }

        public function getUsuario(){
            return $this->idusuario;
        }
        public function setUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
    }
?>