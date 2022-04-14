<?php
    include_once '../Model/Mannequin.php';
    include_once '../Controller/MannequinC.php';

    $error = "";

    // create Mannequin
    $Mannequin = null;

    // create an instance of the controller
    $MannequinC = new MannequinC();
    if (
        isset($_POST["idM"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["prenom"]) &&
		isset($_POST["taille"]) && 
        isset($_POST["poids"]) && 
        isset($_POST["age"])&& 
    )
       {if (
            !empty($_POST["idM"]) && 
		    !empty($_POST['nom']) &&
            !empty($_POST["prenom"]) && 
			!empty($_POST["taille"]) && 
            !empty($_POST["poids"]) && 
            !empty($_POST["age"])&& 
        ) 
         {
            $Mannequin = new Mannequin(
                $_POST['idM'],
				$_POST['nom'],
                $_POST['prenom'], 
				$_POST['taille'],
                $_POST['poids'],
                $_POST['age'],
            );
            $MannequinC->modifierMannequin($Mannequin, $_POST["idM"]);
            header('Location:afficherListeMannequins.php');
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
        <button><a href="afficherListeMannequins.php">Retour à la liste des Mannequins</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idM'])){
				$Mannequin = $MannequinC->recupererMannequin($_POST['idM']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idM">Numéro Mannequin:
                        </label>
                    </td>
                    <td><input type="text" name="idM" id="idM" value="<?php echo $Mannequin['idM']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $Mannequin['Nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $Mannequin['Prenom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="taille">taille:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="taille" value="<?php echo $Mannequin['taille']; ?>" id="taille">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="poids"> poids:
                        </label>
                    </td>
                    <td>
                        <input type="poids" name="poids" id="poids" value="<?php echo $Mannequin['poids']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="age">age
                        </label>
                    </td>
                    <td>
                        <input type="age" name="age" id="age" value="<?php echo $Mannequin['agecription']; ?>">
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
		<?php
		}
		?>
    </body>
</html>