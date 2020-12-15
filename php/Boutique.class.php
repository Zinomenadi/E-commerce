<?php 
/**
 * 
 */
class boutique
{
	private $idb;
	private $nomb;
	private $localb;
	private $idv;
	
	function __construct($idb,$nomb,$localb,$idv)
	{
		this->idb=$idb;
		this->nomb=$nomb;
		this->localb=$localb;
		this->idv=$idv;
    }
    public function getidv(){
        return $this->idv;
    }
    public function setidv($idv){
        $this->idv=$idv;
    }  
    public function getidb(){
        return $this->idb;
    }
    public function setidb($idb){
        $this->idb = $idb;
    }
    public function getnomb(){
        return $this->nomb;
    }
    public function setnomb($nomb){
        $this->nomb = $nomb;
    }

    public function getlocalb(){
        return $this->localb;
    }

    public function setlocalb($localb){
        $this->localb = $localb;
    }





}










 ?>