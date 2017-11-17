<?php
    
    class Post extends Aluno{
        private $titulo, $descricao, $data, $hora, $disciplina;
        
        public function __construct($titulo, $descricao, $data, $hora, $disciplina){
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->data = $data;
            $this->hora = $hora;
            $this->disciplina = $disciplina;
        }
        
        public function toArray(){
            $aux = array();
            $aux["titulo"] = $this->titulo;
            $aux["descricao"] = $this->descricao;
            $aux["data"] = $this->data;
            $aux["hora"] = $this->hora;
            $aux["disciplina"] = $this->disciplina;
            return $aux;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }
        
        public function getData(){
            return $this->data;
        }
        
        public function getHora(){
            return $this->hora;
        }
        
        public function getDisciplina(){
            return $this->disciplina;
        }
        
        // METODO PUBLICAR NO FEED 
        public function Publicar(){
            
        }
        
        
        public function getClassName(){
            return "Post";
        }
    }
?>