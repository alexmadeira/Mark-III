<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracao extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Projetos_model","MDProjetos");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}

		$this->data['sessao'] = 'configuracoes';
		$this->data['sidebar_projeto'] = $this->MDProjetos->getPrjeto(NULL,NULL,NULL,array('projeto_ordem','ASC'));


		
	}
	public function index(){
		redirect(site_url('/trooper'));
	}
	public function acesso(){
		$this->session->set_userdata('last_session', 'configuracao/acesso');

		$this->load->view('trooper/configuracoes/acesso',$this->data);
	}
	public function site($projeto_id){
		$this->session->set_userdata('last_session', 'configuracao/site');

		$this->load->view('trooper/configuracoes/site',$this->data);
	}
	public function sitemap(){
		$this->session->set_userdata('last_session', 'configuracao/sitemap');

		$this->load->view('trooper/configuracoes/sitemap',$this->data);
	}
}

