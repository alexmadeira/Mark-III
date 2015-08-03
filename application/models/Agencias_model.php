<?php class Agencias_model extends CI_Model {
	
	private $CI;
	
	public  function __construct(){
        parent::__construct();
		$this->load->database();
		$this->CI =& get_instance();
    }
    
    
    public function getAgencias($where=array(),$like=NULL,$limit=NULL){

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

		$return = $this->db->get("trooper_agencias");
		$dados = $return->result();
		$return->result = $dados;
		return $return;
    }
}
