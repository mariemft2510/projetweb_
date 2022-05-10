<?php
    include_once '../Model/Services.php';
    include_once '../Controller/ServicesC.php';

    $error = "";

    // create Services
    $Services = null;

    // create an instance of the controller
    $ServicesC = new ServicesC();
    if (
        isset($_POST["idt"]) &&
		isset($_POST["numan"]) &&		
        isset($_POST["evaluation"]) &&
		isset($_POST["datetr"]) && 
        isset($_POST["prix"])
    ) {
        if (
            !empty($_POST["idt"]) && 
			!empty($_POST['numan']) &&
            !empty($_POST["evaluation"]) && 
			!empty($_POST["datetr"]) && 
            !empty($_POST["prix"]) 
        ) {
            $Services = new Services(
                $_POST['idt'],
				$_POST['numan'],
                $_POST['evaluation'], 
				$_POST['datetr'],
                $_POST['prix']
        
            );
            $ServicesC->ajouterServices($Services);
            header('Location:afficherServices.php');
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
        <button><a href="afficherServices.php">Retour à la liste des Services</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idt">Numéro Transaction:
                        </label>
                    </td>
                    <td><input type="text" name="idt" id="idt" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="numan">numan:
                        </label>
                    </td>
                    <td><input type="text" name="numan" id="numan" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="evaluation">evaluation:
                        </label>
                    </td>
                    <td><input type="text" name="evaluation" id="evaluation" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="datetr">datetr:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="datetr" id="datetr">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="prix" name="prix" id="prix ">
                    </td>
                </tr>
                             
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>