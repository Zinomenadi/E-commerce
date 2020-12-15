<?php

class Vendeur
{ 
private $idv;
private $telv;
private $emailv;
private $nomv;
private $prenomv;

public function __construct($idv,$telv,$emailv,$nomv,$prenomv)
{
$this->idv=$idv;
$this->telv=$telv;
$this->emailv=$emailv;
$this->nomv=$nomv;
$this->prenomv=$prenomv;
		
}

public function getidv(){
return $this->idv;
}
public function gettelv(){
return $this->telv;
}
public function getemailv(){
return $this->emailv;
}
public function getnomv(){
return $this->nomv;
}
public function getprenomv(){
return $this->prenomv;
}

public function setidv($idv){
	$this->idv=$idv;
}
public function settelv($telv){
	$this->telv=$telv;
}
public function setemailv($emailv){
	$this->emailv=$emailv;
}
public function setnomv($nomv){
	$this->nomv=$nomv;
}
public function setprenomv($prenomv){
	$this->prenomv=$prenomv;
}





}
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












?>