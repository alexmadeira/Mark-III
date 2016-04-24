<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Action_configuracao extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->model("Usuario_model","MDUsuario");
	    $this->load->model("Projetos_model","MDProjetos");

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

		$projetos = $this->MDProjetos->getPrjeto();

		//ARQUIVO
		$arquivo = "./contato.xml";

		//ABRE O ARQUIVO(SE NÃOEXISTIR, CRIA)
		$ponteiro = fopen($arquivo, "w");

		//ESCREVE NO ARQUIVO XML

		$header = '<?xml version="1.0" encoding="UTF-8"?> <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"> <url> <loc>http://www.alexmadeira.com.br/</loc> <changefreq>monthly</changefreq> </url>'; 
		fwrite($ponteiro, $header);

		foreach ($projetos->result() as $projeto){

			//MONTA AS TAGS DO XML
			$conteudo = "<url>";
				$conteudo .= "<loc>http://www.alexmadeira.com.br/projeto/".$projeto->projeto_slug.".html</loc>";
				$conteudo .= "<changefreq>monthly</changefreq>";
			$conteudo .= "</url>";

		 	//ESCREVE NO ARQUIVO
		 	fwrite($ponteiro, $conteudo);
		}//FECHA FOR

		//FECHA A TAG AGENDA
		fwrite($ponteiro, "</urlset>");

		//FECHA O ARQUIVO
		fclose($ponteiro);

	}
}