<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	
	function __construct(){
	    parent::__construct();

	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Projetos_model","MDProjetos");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
	}
	
	public function index(){
		$data['sidebar_projeto'] = $this->MDProjetos->getPrjeto();
		$this->load->view('trooper/dashboard',$data);
	}
}
