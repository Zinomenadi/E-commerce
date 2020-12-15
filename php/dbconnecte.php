<?php
$host="localhost";
$user="root";
$password="";
$database="e-commerce";
$connect=mysqli_connect($host,$user,$password,$database);
  if(mysqli_connect_errno())
  { 
  
   die("Can not Connect to Database field". mysqli_connect_error());  }
  else{  /*
     echo 'Database is connected <br> ';

      echo '______________________________________________________________________________________________________________' ;     */
  } 


?>
