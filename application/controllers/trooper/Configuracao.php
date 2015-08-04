<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Configuracao extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Projetos_model","MDProjetos");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
		
	}
	public function index(){
		redirect(site_url('/trooper'));
	}
	public function acesso(){
	
		$data['sessao'] = 'configuracoes';
		$data['sidebar_projeto'] = $this->MDProjetos->getPrjeto();

		$this->load->view('trooper/configuracoes/acesso',$data);
	}
	public function site($projeto_id){

		$data['sessao'] = 'configuracoes';
		$data['sidebar_projeto'] = $this->MDProjetos->getPrjeto();

		$this->load->view('trooper/configuracoes/site',$data);
	}
}