<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Senha{

    private $ci;
	private $senha;
	private $salt;
	private $encrypt_senha;
	private $full_encrytp_senha;

    public function __construct($config = array()){
    	$this->ci =  &get_instance();        
		if (count($config) > 0){
			$this->initialize($config);
		}
    }

    public  function initialize($config = array()){
    	if (count($config) > 0){
			foreach ($config as $key => $val){
				if (!$this->$key){
					$this->$key = $val;
				}
			}
		}
		$this->setConfig();
    }

    public function get($params = array("salt","encrypt_senha","full_encrytp_senha")){

    	foreach ($params as $param) {
    		if (isset($this->$param)){
				$dados->$param = $this->$param;
			}
    	}
    	return $dados;
    }

    private function setConfig(){
    	if(!$this->salt){
			$this->geraSalt();
    	}

    	if(!$this->encrypt_senha){
			$this->encryptSenha();
    	}

    	if(!$this->full_encrytp_senha){
			$this->fullEncryptSenha();
    	}
    }

    private function geraSalt($len = 8){
		$this->salt = substr(sha1(mt_rand()), 0, $len);  
    }

    private function encryptSenha(){
		$this->encrypt_senha = md5($this->senha);  
    }

    private function fullEncryptSenha(){
		$this->full_encrytp_senha = md5($this->encrypt_senha.$this->salt);  
    }
}