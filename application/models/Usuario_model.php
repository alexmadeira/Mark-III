<?php class Usuario_model extends CI_Model {
	
	private $CI;
    private $usuario_nome;
	private $usuario_email;
	private $usuario_master;
	private $usuario_id;
	private $usuario_permissoes;
	

	public  function __construct(){
        parent::__construct();
		$this->load->database();
		$this->CI =& get_instance();


		$this->usuario_nome   		= ($this->CI->session->userdata('usuario_nome'))? $this->CI->session->userdata('usuario_nome')				: '';
		$this->usuario_email  		= ($this->CI->session->userdata('usuario_email'))? $this->CI->session->userdata('usuario_email')			: '';
		$this->usuario_id     		= ($this->CI->session->userdata('usuario_id'))? $this->CI->session->userdata('usuario_id')					: '';
    }

    public function getUsuarioLogado($dados = array('usuario_nome','usuario_email','usuario_id')){
    	$return = array();
		if(is_array($dados)){
	    	foreach ($dados as $dado) {
	    		$return[$dado] = $this->$dado;
	    	}
	    }else{
	    	$return[$dados] = $this->$dados;
	    }
		return $return;
	}
	
    public function getUsuarios($where=array("usuario_status"=>1),$like=NULL,$limit=NULL,$notAtual=true){
    	
    	if($notAtual){
    		$this->db->where_not_in("usuario_id",$this->usuario_id);
		}
		
		if($where){$this->db->where($where);}
		
		if($like){
			foreach ($like as $key => $value) {
				switch ($key) {
					case 'like':
							$this->db->like($value);
						break;
					case 'or_like':
							$this->db->or_like($value);
						break;							
					default:
							$this->db->like($like);
						break;
				}
			}
		}

		if($limit){
			if(count($limit)==1){
				$this->db->limit($limit[0]);
			}else{
				$this->db->limit($limit[1],$limit[0]);
			}
		}

		$return = $this->db->get("trooper_usuarios");
		$dados = $return->result();
		$return->result = $dados;
		return $return;
	}

	public function cadastraUsuario($usuario){
		$insert = $this->db->insert('trooper_usuarios',$usuario); 
		return $insert;
    }
	
	public function updateUsuario($usuario_id = NULL,$updateData,$refresh_user = false){
		if(!$usuario_id){$usuario_id = $this->usuario_id;}

		$this->db->where('usuario_id', $usuario_id);
		$update =  $this->db->update('trooper_usuarios', $updateData); 

		if($refresh_user){$this->refreshUsuario();}

		return $update;
    }
	
	private function refreshUsuario(){
		$usuario = $this->getUsuarios(array("usuario_id"=>$this->usuario_id),'','',false)->row();

		$this->CI->session->set_userdata('usuario_nome',$usuario->usuario_nome);
		$this->CI->session->set_userdata('usuario_email',$usuario->usuario_email);
		$this->CI->session->set_userdata('usuario_id',$usuario->usuario_id);
	}
	
}
