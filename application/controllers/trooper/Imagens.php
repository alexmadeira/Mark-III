<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Imagens extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
		
	}
	
	public function index(){
		$this->load->view('trooper/imagens/imagens');
	}
}
