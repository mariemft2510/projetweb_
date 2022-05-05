<?php
include '../controller/userc 1.php';

 $usee = new userc() ;
$usee->supprimer($_GET["typeform"]) ;

header ("Location:afficher 1.php");

?>