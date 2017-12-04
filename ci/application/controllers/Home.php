<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	 
	public function index()
	{
		$this->load->view('home');
	}
	
	//MOSTRAR A MENSAGEM DE CADASTRADO
	public function form(){
		$data = array();
		$data["msg"] = $this->session->userdata("msg");
		$this->load->view("home",$data);
		$this->session->unset_userdata("msg");
	}
}
