<?php
include "../controller/PublicationC.php";

$Com = new PublicationC() ;
$Com->supprimerPublication($_GET["numan"]) ;
header ("Location:afficherPublication.php");

?>