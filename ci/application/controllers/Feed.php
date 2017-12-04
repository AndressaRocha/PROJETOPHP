<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once APPPATH."models/feed.php";
//require_once APPPATH."models/post.php";

class Feed extends CI_Controller {

	public function index()
	{
		$this->load->view('feed');
	}
	
	public function dashboard(){
		if($this->session->userdata("aluno")){
			$data["nome"] = $this->session->userdata("aluno");
			$data["aula"] = $this->session->userdata("aula");
			$this->load->view("feed",$data);
				$this->session->unset_userdata("aula");
		}else{
			redirect('/home/form','refresh');
		}
	}
	

	// Chamada 02/12
	public function post(){
		$data["dados"] = $this->feed->Mostrar();
	    $this->load->view("feed",$data);
	}
	
}
