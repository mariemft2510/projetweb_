<?php 
include "../model/user.php";
include "../controller/userc.php" ;

$error = "";
$s=0;
  
    

$userc=new userc(); 

if(isset($_POST['Id'])&&
isset($_POST['Nom'])&& 
isset($_POST['Prenom']) && 
isset($_POST['Passwor'])&&
isset($_POST['Age'])&&
isset($_POST['Telephone'])&&
isset($_POST['Genre'])

){
    if (
        !empty($_POST["Id"]) && 
        !empty($_POST['Nom']) &&
        !empty($_POST["Prenom"]) && 
        !empty($_POST["Passwor"]) && 
        !empty($_POST["Age"]) &&
        !empty($_POST["Telephone"]) && 
        !empty($_POST["Genre"]) 
    ) {

    $user=new user($_POST['Id'],$_POST['Nom'],$_POST['Prenom'],$_POST['Passwor'],$_POST['Age'],$_POST['Telephone'],$_POST['Genre']);
    $userc->ajouter($user);
            header('Location:afficher.php');
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
<label for="Id">Id: <input type="number"  id="Id:" name="Id">    
<label for="Nom">Nom: <input type="text"  id="Nom" name="Nom">
<label for="Prenom">Prenom: <input type="text" id="Prenom"  name="Prenom">
<label for="Passwor">Passwor: <input type="text" id="Passwor" name="Passwor">
<label for="Age">Age:  <input type="number" id="Age" name="Age">
<label for="Telephone">Telephone:  <input type="text" id="Telephone" name="Telephone">
<label for="Genre">Genre:  <input type="text" id="Genre" name="Genre">
<input type="submit"   value="Ajouter">  <input type="button" value="Reset">

				<a href="afficher.php">list</a>
			</div>    </pre>  

        </form>
        <?php if($s==1)
            $userc->ajouter($usee);
?>
</body>
</html>