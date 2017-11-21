<?php
    require_once APPPATH."models/formulario.php";
    class AlunoModel extends Usuario implements formulario{
        private $ra, $curso;
        
        public function __construct($ra, $curso){
            $this->ra = $ra;
            $this->curso = $curso;
        }
        
        public function getRa(){
            return $this->ra;
        }
        
        public function getCurso(){
            return $this->curso;
        }
        
        public function toArray(){
            $aux = array();
            $aux["email"] = $this->email;
            $aux["senha"] = $this->senha;
            $aux["nome"] = $this->nome;
            $aux["ra"] = $this->ra;
            $aux["curso"] = $this->curso;
            return $aux;
        }

        public function getClassName(){
            return "aluno";
        }
        
        //METODO AUTH *USANDO POLIFORMISMO 
        public function auth(){
        }
    }
?>