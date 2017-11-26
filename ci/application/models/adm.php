<?php

require_once APPPATH."models/usuario.php";
    class AdmModel extends Usuario{
        private $ra;
        
         public function __construct($id, $nome, $email, $senha){
            parent:: __construct($id, $nome,$email, $senha);
           
        }
        
        public function toArray(){
            $aux = array();
            $aux["nome"] = $this->getNome();
            $aux["email"] = $this->getEmail();
            $aux["senha"] = $this->getSenha();
            return $aux;
        }
        
        public function getClassName(){
            return "adm";
        }
    }
?>