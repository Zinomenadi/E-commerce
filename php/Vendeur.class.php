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
public function lol(){
	return echo "github";
}





}












?>