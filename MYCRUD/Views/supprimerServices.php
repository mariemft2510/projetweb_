<?php
	include '../Controller/ServicesC.php';
	$Services=new ServicesC();
	$Services->supprimerServices($_GET["idt"]);
	header('Location:afficherServices.php');
?>