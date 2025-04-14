<?php
    class categoria {
        public $id, $desc;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getdescricao(){
            return $this->desc;
        }
        public function setdescricao($desc){
            $this->desc = $desc;
        }
    }
?>