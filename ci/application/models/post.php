<?php
    
    class Post extends Aluno{
        private $titulo, $descricao, $data, $hora, $disciplina;
        
        public function __construct($titulo, $disciplina, $data, $hora, $descricao){
            $this->titulo = $titulo;
            $this->disciplina = $disciplina;
            $this->data = $data;
            $this->hora = $hora;
            $this->descricao = $descricao;
        }
        
        public function toArray(){
            $aux = array();
            $aux["titulo"] = $this->titulo;
            $aux["disciplina"] = $this->disciplina;
            $aux["data"] = $this->data;
            $aux["hora"] = $this->hora;
            $aux["descricao"] = $this->descricao;
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