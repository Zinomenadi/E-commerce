<?php

class Client
{
	private $idcl;
	private $nomcl;
	private $prenomcl;
	private $telcl;
	private $datencl;
	private $sexecl;
	private $localcl;



	
	
	function __construct($idcl,$nomcl,$prenomcl,$telcl,$datencl,$sexecl,$localcl)
	{

	     $this->idcl=$idcl;
	     $this->nomcl=$nomcl;
	     $this->prenomcl=$prenomcl;
	     $this->telcl=$telcl;
	     $this->datencl=$datencl;
	     $this->sexecl=$sexecl;
	     $this->localcl=$localcl;




    }

    public function getidcl(){
        return $this->idcl;
    }
      public function setidcl($idcl){
        $this->idcl = $idcl;
    }

    public function getnomcl(){
        return $this->nomcl;
    }
      public function setnomcl($nomcl){
        $this->nomcl = $nomcl;
    }

    public function getprenomcl(){
        return $this->prenomcl;
    }
      public function setprenomcl($prenomcl){
        $this->prenomcl = $prenomcl;
    }
    public function gettelcl(){
        return $this->telcl;
    }
      public function settelcl($telcl){
        $this->telcl = $telcl;
    }

     public function getdatencl(){
        return $this->datencl;
    }
      public function setdatencl($datencl){
        $this->datecl = $$datecl;
    }


     public function getsexecl(){
        return $this->sexecl;
    }
      public function setsexecl($sexecl){
        $this->sexecl = $sexecl;
    }

     public function getlocalcl(){
        return $this->localcl;
    }
      public function setlocal($localcl){
        $this->localcl = $localcl;
    }


    public function ajouterClient(){
	$req="INSERT INTO client(NOMCL,PRENOMCL,TELCL,DATENCL,SEXECL,LOCALCL) VALUES ('$this->nomcl','$this->prenomcl','$this->telcl','$this->datencl','$this->sexecl','$this->localcl')";
    return $req; 

}





}






  ?>