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
		$data['sessao'] = 'projetos';

		$this->load->view('trooper/projetos/novo',$data);
	}
	public function projeto($projeto_id){
	
		$data['agencias'] 	= $this->MDAgencias->getAgencias();
		$data['categorias'] = $this->MDCategoria->getCategorias();
		$data['arquivos'] 	= $this->MDImagem->get();
		$data['sessao'] = 'projetos';
	
		$this->load->view('trooper/projetos/projeto',$data);
	}
}