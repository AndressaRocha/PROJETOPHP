<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."models/usuario.php";
class Adm extends CI_Controller {

	public function index()
	{
		$this->load->view('adm');
	}
	
	public function sair(){
		$this->session->unset_userdata("adm");
		redirect('adm/form','refresh');
	}
	
	public function dashboard(){
		if($this->session->userdata("adm")){
			$data["nome"] = $this->session->userdata("adm");
			$this->load->view("adm",$data);
		}else{
			redirect('dashadm','refresh');
		}
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
	
	 //METODO EXCLUIR ALUNO
        public function excluir(){
            
            
	}
}
