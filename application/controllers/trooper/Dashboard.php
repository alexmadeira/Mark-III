<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	
	function __construct(){
	    parent::__construct();

	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Projetos_model","MDProjetos");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}

		$this->data['sidebar_projeto'] = $this->MDProjetos->getPrjeto(NULL,NULL,NULL,array('projeto_ordem','ASC'));
	}
	
	public function index(){
		$this->load->view('trooper/dashboard',$this->data);
	}
}
