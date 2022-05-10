<?php
    include_once '../Model/catalogue.php';
    include_once '../Controller/catalogueC.php';

    $error = "";

    // create catalogue
    $catalogue = null;

    // create an instance of the controller
    $catalogueC = new catalogueC();
    if (
        isset($_POST["id"]) &&
        isset($_POST["experience"])&&
        isset($_POST["Mannequin"])
    ) {
        if (
            !empty($_POST["id"]) && 
            !empty($_POST["experience"])&&
            !empty($_POST["Mannequin"])
        ) {
            $catalogue = new catalogue(
                $_POST['id'],
				$_POST['experience'],
                $_POST['Mannequin']
            );
            $catalogueC->ajoutercatalogue($catalogue);
            header('Location:afficherlistecatalogue.php');
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
        <button><a href="afficherlistecatalogue.php">Retour catalogue</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Numéro Mannequin:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" maxlength="20"></td>
                </tr>
				<tr>

                <td>
                        <label for="Mannequin">Mannequin:
                        </label>
                    </td>
                    <td>
                        <input type="Mannequin" name="Mannequin" id="Mannequin" >
                    </td>
                </tr>              
                <tr>
                   
                   
        
                    <td>
                        <label for="experience">experience:
                        </label>
                    </td>
                    <td>
                        <input type="experience" name="experience" id="experience" >
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