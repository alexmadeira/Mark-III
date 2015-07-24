<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Projeto extends CI_Controller {
	public function index(){

	    $data['pagina'] = 'projeto';
		$this->load->view('projeto',$data);
	}
}
