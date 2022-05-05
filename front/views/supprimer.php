<?php
include '../controller/userc.php';

 $usee = new userc() ;
$usee->supprimer($_GET["Id"]) ;

header ("Location:afficher.php");

?>