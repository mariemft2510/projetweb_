<?php
    include_once '../model/user.php ';
    include_once '../controller/userc.php';

    $error = "";

    // create annonce
    $usee = null;

    // create an instance of the controller
    $userc = new userc();
    if (
        isset($_POST["Id"]) &&
		isset($_POST["Nom"]) &&		
        isset($_POST["Prenom"]) &&
		isset($_POST["Passwor"]) && 
        isset($_POST["Age"]) &&
        isset($_POST["Telephone"]) && 
        isset($_POST["Genre"])


    )
       {if (
            !empty($_POST["Id"]) && 
		    !empty($_POST['Nom']) &&
            !empty($_POST["Prenom"]) && 
			!empty($_POST["Passwor"]) && 
            !empty($_POST["Age"]) &&
            !empty($_POST['Telephone']) &&
            !empty($_POST['Genre']))

            
         {
            $usee = new usee(
                $_POST['Id'],
				$_POST['Nom'],
                $_POST['Prenom'], 
				$_POST['Passwor'],
                $_POST['Age'],
                $_POST['Telephone'],
                $_POST['Genre'],
            );
            $userc->modifier($usee, $_POST["Id"]);
            header('Location:afficher.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
  </head>
    <body>
        <button><a href="afficherAnn.php">Retour à la liste</a></button>
        <hr>

        <div id="error">
            <?php echo $error; ?>
        </div>

		<?php
		?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Id">Id:
                        </label>
                    </td>
                    <td><input type="number" name="Id" id="Id" value="<?php echo $usee['Id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="Nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="Nom" id="Nom" value="<?php echo $usee['Nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prenom">Prenom:
                        </label>
                    </td>
                    <td><input type="text" name="Prenom" id="Prenom" value="<?php echo $usee['Prenom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Passwor">Passwor:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Passwor" value="<?php echo $usee['Passwor']; ?>" id="Passwor">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Age">Age:
                        </label>
                    </td>
                    <td>
                        <input type="number" name="Age" id="Age" value="<?php echo $usee['Age']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Telephone">Telephone:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Telephone" id="Telephone" value="<?php echo $usee['Telephone']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Genre">Genre:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Genre" id="Genre" value="<?php echo $usee['Genre']; ?>">
                    </td>
                </tr>
                             
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		
    </body>
</html> 