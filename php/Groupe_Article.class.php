<?php 
class Groupe_Article{
private $idga;
private $nomga;
private $prixga;
private $marquega;
private $descriptionga;
private $cat;

public function __construct($idga,$nomga,$prixga,$marquega,$descriptionga,$cat){
$this->idga=$idga;
$this->nomga=$nomga;
$this->prixga=$prixga;
$this->marquega=$marquega;
$this->descriptionga=$descriptionga;
$this->cat=$cat;
}

public function getidga(){
return $this->idga;
}

public function getnomga(){
return $this->nomga;
}

public function getprixga(){
return $this->prixga;
}

public function getmarquega(){
return $this->marquega;
}

public function getdescriptionga(){
return $this->descriptionga;
}

public function getcat(){
return $this->cat;
}

public function setidga($idga){
	$this->idga=$idga;
}

public function setnomga($nomga){
	$this->nomga=$nomga;
}

public function setprixga($prixga){
	$this->prixga=$prixga;
}

public function setmarquega($marquega){
	$this->marquega=$marquega;
}
public function setdescriptionga($descriptionga){
	$this->descriptionga=$descriptionga;
}
public function setcat($cat){
	$this->cat=$cat;
}





}


?>