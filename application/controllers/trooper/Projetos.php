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
		
		$this->data['sidebar_projeto'] = $this->MDProjetos->getPrjeto(NULL,NULL,NULL,array('projeto_ordem','ASC'));
		$this->data['sessao'] 		 = 'projetos';

	}

	public function index(){
		redirect(site_url('/trooper'));
	}

	public function novo(){
		$this->session->set_userdata('last_session', 'projetos/novo');

		$this->data['agencias'] 	= $this->MDAgencias->getAgencias();
		$this->data['categorias'] = $this->MDCategoria->getCategorias();
		$this->data['tipos'] 		= $this->MDTipos->getTipos();
		$this->data['arquivos'] 	= $this->MDImagem->get();
		$this->data['titulo']		= 'Novo Projeto';
		$this->data['link'] 		= site_url('trooper/action_projeto/gravaProjeto');

		$this->load->view('trooper/projetos/projeto',$this->data);
	}
	public function projeto($projeto_id){
		$this->session->set_userdata('last_session', 'projetos/projeto/'.$projeto_id);
		
		$projeto = $this->MDProjetos->getPrjeto(array('projeto_id'=>$projeto_id))->result();
	
		$this->data['agencias'] 	= $this->MDAgencias->getAgencias();
		$this->data['categorias'] 	= $this->MDCategoria->getCategorias();
		$this->data['tipos'] 		= $this->MDTipos->getTipos();
		$this->data['arquivos'] 	= $this->MDImagem->get();
		$this->data['arquivos'] 	= $this->MDImagem->get();
		$this->data['projeto'] 		= $projeto[0];
		$this->data['titulo']		= $projeto[0]->projeto_nome;
		$this->data['link'] 		= site_url('trooper/action_projeto/updateProjeto');
	
		$this->load->view('trooper/projetos/projeto',$this->data);
	}
}