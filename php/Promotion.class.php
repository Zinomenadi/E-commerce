<?php

class Promotion
{
private $idp;
private $dated;
private $datea;
private $datef;
private $tauxp;
private $idga;

public function __construct($idp,$dated,$datea,$datef,$tauxp,$idga)
{
$this->idp=$idp;
$this->dated=$dated;
$this->datea=$datea;
$this->datef=$datef;
$this->tauxp=$tauxp;
$this->idga=$idga;
}

public function getidp(){
return $this->idp;
}

public function getdated(){
return $this->dated;
}

public function getdatea(){
return $this->datea;
}

public function getdatef(){
return $this->datef;
}

public function gettauxp(){
return $this->tauxp;
}

public function getidga(){
return $this->idga;
}

public function setidp($idp){
	$this->idp=$idp;
}

public function setdated($dated){
	$this->dated=$dated;
}

public function setdatea($datea){
	$this->datea=$datea;
}
public function setdatef($datef){
	$this->datef=$datef;
}

public function settauxp($tauxp){
	$this->tauxp=$tauxp;
}

public function setidga($idga){   
	$this->idga=$idga;
}



}

?>