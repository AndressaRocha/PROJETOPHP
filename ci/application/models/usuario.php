<?php
    
    abstract class Usuario{
        private $id, $nome, $email, $senha;
        
        public function __construct($id, $nome, $email, $senha){
            $this->id = $id;
            $this->email = $email;
            $this->senha = $senha;
            $this->nome = $nome;
        }
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function getSenha(){
            return $this->senha;
        }
        //METODO LOGIN 
        public function login(){}
        
        public function getClassName(){
            return "usuario";
        }
    }
?>