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
            !empty($_POST["numan"]) && 
            !empty($_POST["typepublication"])
        ) {
            $Publication = new Publication(
                $_POST['numan'],
                $_POST['typepublication']
            );
            $PublicationC->ajouterPublication($Publication);
            header('Location:afficherlistePublication.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnumanth=device-wnumanth, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherlistePublication.php">Retour Publication</a></button>
        <hr>
        
        <div numan="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="numan">N ° Annonce:
                        </label>
                    </td>
                    <td><input type="text" name="numan" numan="numan" maxlength="20"></td>
                </tr>
				<tr>

                <td>
                        <label for="typepublication">Type de publication:
                        </label>
                    </td>
                    <td>
                        <input type="typepublication" name="typepublication" numan="typepublication" >
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
        <script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var dateNow = new Date();
            var p = document.getElementById("numan").value;
            var dp = document.getElementById("typepublication").value;

            if (p == "") {
                alert("le code est vide !!");
                return false;
            }
            
            else if (dp == "") {
                alert("type de publication est vide !!");
                return false;
            }
          
            
        }
       
        
    
    </script> 
    </body>
</html>