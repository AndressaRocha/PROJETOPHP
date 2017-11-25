<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feed extends CI_Controller {

	public function index()
	{
		$this->load->view('feed');
	}
	
	public function dashboard(){
		if($this->session->userdata("aluno")){
			$data["nome"] = $this->session->userdata("aluno");
			$this->load->view("feed",$data);
		}else{
			redirect('/home/form','refresh');
		}
	}
}
