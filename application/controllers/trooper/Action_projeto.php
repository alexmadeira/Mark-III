<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Action_projeto extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
	}
	
	public function index(){
		redirect(site_url('trooper'), 'refresh');
	}
	
	public function imagen_upload(){
		
		$config['upload_path'] = './public/upload/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload');
		debug($_FILES);


		foreach($_FILES as $key => $value){
			if(empty($key['file']['name'])){
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('file')){
					$error['error'] = $this->upload->display_errors();
					debug($error);
				}else{
					$data[$key] = array('upload_data' => $this->upload->data());
					debug($data[$key]);
				}
			}
		}    



		/*

		foreach($_FILES['file'] as $key => $value){
			if(empty($key['name'])){
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('file')){
					$error['error'] = $this->upload->display_errors();
					debug($error);
				}else{
					$data[$key] = array('upload_data' => $this->upload->data());
					debug($data[$key]);
				}
			}
		}    


		*/


	}
}
