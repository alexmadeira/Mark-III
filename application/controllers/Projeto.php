<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projeto extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Projetos_model","MDProjetos");
	}

	public function index($projeto=null){

		if(!$projeto){redirect('erro/404','refresh');}
		
		$projeto = $this->MDProjetos->getPrjeto(array(),array('projeto_slug' => $projeto));

	    $data['projeto'] = $projeto->result[0];
	    $data['pagina']  = 'projeto';

		$this->load->view('projeto',$data);
	}
}
