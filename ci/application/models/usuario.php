<?php
    require_once APPPATH."models/formulario.php";
    abstract class Usuario implements formulario{
        
        public $id, $nome, $email, $senha;
        
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
        
    }
?>