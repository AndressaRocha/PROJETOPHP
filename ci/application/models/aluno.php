<?php
require_once APPPATH."models/usuario.php";
require_once APPPATH."models/formulario.php";
    class AlunoModel extends Usuario implements formulario{
        private $ra, $curso;
        
        public function __construct($id, $nome, $curso, $ra, $email, $senha){
            parent:: __construct($id, $nome,$email, $senha);
           
            $this->ra = $ra;
            $this->curso = $curso;
        }
         
        public function toArray(){
            $aux = array();
            $aux["nome"] = $this->getNome();
            $aux["curso"] = $this->curso;
            $aux["ra"] = $this->ra;
            $aux["email"] = $this->getEmail();
            $aux["senha"] = $this->getSenha();
            return $aux;
        }

        public function getClassName(){
            return "aluno";
        }
    
	}

?>