<?php
    
    abstract class Usuario{
        private $email, $senha, $nome;
        
        public function __construct($email, $senha, $nome){
            $this->email = $email;
            $this->senha = $senha;
            $this->nome = $nome;
        }
        
        public function toArray(){
            $aux = array();
            $aux["email"] = $this->email;
            $aux["senha"] = $this->senha;
            $aux["nome"] = $this->nome;
            return $aux;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        //METODO LOGIN 
        public function login(){
            
        }
        
        public function getClassName(){
            return "Usuario";
        }
    }
?>