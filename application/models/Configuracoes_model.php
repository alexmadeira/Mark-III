<?php class Configuracoes_model extends CI_Model {
	
	private $CI;
	
	public  function __construct(){
        parent::__construct();
		$this->load->database();
		$this->load->model("Projetos_model","MDProjetos");
		$this->CI =& get_instance();
		
    }
    
    
    public function gerarSiteMap($projetos=array(),$changefreq = 'monthly',$arquivo = './sitemap.xml'){

    	if(!count($projetos)){ 
    		$projetos = $this->MDProjetos->getPrjeto();
    		$projetos = $projetos->result();
    	}

    	if(!count($projetos)){ return false; }

		$ponteiro = fopen($arquivo, "w");

		$header = "<?xml version='1.0' encoding='UTF-8'?><urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9' xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' xsi:schemaLocation='http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd'>";
		$header .= "<url>";
			$header .= "<loc>".site_url()."</loc>";
			$header .= "<changefreq>".$changefreq."</changefreq>";
		$header .= "</url>";

		fwrite($ponteiro, $header);

		foreach ($projetos as $projeto){
			$conteudo = "<url>";
				$conteudo .= "<loc>".site_url("/projeto/".$projeto->projeto_slug)."</loc>";
				$conteudo .= "<changefreq>".$changefreq."</changefreq>";
			$conteudo .= "</url>";
		 	fwrite($ponteiro, $conteudo);
		}
		
		fwrite($ponteiro, "</urlset>");
		fclose($ponteiro);

		return true;
    }


    public function deletarSiteMap($arquivo = './sitemap.xml'){

    	if(@unlink($arquivo)){
    		return true;
    	}else{
    		return false;
    	}
    }
}
