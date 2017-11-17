<?php
    
    class Aluno extends Usuario{
        private $ra, $curso;
        
        public function __construct($ra, $curso){
            $this->ra = $ra;
            $this->curso = $curso;
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
         //METODO CADASTRAR ALUNO
        public function cadastrar(){
            
        }
        //METODO LOGIN *USANDO POLIFORMISMO 
        public function login(){
            
        }
        
        public function getClassName(){
            return "Aluno";
        }
    }
?>