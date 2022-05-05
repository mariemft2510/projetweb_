<?php 
include "../model/user 1.php";
include "../controller/userc 1.php" ;

$error = "";
$s=0;
  
    

$userc=new userc(); 

if(isset($_POST['experience'])&&
isset($_POST['typeform'])

){
    if (
        !empty($_POST["experience"]) && 
        !empty($_POST["typeform"]) 
    ) {

    $user=new user($_POST['experience'],$_POST['typeform']);
    $userc->ajouter($user);
            header('Location:afficher 1.php');
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
<label for="experience">experience: <input type="number"  id="experience:" name="experience">    
<label for="typeform">typeform:  <input type="text" id="typeform" name="typeform">
<input type="submit"   value="Ajouter">  <input type="button" value="Reset">

				<a href="afficher 1.php">list</a>
			</div>    </pre>  

        </form>
        <?php if($s==1)
            $userc->ajouter($usee);
?>
</body>
</html>