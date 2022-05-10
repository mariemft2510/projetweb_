<?php
    include_once '../Model/Publication.php';
    include_once '../Controller/PublicationC.php';

    $error = "";

    // create Publication
    $Publication = null;

    // create an instance of the controller
    $PublicationC = new PublicationC();
    if (
        
		isset($_POST["numan"]) &&		
        isset($_POST["typepublication"]) 
		
    ) {
        if (
          
			!empty($_POST['numan']) &&
            !empty($_POST["typepublication"])
			
        ) {
            $Publication = new Publication(
                
				$_POST['numan'],
                $_POST['typepublication']
			
        
            );
            $PublicationC->ajouterPublication($Publication);
            header('Location:afficherPublication.php');
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
        <button><a href="afficherPublication.php">Retour à la liste des Publication</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
              
				<tr>
                    <td>
                        <label for="numan">numan:
                        </label>
                    </td>
                    <td><input type="text" name="numan" id="numan" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="typepublication">typepublication:
                        </label>
                    </td>
                    <td><input type="text" name="typepublication" id="typepublication" maxlength="20"></td>
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