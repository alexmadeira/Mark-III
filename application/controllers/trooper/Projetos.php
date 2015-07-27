<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projetos extends CI_Controller {
	public function index(){
		redirect(site_url('/trooper'));
	}
	public function novo(){
		$this->load->view('trooper/projetos/novo');
	}
	public function projeto($projeto_id){
		$this->load->view('trooper/projetos/projeto');
	}
}