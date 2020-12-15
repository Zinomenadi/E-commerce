<?php
include("databaseobject.class.php");
class article {
	private $ida;
    private $taille;
    private $idga;


	public function __construct($ida,$taille,$idga){
		this->ida=$ida;
        this->ida=$taille;
        this->ida=$idga;
	}

	public function getida(){
        return $this->ida;
    }
    public function gettaille(){
        return $this->taille;
    }
    public function getidga(){
        return $this->idga;
    }

    public function setida($ida){
        $this->ida = $ida;
    }
    public function setida($taille){
        $this->taille = $taille;
    }
    public function setida($idga){
        $this->idga = $idga;
    }



}




  ?>