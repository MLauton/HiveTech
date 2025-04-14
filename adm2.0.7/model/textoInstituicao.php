<?php
    class textoInstituicao {
        public $id, $texto;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getTexto(){
            return $this->texto;
        }
        public function setTexto($texto){
            $this->texto = $texto;
        }
    }
?>