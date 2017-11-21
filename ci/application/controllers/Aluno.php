<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/usuario.php";
class Aluno extends CI_Controller {

	public function form(){
		$this->load->view("home");
	}
	
	public function sair(){
		$this->session->unset_userdata("aluno");
		redirect('/aluno/form','refresh');
	}
	
     //METODO CADASTRAR ALUNO
    public function cadastrar(){
		$nome = $this->input->post("nome");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		$ra = $this->input->post("ra");
		$curso = $this->input->post("curso");
		require_once APPPATH."models/aluno.php";
		$alu = new AlunoModel($ra,$curso,$nome,$email,$senha);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$alunodao = $this->insertdao;
		$alunodao->insert($alu);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('/home/','refresh');
        
    }
}
