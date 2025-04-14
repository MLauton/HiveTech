<?php
    class favoritos {
        public $id, $status, $idusuario, $idinstituicao;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getStatus(){
            return $this->status;
        }
        public function setStatus($status){
            $this->status = $status;
        }
        
        public function getUsuario(){
            return $this->idusuario;
        }
        public function setUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        
        public function getInstituicao(){
            return $this->idinstituicao;
        }
        public function setInstituicao($idinstituicao){
            $this->idinstituicao = $idinstituicao;
        }
    }
?>