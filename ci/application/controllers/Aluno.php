<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends CI_Controller {

	public function index()
	{
		$this->load->view('feed');
	}
	
	public function cadastro(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$ra = $this->input->post("ra");
		$curso = $this->input->post("curso");
		require_once APPPATH."models/aluno.php";
		$alu = new AlunoModel(0,$nome,$email,$senha,$ra,$curso);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$insdao = $this->insertdao;
		$insdao->insert($alu);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/login/form','refresh');
	}
}
