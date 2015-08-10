<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projetos extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
        $this->load->model("Imagens_model","MDImagem");
		$this->load->model("Agencias_model","MDAgencias");
		$this->load->model("Categorias_model","MDCategoria");
		$this->load->model("Tipos_model","MDTipos");
	    $this->load->model("Projetos_model","MDProjetos");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
		
	}

	public function index(){
		redirect(site_url('/trooper'));
	}

	public function novo(){

		$data['agencias'] 	= $this->MDAgencias->getAgencias();
		$data['categorias'] = $this->MDCategoria->getCategorias();
		$data['tipos'] 		= $this->MDTipos->getTipos();
		$data['arquivos'] 	= $this->MDImagem->get();
		$data['sessao'] 	= 'projetos';
		$data['sidebar_projeto'] = $this->MDProjetos->getPrjeto();

		$this->load->view('trooper/projetos/projeto',$data);
	}
	public function projeto($projeto_id){
		
		$projeto = $this->MDProjetos->getPrjeto(array('projeto_id'=>$projeto_id))->result();
	
		$data['agencias'] 		= $this->MDAgencias->getAgencias();
		$data['categorias'] 	= $this->MDCategoria->getCategorias();
		$data['tipos'] 			= $this->MDTipos->getTipos();
		$data['arquivos'] 		= $this->MDImagem->get();
		$data['arquivos'] 		= $this->MDImagem->get();
		$data['projeto'] 		= $projeto[0];
		$data['projeto_nome'] 	= $projeto[0]->projeto_nome;

		$data['sidebar_projeto'] = $this->MDProjetos->getPrjeto();
		
		$data['sessao'] 	= 'projetos';
	
		$this->load->view('trooper/projetos/projeto',$data);
	}
}