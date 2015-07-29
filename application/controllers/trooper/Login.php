<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
	    $this->load->model("Login_model","MDLogin");
	    $this->load->library("Senha");
    }

	public function index(){
	    if($this->MDLogin->isLogado()){redirect(site_url('trooper'), 'refresh');}
		$this->load->view('trooper/login');
	}

	public function logar(){
	
		$data['usuario_email']  = $this->input->post("login_usuario");

		$config['senha'] = $this->input->post('login_senha');
		$config['salt'] = $this->MDLogin->getSalt($data)->usuario_salt;

		$this->senha->initialize($config);
		$senha = $this->senha->get(array("full_encrytp_senha"));
		
		$data['usuario_senha'] 	= $senha->full_encrytp_senha;
		
		$usuario = $this->MDLogin->get($data);		
		
		print_r($usuario->num_rows());
		if($usuario->num_rows()>=1){
			$this->MDLogin->logar($usuario->row());
			redirect('trooper/', 'refresh');

		}else{
			redirect('trooper/login', 'refresh');
		}
		redirect('trooper/login', 'refresh');
	}

	public function logoff(){
		$this->MDLogin->desLogar();
		redirect('trooper/', 'refresh');
	}
}
