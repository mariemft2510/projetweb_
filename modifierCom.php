<?php
   include_once '../model/tablecom.php ';
   include_once '../controller/tablecomC.php';

    $error = "";

    // create commande
    $Com = null;

    // create an instance of the controller
    $tablecomC = new tablecomC();
    if (
      
            isset($_POST["Refcom"]) &&     
            isset($_POST["date_pub"]) &&
            isset($_POST["date_mod"]) && 
            isset($_POST["contenue"])
    ) {
        if (
          
            !empty($_POST["Refcom"]) &&
            !empty($_POST["date_pub"]) && 
            !empty($_POST["date_mod"]) &&
            !empty($_POST["contenue"])
        ) {
            $Com= new tablecom(
             
                $_POST['Refcom'], 
                $_POST['date_pub'],
                $_POST['date_mod'],
                $_POST['contenue']
            );
            $tablecomC->modifierCom($Com );
             header("Location:afficherCom.php");
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
            <button><a href="afficherCom.php">Retour à la liste des commentaire</a></button>
            <hr>
            
            <div id="error">
                <?php echo $error; ?>
            </div>
    <?php
                if (isset($_GET['Refcom'])){
                    $Com= $tablecomC->recupererCom($_GET['Refcom']);
                   /* $nom=$formationC->recuperernom($_POST['nom']);*/
                  
                    
            ?>
            
            <form class="customform" action="" method="post" >
                <table border="1" align="center">

            
                    
                    <tr>
                            <td>
                                <label for="Refcom">Refcom:
                                </label>
                            </td>
                            <td>
                                <input type="text" name="Refcom" id="Refcom" value="<?php echo $Com['Refcom']; ?>">
                            </td>
                    </tr>
                
                    <tr>
                            <td>
                                <label for="date_pub">date de publication :
                                </label>
                            </td>
                            <td>
                                <input type="date" name="date_pub" id="date_pub" value="<?php echo $Com['date_pub']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                                <label for="date_mod">date de modification:
                                </label>
                            </td>
                            <td>
                                <input type="date" name="date_mod" id="date_mod" value="<?php echo $Com['date_mod']; ?>">
                            </td>
                    </tr>
                    
                    <tr>
                            <td>
                            <label for="contenue">contenue:
                                </label>
                            </td>
                            <td>
                                <input type="texte" name="contenue" id="contenue" value="<?php echo $Com['contenue']; ?>">
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