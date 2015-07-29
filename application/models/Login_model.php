<?php class Login_model extends CI_Model {
	
	var $CI;
    
	function __construct(){
        parent::__construct();
		$this->load->database();
		$this->CI =& get_instance();
		$this->CI->load->model("usuario_model","MDUsuario");
    }
    
    function get($usuarioData){
    	$this->db->where($usuarioData);
    	$this->db->where(array("usuario_status"=>1));
		$return = $this->db->get("trooper_usuarios");

		return $return;
	}
	
	function getSalt($usuarioData){
    	$this->db->where($usuarioData);
		$this->db->select("usuario_salt");
		$return = $this->db->get("trooper_usuarios")->row();
		return $return;
	}
	
	function logar($usuario){

		$this->CI->session->unset_userdata('usuario_nome');
		$this->CI->session->unset_userdata('usuario_email');
		$this->CI->session->unset_userdata('usuario_id');
		$this->CI->session->unset_userdata('erro');
					
		$this->CI->session->set_userdata('usuario_nome', $usuario->usuario_nome);
		$this->CI->session->set_userdata('usuario_email', $usuario->usuario_email);
		$this->CI->session->set_userdata('usuario_id', $usuario->usuario_id); 
	}
	
	function isLogado(){
		$usuario = '';
		if($this->CI->session->userdata('usuario_id')){
			$usuario = true;
		}else{
			$usuario = false;
		}
		return $usuario;
	}

	function desLogar(){
		$this->CI->session->unset_userdata('usuario_nome');
		$this->CI->session->unset_userdata('usuario_email');
		$this->CI->session->unset_userdata('usuario_master');
		$this->CI->session->unset_userdata('usuario_id');
	}

}