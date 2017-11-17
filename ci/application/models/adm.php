<?php
    
    class Adm extends Usuario{
        private $cpf;
        
        public function __construct($cpf){
            $this->cpf = $cpf;
        }
        
        public function toArray(){
            $aux = array();
            $aux["email"] = $this->email;
            $aux["senha"] = $this->senha;
            $aux["nome"] = $this->nome;
            $aux["cpf"] = $this->cpf;
            return $aux;
        }
        
        //METODO EXCLUIR ALUNO
        public function excluir(){
            
        }
        //METODO LOGIN POLIFORMISMO
        public function login(){
            
        }
    
        public function getClassName(){
            return "Adm";
        }
    }
?>