<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {

	public function index() {
		$this->load->view('feed');
	}
	
	public function dashboard() {
		$data = array();
		
		$this->load->model('FeedModel');
		
		if($this->session->userdata("aluno")){
			$data["nome"] = $this->session->userdata("aluno");
			$data["dados"] = $this->session->userdata("post");
			$data["aula"] = $this->session->userdata("aula");
			
			$data["posts"] = $this->FeedModel->getmostrar();
			
			$this->load->view("feed",$data);
		} else{
			redirect('/home/form','refresh');
		}
	}
}
