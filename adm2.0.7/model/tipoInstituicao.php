<?php
    class tipoInstituicao {
        public $id, $desc;

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
    }
?>