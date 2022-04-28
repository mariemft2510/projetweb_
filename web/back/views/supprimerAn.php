<?php
include '../controller/tableanC.php';

 $Ann = new tableanC() ;
$Ann->supprimerAn($_GET["CodeAn"]) ;

header ("Location:template.php");

?>