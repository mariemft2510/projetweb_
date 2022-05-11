<?php
	include '../Controller/PublicationC.php';
	$PublicationC=new PublicationC();
	$PublicationC->supprimerPublication($_GET["numan"]);
	header('Location:afficherPublication.php');
?>