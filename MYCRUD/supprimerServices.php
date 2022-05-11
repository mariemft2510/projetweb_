<?php
	include '../Controller/ServicesC.php';
	$ServicesC=new ServicesC();
	$ServicesC->supprimerServices($_GET["idt"]);
	header('Location:afficherlisteServices.php');
?>