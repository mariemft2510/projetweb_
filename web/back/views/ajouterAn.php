<?php 
include "../model/tablean.php";
include "../controller/tableanC.php" ;

$error = "";
$s=0;
    // create Annonce
    

$tableanC=new tableanC(); 

if(isset($_POST['CodeAn'])&&
isset($_POST['TypeAn'])&& 
isset($_POST['TitreAn']) && 
isset($_POST['DateAn'])&&
isset($_POST['ContenueAn'])){
    if (
        !empty($_POST["CodeAn"]) && 
        !empty($_POST['TypeAn']) &&
        !empty($_POST["TitreAn"]) && 
        !empty($_POST["DateAn"]) && 
        !empty($_POST["ContenueAn"])  
    ) {

    $tablean=new tablean($_POST['CodeAn'],$_POST['TypeAn'],$_POST['TitreAn'],$_POST['DateAn'],$_POST['ContenueAn']);
    $tableanC->ajouterAn($tablean);
            header('Location:afficherAn.php');
        }
        else
            $error = "Missing information";
    
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
 <div><pre>
<label for="CodeAn">CodeAn: <input type="text"  id="CodeAn:" name="CodeAn">    
<label for="TypeAn">TypeAn: <input type="text"  id="TypeAn" name="TypeAn">
<label for="TitreAn">TitreAn: <input type="text" id="TitreAn"  name="TitreAn">
<label for="DateAn">DateAn: <input type="text" id="DateAn" name="DateAn">
<label for="ContenueAn">ContenueAn:  <input type="text" id="ContenueAn" name="ContenueAn">
<input type="submit"   value="Ajouter">  <input type="button" value="Reset">

				<a href="template.php">listadh</a>
			</div>    </pre>  

        </form>
        <?php if($s==1)
            $tableanC->ajouterAn($Ann);
?>
</body>
</html>