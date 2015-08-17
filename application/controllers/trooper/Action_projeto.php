<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Action_projeto extends CI_Controller {
	
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Imagens_model","MDImagem");
	    $this->load->model("Projetos_model","MDProjeto");
	   
	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
	}
	
	public function index(){
		redirect(site_url('trooper'), 'refresh');
	}
	
	public function gravaProjeto(){

		$projeto['projeto_nome'] 		= $this->input->post('projeto_nome');
		$projeto['projeto_slogan'] 		= $this->input->post('projeto_slogan');
		$projeto['projeto_slug'] 		= slug($this->input->post('projeto_nome'));
		$projeto['projeto_categoria'] 	= $this->input->post('projeto_categoria');
		$projeto['projeto_agencia'] 	= $this->input->post('projeto_agencia');
		$projeto['projeto_tipo'] 		= $this->input->post('projeto_tipo');
		$projeto['projeto_ano'] 		= $this->input->post('projeto_ano');
		$projeto['projeto_descricao'] 	= $this->input->post('projeto_descricao');

		if($this->input->post('projeto_logo')){$projeto['projeto_logo'] 									= $this->input->post('projeto_logo');}
		if($this->input->post('projeto_background_principal')){$projeto['projeto_background_principal'] 	= $this->input->post('projeto_background_principal');}
		if($this->input->post('projeto_preview')){$projeto['projeto_preview'] 								= $this->input->post('projeto_preview');}
		if($this->input->post('projeto_mobile1')){$projeto['projeto_mobile1'] 								= $this->input->post('projeto_mobile1');}
		if($this->input->post('projeto_mobile2')){$projeto['projeto_mobile2'] 								= $this->input->post('projeto_mobile2');}
		if($this->input->post('projeto_produto')){$projeto['projeto_produto'] 								= $this->input->post('projeto_produto');}
		if($this->input->post('projeto_background')){$projeto['projeto_background'] 						= $this->input->post('projeto_background');}
		if($this->input->post('projeto_desktop')){$projeto['projeto_desktop'] 								= $this->input->post('projeto_desktop');}

		$projetoStatus = $this->MDProjeto->insert($projeto);

		if($projetoStatus[0]){
			redirect('trooper/projetos/'.$projetoStatus[1], 'refresh');
		}
	}

	public function updateProjeto(){

		$projeto_id 					= $this->input->post('projeto_id');
		$projeto['projeto_nome'] 		= $this->input->post('projeto_nome');
		$projeto['projeto_slogan'] 		= $this->input->post('projeto_slogan');
		$projeto['projeto_slug'] 		= slug($this->input->post('projeto_nome'));
		$projeto['projeto_categoria'] 	= $this->input->post('projeto_categoria');
		$projeto['projeto_agencia'] 	= $this->input->post('projeto_agencia');
		$projeto['projeto_tipo'] 		= $this->input->post('projeto_tipo');
		$projeto['projeto_ano'] 		= $this->input->post('projeto_ano');
		$projeto['projeto_descricao'] 	= $this->input->post('projeto_descricao');

		if($this->input->post('projeto_logo')){$projeto['projeto_logo'] 									= $this->input->post('projeto_logo');}
		if($this->input->post('projeto_background_principal')){$projeto['projeto_background_principal'] 	= $this->input->post('projeto_background_principal');}
		if($this->input->post('projeto_preview')){$projeto['projeto_preview'] 								= $this->input->post('projeto_preview');}
		if($this->input->post('projeto_mobile1')){$projeto['projeto_mobile1'] 								= $this->input->post('projeto_mobile1');}
		if($this->input->post('projeto_mobile2')){$projeto['projeto_mobile2'] 								= $this->input->post('projeto_mobile2');}
		if($this->input->post('projeto_produto')){$projeto['projeto_produto'] 								= $this->input->post('projeto_produto');}
		if($this->input->post('projeto_background')){$projeto['projeto_background'] 						= $this->input->post('projeto_background');}
		if($this->input->post('projeto_desktop')){$projeto['projeto_desktop'] 								= $this->input->post('projeto_desktop');}

		$projetoStatus = $this->MDProjeto->update($projeto_id,$projeto);

		if($projetoStatus){
			redirect('trooper/projetos/'.$projeto_id, 'refresh');
		}
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
	public function imagen_delete(){
		
		debug($_POST);    
	}
}
