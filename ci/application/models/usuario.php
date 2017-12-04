<?php
    require_once APPPATH."models/formulario.php";
    abstract class Usuario implements formulario{
        
        private $id, $nome, $email, $senha;
        
        public function __construct($id, $nome,$email, $senha){
        
            $this->id = $id;
            $this->nome = $nome;
            $this->email= $email;
            $this->senha = $senha;
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
     public function auth(){
         
     }
        
    }
?>