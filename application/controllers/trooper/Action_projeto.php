<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Action_projeto extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Imagens_model","MDImagem");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
	}
	
	public function index(){
		redirect(site_url('trooper'), 'refresh');
	}
	
	public function imagen_upload(){
		
		$config['upload_path'] = './public/upload/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload');

		foreach($_FILES as $key => $value){
			if(empty($key['file']['name'])){
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('file')){
					$error['error'] = $this->upload->display_errors();
					debug($error);
				}else{
					$data[$key] = array('upload_data' => $this->upload->data());
					
					$arquivo['arquivo_nome'] 	= imagemNameConvert($data[$key]['upload_data']['file_name']);
					$arquivo['arquivo_tipo'] 	= 1;
					$arquivo['arquivo_arquivo'] = $data[$key]['upload_data']['file_name'];

					$this->MDImagem->gravaImagemDB($arquivo);
				}
			}
		}    
	}
}
