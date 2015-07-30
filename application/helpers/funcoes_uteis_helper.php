<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function slug($slug){
		$a = array('á','à','â','ã','ä','Á','À','Â','Ã','Ä','A');
		$e = array('é','è','ê','ë','É','È','Ê','Ë','E','&');
		$i = array('í','ì','î','ï','Í','Ì','Î','Ï','I');
		$o = array('ó','ò','ô','õ','ö','Ó','Ò','Ô','Õ','Ö','O');
		$u = array('ú','ù','û','ü','Ú','Ù','Û','Ü','U');
		$n = array('ñ','Ñ','N');
		$y = array('ý','ÿ','Ý','Y');
		$c = array('ç','Ç','C');
	
		$slug = str_replace($a, "a", $slug);
		$slug = str_replace($e, "e", $slug);
		$slug = str_replace($i, "i", $slug);
		$slug = str_replace($o, "o", $slug);
		$slug = str_replace($u, "u", $slug);
		$slug = str_replace($n, "n", $slug);
		$slug = str_replace($y, "y", $slug);
		$slug = str_replace($c, "c", $slug);
		$slug = str_replace(' ', "-", $slug);
		return $slug;
	}
	function limitar($texto, $numero){
		$fim = '';
		$total = strlen($texto);
		$texto = substr($texto,0,$numero);
		$separar = explode(" ",$texto);
		if($total >= $numero){
			for($i=0; $i< (count($separar)-1); $i++){
				$fim .= $separar[$i]." ";
			}
			$fim .= '...';
		}else{
			$fim = $texto;
		}
		return $fim;
	}	
	
	function getYoutubeid($url){
	   $url = explode('v=',$url);
	   $url = explode('&',$url[1]);
	   return $url[0];
	}	

	function getYoutubeThumb($url, $size = 'small'){
	   $url = getYoutubeid($url);
	   switch ($size) {
	   	case 'small':
	   		$url = 'http://i1.ytimg.com/vi/' . $url. '/default.jpg';
	   		break;
	   	case 'large':
	   		$url = 'http://i4.ytimg.com/vi/'.$url.'/hqdefault.jpg';
	   		break;
	   	
	   	default:
	   		$url = 'http://i1.ytimg.com/vi/' . $url. '/default.jpg';
	   		break;
	   }
	   return $url;
	}	

	function mesFormat($mes,$tipo= 'full'){
		switch ($tipo) {
			case 'full':
					switch ($mes) {
						case 1:$mes = 'Janeiro';break;
						case 2:$mes = 'Fevereiro';break;
						case 3:$mes = 'Março';break;
						case 4:$mes = 'Abril';break;
						case 5:$mes = 'Maio';break;
						case 6:$mes = 'Junho';break;
						case 7:$mes = 'Julho';break;
						case 8:$mes = 'Agosto';break;
						case 9:$mes = 'Setembro';break;
						case 10:$mes = 'Outubro';break;
						case 11:$mes = 'Novembro';break;
						case 12:$mes = 'Dezembro';break;
					}
				break;
			case 'small':
					switch ($mes) {
						case 1:$mes = 'Jan';break;
						case 2:$mes = 'Fev';break;
						case 3:$mes = 'Mar';break;
						case 4:$mes = 'Abr';break;
						case 5:$mes = 'Mai';break;
						case 6:$mes = 'Jun';break;
						case 7:$mes = 'Jul';break;
						case 8:$mes = 'Ago';break;
						case 9:$mes = 'Set';break;
						case 10:$mes = 'Out';break;
						case 11:$mes = 'Nov';break;
						case 12:$mes = 'Dez';break;
					}
				break;
			case 'number':
				break;
			case 'number_full':
				break;
			
			default:
				  switch ($mes) {
						case 1:$mes = 'Janeiro';break;
						case 2:$mes = 'Fevereiro';break;
						case 3:$mes = 'Março';break;
						case 4:$mes = 'Abril';break;
						case 5:$mes = 'Maio';break;
						case 6:$mes = 'Junho';break;
						case 7:$mes = 'Julho';break;
						case 8:$mes = 'Agosto';break;
						case 9:$mes = 'Setembro';break;
						case 10:$mes = 'Outubro';break;
						case 11:$mes = 'Novembro';break;
						case 12:$mes = 'Dezembro';break;
					}
				break;
		}
		return $mes;
	}
	function agente(){
		$CI =& get_instance();
		if ($CI->agent->is_browser()){
			$agent['agente'] = $CI->agent->browser().' '.$CI->agent->version();
		}elseif ($CI->agent->is_robot()){
			$agent['agente'] = $CI->agent->robot();
		}elseif ($CI->agent->is_mobile()){
			$agent['agente'] = $CI->agent->mobile();
		}else{
			$agent['agente'] = 'erro';
		}
		$agent['plataforma'] = $CI->agent->platform(); // Platform info (Windows, Linux, Mac, etc.)
		return $agent;
	}
	function formatDataToDB($data){
		$data = explode("/",$data);
		return $data[2].'-'.$data[1].'-'.$data[0];
	}

function debug($dado,$stop=false){
		echo "<hr />";
		echo "<pre>";
			print_r($dado);
		echo "</pre>";
		echo "<hr />";
		if ($stop){
			exit("Debug stop");
		}
	}
	function randomId($length = 10) {
	  $characters = '0123456789';
	  $randomString = '';
	  for ($i = 0; $i < $length; $i++) {
	    $randomString .= $characters[rand(0, strlen($characters) - 1)];
	  }
	  return $randomString;
	}

function fix_number($numero,$fix=5,$role='0'){
		$total_numero = strlen($numero);
		if($total_numero<$fix){
			$espaco = $fix - $total_numero;
			$role_contet = '';
			for($i=0; $i<$espaco; $i++){
				$role_contet.=$role;
			}
			$numero = $role_contet.$numero;
		}
		return $numero;
	}