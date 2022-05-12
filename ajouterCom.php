<?php 
include "../model/tablecom.php";
include "../controller/tablecomC.php" ;

$error = "";
$s=0;
    

$tablecomC=new tablecomC(); 

if(isset($_POST['Refcom'])&&
isset($_POST['date_pub'])&& 
isset($_POST['date_mod']) && 
isset($_POST['contenue'])){
    if (
        !empty($_POST["Refcom"]) && 
        !empty($_POST["date_pub"]) &&
        !empty($_POST["date_mod"]) && 
        !empty($_POST["contenue"])  
    ) {

    $tablecom=new tablecom($_POST['Refcom'],$_POST['date_pub'],$_POST['date_mod'],$_POST['contenue']);
    $tablecomC->ajouterCom($tablecom);
            header('Location:afficherCom.php');
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
<label for="Refcom">Refcom: <input type="text"  id="Refcom" name="Refcom">    
<label for="date_pub">date_pub: <input type="date"  id="date_pub" name="date_pub">
<label for="date_mod">date_mod: <input type="date" id="date_mod"  name="date_mod">
<label for="contenue">contenue: <input type="text" id="contenue" name="contenue">
<input type="submit"   value="Ajouter">  <input type="button" value="Reset">

				<a href="afficherCom.php">listadh</a>
			</div>    </pre>  

        </form>
        <?php if($s==1)
            $tableanC->ajouterCom($Com);
?>
</body>
</html>