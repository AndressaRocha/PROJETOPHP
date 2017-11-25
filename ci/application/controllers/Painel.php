<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

	public function index()
	{
		$this->load->view('adm');
	}
	
	public function dashboard(){
		if($this->session->userdata("adm")){
			$data["nome"] = $this->session->userdata("adm");
			$this->load->view("adm",$data);
		}else{
			redirect('/home/form','refresh');
		}
	}
}
