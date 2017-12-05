<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/usuario.php";
require_once APPPATH."models/aluno.php";
class Aluno extends CI_Controller {

	public function sair(){
		$this->session->unset_userdata("aluno");
		redirect('home/form','refresh');
	}
	
     //METODO CADASTRAR ALUNO
    public function cadastrar(){
		$nome = $this->input->post("nome");
		$curso = $this->input->post("curso");
		$ra = $this->input->post("ra");
		$email = $this->input->post("email");
		$senha = $this->input->post("senha");
		require_once APPPATH."models/aluno.php";
		$alu = new AlunoModel(0,$nome,$curso,$ra,$email,$senha);
		//NAO HA CONSTRUTOR NOS DAO'S
		$this->load->model('insertdao');
		$insdao = $this->insertdao;
		$insdao->insert($alu);
		$this->session->set_userdata("msg","Usuário Cadastrado");
		redirect('home/form','refresh');
        
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
    
	public function excluir(){
		$senha = $this->input->post("senha");
		require_once APPPATH."models/aluno.php";
		$this->load->model('alunodao');
		$aludao = $this->alunodao;
		$aluno = $aludao->getSenha($senha);
		if(isset($aluno)){
			$this->session->unset_userdata("aluno");
			$this->db->row_delete($senha);
        }
	}
	
	public function atualizar(){
		$senha = $this->input->post("senha");
		$email = $this->input->post("email");
		require_once APPPATH."models/aluno.php";
		$this->load->model('alunodao');
		$aludao = $this->alunodao;
		$aluno = $aludao->alterarSenha($email,$senha);
		if(isset($aluno)){
			$this->session->unset_userdata("aluno");
			$this->db->update('senha');
        }
	}
}
