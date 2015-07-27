<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Configuracao extends CI_Controller {
	public function index(){
		redirect(site_url('/trooper'));
	}
	public function acesso(){
		$this->load->view('trooper/configuracoes/acesso');
	}
	public function site($projeto_id){
		$this->load->view('trooper/configuracoes/site');
	}
}