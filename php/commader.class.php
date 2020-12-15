<?php
/**
 * 
 */
class Commander
{
	private $ida;
	private $idcl;
	private $datec;
	function __construct($ida,$idcl,$datec)
	{
		this->ida=$ida;
		this->idcl=$idcl;
		this->datec=$datec;
	}

	public function getida(){
		this->$ida;
	}

	public function setida($ida){
		this->ida=$ida;
	}

	public function getidcl(){
		this->$idcl;
	}

	public function setidcl($idcl){
		this->idcl=$idcl;
	}

	public function getdatec(){
		this->$datec;
	}

	public function setida($datec){
		this->datec=$datec;
	}
}
















  ?>