<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Imagens extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
        $this->load->model("Imagens_model","MDImagem");
	    $this->load->model("Projetos_model","MDProjetos");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
		
	}
	
	public function index(){

		$data['arquivos'] 	= $this->MDImagem->get();
		$data['sessao'] 	= 'configuracoes';
		$data['sidebar_projeto'] = $this->MDProjetos->getPrjeto(NULL,NULL,NULL,array('projeto_ordem','ASC'));

		$this->load->view('trooper/imagens/imagens',$data);
	}
}