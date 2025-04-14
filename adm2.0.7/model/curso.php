<?php
    class curso{
        public $id, $nome, $video, $cargaHoraria, $disciplina, $periodo, $modalidade, $idcategoria, $idimagem, $idTexto;

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

        public function getVideo(){
            return $this->video;
        }
        public function setVideo($video){
            $this->video = $video;
        }

        public function getCargaHoraria(){
            return $this->id;
        }
        public function setCargaHoraria($cargaHoraria){
            $this->cargaHoraria = $cargaHoraria;
        }

        public function getDisciplina(){
            return $this->disciplina;
        }
        public function setDisciplina($disciplina){
            $this->disciplina = $disciplina;
        }

        public function getPeriodo(){
            return $this->periodo;
        }
        public function setPeriodo($periodo){
            $this->periodo = $periodo;

        }

        public function getModalidade(){
            return $this->modalidade;
        }
        public function setModalidade($modalidade){
            $this->modalidade = $modalidade;
        }

        public function getCategoria(){
            return $this->idcategoria;
        }
        public function setCategoria($idcategoria){
            $this->idcategoria = $idcategoria;
        }
 
        public function getImage(){
            return $this->idimagem;
        }
        public function setImage($idimagem){
            $this->idimagem = $idimagem;
        }
        
        public function getTexto(){
            return $this->idTexto;
        }
        public function setTexto($idTexto){
            $this->idTexto = $idTexto;
        }


    }






?>