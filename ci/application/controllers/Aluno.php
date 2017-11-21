<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	public function form(){
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->library('session');
		$this->load->view("cadastrousuario",$data);
		$this->session->unset_userdata("msg");
	}
	
     //METODO CADASTRAR ALUNO
    public function cadastrar(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/aluno.php";
		$alu = new AlunoModel(0,$nome,$email,$senha);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$alunodao = $this->insertdao;
		$alunodao->insert($alu);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/home/','refresh');
        
    }
}
}
