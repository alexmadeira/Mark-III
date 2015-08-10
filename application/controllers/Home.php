<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Projetos_model","MDProjetos");
	}

	public function index(){
		
		$data['projetos'] = $this->MDProjetos->getPrjeto();

		$this->load->view('home',$data);
	}
}
