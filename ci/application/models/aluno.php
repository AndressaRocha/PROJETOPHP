<?php
require_once APPPATH."models/usuario.php";
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
        
        public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/aluno.php";
		$this->load->model('alunodao');
		$aludao = $this->alunodao;
		$aluno = $aludao->getUser($email,$senha);
		if(isset($aluno)){
			$this->session->set_userdata("aluno",$aluno->getNome());
			redirect('feed/dashboard/','refresh');			
		}else{
		redirect('/home/form','refresh');
        }
	}
    }
?>