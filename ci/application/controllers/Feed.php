<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/feed.php";

class Feed extends CI_Controller {

	public function index()
	{
		$this->load->view('feed');
	}
	
	public function dashboard(){
		if($this->session->userdata("aluno")){
			$data["nome"] = $this->session->userdata("aluno");
			$data["aula"] = $this->session->userdata("aula");
		    $data["dados"] = $this->session->userdata("post");
		    
		    
			
			$this->load->view("feed",$data);
				$this->session->unset_userdata("aula");
		}else{
			redirect('/home/form','refresh');
		}
	}
	

	
	public function listar (){
			require_once APPPATH."models/post.php";
			$this->load->model('alunodao');
			$aludao = $this->alunodao;
		//	$dados = $aludao->mostrar();
			
			$this->db->where('id');
            $dados = $this->db->get('post');
            print_r($dados);
                 if ($dados->num_rows()>0)
                {
                  return $dados->result();
                }
                  else
                {
                  return false;
                }
	}
	
}
