<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projeto extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Projetos_model","MDProjetos");
	}

	public function index($projeto=null){

		if(!$projeto){redirect('erro/404','refresh');}
		
		$projeto = $this->MDProjetos->getPrjeto(array(),array('projeto_slug' => $projeto))->result[0];
		$projeto_relacionados = $this->MDProjetos->getPrjeto(array('projeto_id !=' => $projeto->projeto_id),null,array(0,2),array('projeto_id','random'));

	    $data['projeto_relacionados'] = $projeto_relacionados;
	    $data['projeto'] = $projeto;
	    $data['pagina']  = 'projeto';

	   	$data['titulo'] 	= $projeto->projeto_nome.' - '.$projeto->projeto_slogan;
		$data['url']	 	= site_url('projeto/'.$projeto->projeto_slug);
		$data['imagem'] 	= base_url('/public/upload/'.$projeto->projeto_preview_img->arquivo_arquivo);
		$data['descricao'] 	= $projeto->projeto_descricao;

		$this->load->view('projeto',$data);
	}
}
