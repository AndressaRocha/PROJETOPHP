<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."models/feed.php";

class Feed extends CI_Controller {

	public function index(){
		$this->load->view('feed');
	}
	
	public function dashboard (){
		if($this->session->userdata("aluno")){
			$data["nome"] = $this->session->userdata("aluno");
			$data["aula"] = $this->session->userdata("aula");
			$data["dados"] = $this->session->userdata("post");
		  //  echo print_r($data);
			$this->session->unset_userdata("aula");
			$this->session->unset_userdata("post");
			
			$this->load->view("feed",$data);
			}
		else{
			redirect('/home/form','refresh');
			}
	}
	

	public function listar(){
	
		
	}
		 }

