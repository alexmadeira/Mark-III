<?php class Imagens_model extends CI_Model {
	private $CI;

	public  function __construct(){
        parent::__construct();
		$this->load->database();
		$this->CI =& get_instance();
		$this->CI->load->library('image_lib');
    }
    public function get($where=null){
    	if($where){$this->db->where($where);}
    	$imagens = $this->db->get("akkedis_imagens");
    	return $imagens;
	}
    public function marcaDagua($config = null){
		
        $configuracoes['source_image']		= '';
		$configuracoes['wm_text'] 			= '';
		$configuracoes['wm_type'] 			= 'text';
		$configuracoes['wm_font_path'] 		= '';
		$configuracoes['wm_font_size']		= '20';
		$configuracoes['wm_font_color'] 	= 'FFFFFF';
		$configuracoes['wm_shadow_color'] 	= '000000';

		$configuracoes['wm_vrt_alignment'] 	= 'bottom';
		$configuracoes['wm_hor_alignment'] 	= 'center';
		$configuracoes['wm_padding'] 		= '20';
		

		foreach ($config as $key => $value) {
			 $configuracoes[$key] = $value;
		}
		debug($configuracoes);
		$this->CI->image_lib->initialize($config); 
		return $this->CI->image_lib->watermark();
	}
	
	public function geraMiniaturaImagem($imagem){
			
			$tamanhos = $this->db->get("akkedis_tamanhos_imagens");

			$imagem['new_folder'] = ($imagem['new_folder'])?$imagem['new_folder']:$imagem['folder'];

			$config['source_image']		= $imagem['folder'].$imagem['imagem_nome'];
			$config['image_library'] 	= 'gd2';
			$config['quality']			= '100%';
			$config['create_thumb'] 	= false;
			$config['maintain_ratio'] 	= TRUE;
			
			
			foreach ($tamanhos->result() as $tamanho) {
			
				$config['new_image'] = $imagem['new_folder'].$tamanho->tamanho_imagem_nome.'_'.$imagem['imagem_nome'];
				$config['width']	 = $tamanho->tamanho_imagem_width;
				$config['height']	 = $tamanho->tamanho_imagem_height;

				$this->CI->image_lib->initialize($config);
				$this->CI->image_lib->resize();
			}
			return true;
	}

	public function gravaImagemDB ($imagem){
		if(is_array($imagem)){
			$this->db->insert('akkedis_imagens', $imagem); 
		}
	}

	public function updateImagem($imagem_id,$updateData){
		$this->db->where('imagem_id', $imagem_id);
		$update =  $this->db->update('akkedis_imagens', $updateData); 
		return $update;
    }

	
	public function getImagemByProdutoId($produto_id){
		$imagens = $this->db->get_where("akkedis_imagens",array("imagem_produto_id"=>$produto_id));
		return $imagens;
	}
	
	public function deletaImagemProduto($imagem_id,$folder){
		$imagem 	= $this->get(array("imagem_id"=>$imagem_id))->row();
		$tamanhos 	= $this->db->get("akkedis_tamanhos_imagens");
		
		@unlink($folder.$imagem->imagem_nome);
		foreach ($tamanhos->result() as $tamanho) {
			@unlink($folder.$tamanho->tamanho_imagem_nome."_".$imagem->imagem_nome);
		}

		$this->db->delete('akkedis_imagens', array('imagem_id' => $imagem->imagem_id)); 
	}
}
