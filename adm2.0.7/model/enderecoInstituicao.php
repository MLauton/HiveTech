<?php
    class enderecoInstituicao{
        public $id, $logradouro, $numero, $cep, $bairro, $cidade, $estado;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getLogradouro(){
            return $this->logradouro;
        }
        public function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }

        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getCep(){
            return $this->cep;
        }
        public function setCep($cep){
            $this->cep = $cep;
        }

        public function getBairro(){
            return $this->bairro;
        }
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }

        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }

        public function getEstado(){
            return $this->estado;
        }
        public function setEstado($estado){
            $this->estado = $estado;
        }
    }
?>