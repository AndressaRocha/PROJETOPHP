<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/aluno.php";

class Post extends CI_Controller {

	public function index()
	{
		$this->load->view('post');
	}
	
	//METODO CADASTRAR Aula
    public function cadastrarAula(){
		$titulo = $this->input->post("titulo");
		$disciplina = $this->input->post("disciplina");
		$data = $this->input->post("data");
		$hora = $this->input->post("hora");
		$descricao = $this->input->post("descricao");
		require_once APPPATH."models/post.php";
		$post = new PostModel(0,$titulo,$disciplina,$data,$hora,$descricao);
		$this->load->model('insertdao');
		$insdao = $this->insertdao;
		$insdao->insert($post);
		$this->session->set_userdata("aula","Aula Cadastrada");
		redirect('feed/dashboard','refresh');
    }
}
