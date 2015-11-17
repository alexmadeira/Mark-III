<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Projetos_model","MDProjetos");
	}

	public function index(){
		
		$data['projetos'] = $this->MDProjetos->getPrjeto(NULL,NULL,NULL,array('projeto_ordem','RANDOM'));

		$data['titulo'] 	= 'Web Solution Developer & SEO analyst';
		$data['url']	 	= site_url();
		$data['imagem'] 	= base_url('public/img/alex-madeira-facebook.jpg');
		$data['descricao'] 	= 'Desnvolvimento de sites e analise de SEO/SEM';

		$this->load->view('home',$data);
	}
}
