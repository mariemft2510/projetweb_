<?php
   include_once '../model/tablean.php ';
   include_once '../controller/tableanC.php';

    $error = "";

    // create commande
    $Ann = null;

    // create an instance of the controller
    $tableanC = new tableanC();
    if (
      
            isset($_POST["CodeAn"]) &&     
            isset($_POST["TypeAn"]) &&
            isset($_POST["TitreAn"]) && 
            isset($_POST["DateAn"]) &&
            isset($_POST["ContenueAn"])
    ) {
        if (
          
            !empty($_POST["CodeAn"]) &&
            !empty($_POST["TypeAn"]) && 
            !empty($_POST["DateAn"]) &&
            !empty($_POST["TitreAn"]) &&
            !empty($_POST["ContenueAn"])
        ) {
            $Ann= new tablean(
             
                $_POST['CodeAn'], 
                $_POST['TypeAn'],
                $_POST['DateAn'],
                $_POST['TitreAn'] ,
                $_POST['ContenueAn']
            );
            $tableanC->modifierAn($Ann );
             header('Location:template.php');
        }
        else
            $error = "Missing information";
    }    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Display</title>
    </head>
        <body>
            <button><a href="template.php">Retour à la liste des annonces</a></button>
            <hr>
            
            <div id="error">
                <?php echo $error; ?>
            </div>
    <?php
                if (isset($_POST['CodeAn'])){
                    $Ann= $tableanC->recupererAn($_POST['CodeAn']);
                   /* $nom=$formationC->recuperernom($_POST['nom']);*/
                  
                    
            ?>
            
            <form class="customform" action="" method="post" >
                <table border="1" align="center">

            
                    
                    <tr>
                            <td>
                                <label for="CodeAn">CodeAn:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="CodeAn" id="CodeAn" value="<?php echo $Ann['CodeAn']; ?>">
                            </td>
                    </tr>
                
                    <tr>
                            <td>
                                <label for="TypeAn">Type de l'annonce :
                                </label>
                            </td>
                            <td>
                                <input type="text" name="TypeAn" id="TypeAn" value="<?php echo $Ann['TypeAn']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <label for="TitreAn">Titre:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="TitreAn" id="TitreAn" value="<?php echo $Ann['TitreAn']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                            <label for="DateAn">Date:
                                </label>
                            </td>
                            <td>
                                <input type="date" name="DateAn" id="DateAn" value="<?php echo $Ann['DateAn']; ?>">
                            </td>
                    </tr>

                    <tr>
                            <td>
                            <label for="ContenueAn">Contenue:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="ContenueAn" id="ContenueAn" value="<?php echo $Ann['ContenueAn']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <input  type="submit" value="Modifier" >
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