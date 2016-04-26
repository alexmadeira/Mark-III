<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Action_configuracao extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Usuario_model","MDUsuario");
	    $this->load->model("Projetos_model","MDProjetos");
	    $this->load->model("Configuracoes_model","MDConfiguracoes");


	    $this->load->library("Senha");

	    if(!$this->MDLogin->isLogado()){redirect(site_url('trooper/login'), 'refresh');}
	}

	public function index(){
		redirect(site_url('/trooper'));
	}
	
	public function updateUser(){

		$usuarioData['usuario_nome']	= ($this->input->post('usuario_nome'))?$this->input->post('usuario_nome'):$this->session->userdata('usuario_nome');;
		$usuarioData['usuario_email'] 	= ($this->input->post('usuario_email'))?$this->input->post('usuario_email'):$this->session->userdata('usuario_email');		
		if($this->input->post('senha_senha')){$senha = $this->input->post('senha_senha');}
		
		$salt = $this->MDLogin->getSalt($usuarioData)->usuario_salt;
		$this->senha->initialize(array('salt'=>$salt,'senha'=>$senha));

		$usuarioData['usuario_senha'] = $this->senha->get(array("full_encrytp_senha"))->full_encrytp_senha;

		$this->MDUsuario->updateUsuario(NULL,$usuarioData,true);

		redirect(site_url('/trooper/configuracao/acesso'));
	}

	public function sitemapRegerar(){
		
		$siteMap = $this->MDConfiguracoes->gerarSiteMap();

		if($siteMap){
			$this->session->set_userdata('sucesses_mesage',"<strong>Sitemap.xml</strong> regerado com sucesso");
		}else{
			$this->session->set_userdata('erro_mesage',"Erro ao gerar <strong>Sitemap.xml</strong>!");

		}

		if($this->session->userdata('last_session')){
			redirect(site_url('/trooper/'.$this->session->userdata('last_session')));
		}else{
			redirect(site_url('/trooper/'));
		}
	}

	public function sitemapDelete(){
		$siteMap = $this->MDConfiguracoes->deletarSiteMap();

		if($siteMap){
			$this->session->set_userdata('alerta_mesage',"<strong>Sitemap.xml</strong> Deletado com sucesso!");
		}else{
			$this->session->set_userdata('erro_mesage',"Erro ao deletar <strong>Sitemap.xml</strong>!");
		}

		if($this->session->userdata('last_session')){
			redirect(site_url('/trooper/'.$this->session->userdata('last_session')));
		}else{
			redirect(site_url('/trooper/'));
		}
	}
}