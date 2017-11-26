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
    
        
        public function auth(){
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/adm.php";
		$this->load->model('admdao');
		$admindao = $this->admdao;
		$admin = $admindao->getUser($email,$senha);
		if(isset($admin)){
			$this->session->set_userdata("adm",$admin->getNome());
			redirect('adm/dashboard/','refresh');			
		}else{
		redirect('/home/form','refresh');
        }
	}
    }
    
?>