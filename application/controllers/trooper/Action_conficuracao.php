<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Action_conficuracao extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
		
	}
	public function index(){
		redirect(site_url('/trooper'));
	}
	
	public function updateUser(){
		print_r($_POST);
	}
}