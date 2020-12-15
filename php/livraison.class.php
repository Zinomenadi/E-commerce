<?php 

/**
 * 
 */
class livraison
{
	private $idlivraison;
	private $prixl;
	private $datel;


	function __construct($idlivraison,$prixl,$datel)
	{


		this->idlivraison=$idlivraison;
        this->prixl=$prixl;
	    this->$datel=$datel;



	}
	 public function getidlivraison(){
        return $this->idlivraison;
    }
    public function setidlivraison($idc){
        $this->idlivraison = $idlivraison;
    }

    public function getprixl(){
        return $this->prixl;
    }
      public function setidc($prixl){
        $this->prixl = $prixl;
    }

    public function getdatel(){
        return $this->datel;
    }
      public function setdatel($datel){
        $this->datel = $datel;
    }
}




 ?>