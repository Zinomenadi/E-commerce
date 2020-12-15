<?php 
require "Client.class.php";
require 'dbconnecte.php';
$cl=new Client(7,"Bend","sam","0664459381","2020-10-10","F","oualdaich");
echo $cl->getidcl();
if (mysqli_query($connect,$cl->ajouterClient())){
echo "true";
}
else echo "false";
	; 












?>