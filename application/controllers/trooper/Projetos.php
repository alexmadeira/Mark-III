<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projetos extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
		
	}

	public function index(){
		redirect(site_url('/trooper'));
	}

	public function novo(){
	
		$data['sessao'] = 'projetos';
	
		$this->load->view('trooper/projetos/novo',$data);
	}
	public function projeto($projeto_id){
	
		$data['sessao'] = 'projetos';
	
		$this->load->view('trooper/projetos/projeto',$data);
	}
}