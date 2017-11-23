<?php
require_once APPPATH."models/formulario.php";
    class PostModel implements formulario{
        private $id, $titulo, $disciplina, $data, $hora, $descricao ;
        
        //Passando os parametros privados 
        public function __construct($id, $titulo, $disciplina, $data, $hora, $descricao){
            $this->id = $id;
            $this->titulo = $titulo;
            $this->disciplina = $disciplina;
            $this->data = $data;
            $this->hora = $hora;
            $this->descricao = $descricao;
        }
        public function getId(){
            return $this->id;
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
        
        public function toArray(){
            $aux = array();
            $aux["titulo"] = $this->titulo;
            $aux["disciplina"] = $this->disciplina;
            $aux["data"] = $this->data;
            $aux["hora"] = $this->hora;
            $aux["descricao"] = $this->descricao;
            return $aux;
        }
        
        public function getClassName(){
            return "post"; //Nome da tabela do banco
        }
        
    }
?>