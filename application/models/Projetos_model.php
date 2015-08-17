<?php class Projetos_model extends CI_Model {
	private $CI;
	
	public  function __construct(){
        parent::__construct();
		$this->load->database();
		$this->load->model("Imagens_model","MDImagens");
		$this->load->model("Categorias_model","MDCategorias");
		$this->load->model("Tipos_model","MDTipos");
		$this->load->model("Agencias_model","MDAgencias");
		$this->CI =& get_instance();

    }
    
    public function insert($projeto){
    	$insert[0] = $this->db->insert('trooper_projetos',$projeto); 
    	$insert[1] = $this->db->insert_id();
		return $insert;
    }

    public function update($id,$projeto){
		$this->db->where('projeto_id', $id);
		$update = $this->db->update('trooper_projetos',$projeto); 
		return $update;
    }

    public function getPrjeto($where=array(),$like=NULL,$limit=NULL){
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

		$return = $this->db->get("trooper_projetos");
		$dados = $return->result();
		
		foreach ($dados as $key => $value) {
			$logo = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_logo));
			$dados[$key]->projeto_logo_img = $logo->row();

			$backgroundPrincipal = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_background_principal));
			$dados[$key]->projeto_background_principal_img = $backgroundPrincipal->row();

			$projetoPreviewImg = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_preview));
			$dados[$key]->projeto_preview_img = $projetoPreviewImg->row();

			$mobile1 = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_mobile1));
			$dados[$key]->projeto_mobile1_img = $mobile1->row();

			$mobile2 = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_mobile2));
			$dados[$key]->projeto_mobile2_img = $mobile2->row();

			$produto = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_produto));
			$dados[$key]->projeto_produto_img = $produto->row();

			$background = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_background));
			$dados[$key]->projeto_background_img = $background->row();

			$desktop = $this->MDImagens->get(array('arquivo_id'=>$dados[$key]->projeto_desktop));
			$dados[$key]->projeto_desktop_img = $desktop->row();


			$categoria = $this->MDCategorias->getCategorias(array('categoria_id'=>$dados[$key]->projeto_categoria));
			$dados[$key]->projeto_categoria_nome = $categoria->row();

			$tipo = $this->MDTipos->getTipos(array('tipo_id'=>$dados[$key]->projeto_tipo));
			$dados[$key]->projeto_tipo_nome = $tipo->row();

			$agencia = $this->MDAgencias->getAgencias(array('agencia_id'=>$dados[$key]->projeto_agencia));
			$dados[$key]->projeto_agencia_nome = $agencia->row();
		}		

		$return->result = $dados;
		return $return;
    }
}
