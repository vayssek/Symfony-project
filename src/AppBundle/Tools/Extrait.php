<?php


namespace AppBundle\Tools;

class Extrait extends \Twig_Extension{
	
	protected $session,$suite,$fin;
	
	public function __construct($session,$suite,$fin){
		$this->session=$session;
		$this->fin=$fin;
		$this->suite=$suite;
		
	}
	
	public function getExtrait($text){
		$fin = $this->fin;
		
		if ($fin < 0)
		{
			$fin = $this->fin;
		}
		
		$str_return = strip_tags($text);
		while ($str_return != '' && strpos($str_return, ' ') === 0)
			$str_return = substr($str_return, 1);
	
			if ($str_return == '')
				return '';
	
				if (strlen($str_return) <= $fin || strpos($str_return, ' ') === false)
					return $str_return;
	
					if (strpos($str_return, ' ') > $fin)
						return substr($str_return, 0, strpos($str_return, ' '));
						$this->session->getFlashBag()->add('info','Extrait OK');
						$str_return = substr($str_return, 0, $fin);
						return substr($str_return, 0, strrpos($str_return, ' ')) . $this->suite;
		
		
		
	}
	
	public function getName(){
		return 'Extrait';
	}
	
	public function getFunctions(){
		return array(new \Twig_SimpleFunction('extrait', array($this,'getExtrait')));
	}
	
}