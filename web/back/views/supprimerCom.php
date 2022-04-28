<?php
include "../controller/tablecomC.php";

$Com = new tablecomC() ;
$Com->supprimerCom($_GET["Refcom"]) ;
header ("Location:afficherCom.php");

?>