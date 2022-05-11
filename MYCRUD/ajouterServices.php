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
            header('Location:afficherlisteServices.php');
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
        <button><a href="afficherlisteServices.php">Retour à la liste des Services</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idt">ID de Transaction:
                        </label>
                    </td>
                    <td><input type="text" name="idt" id="idt" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="numan">N ° Annonce:
                        </label>
                    </td>
                    <td><input type="text" name="numan" id="numan" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="evaluation">Evaluation:
                        </label>
                    </td>
                    <td><input type="text" name="evaluation" id="evaluation" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="datetr">Date de transaction:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="datetr" id="datetr">
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <label for="prix">Prix:
                        </label>
                    </td>
                    <td>
                        <input type="prix" name="prix" id="prix" >
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
            var n = document.getElementById("idt").value;
            var p = document.getElementById("numan").value;
            var dp = document.getElementById("evaluation").value;
            var db = document.getElementById("datetr").value;
            var dr = document.getElementById("prix").value;

            if (n == "") {
                alert("le code est vide !!");
                return false;
            }
            else if (!(n.match(letters) )) {
        alert("Veuillez entrer un code valide!");
        return false ;
        }
        else if (p == "") {
                alert("le numero d annonce est vide !!");
                return false;
            }
            else if (dp == "") {
                alert("date de transaction est vide !!");
                return false;
            }
            else if (dr == "") {
                alert("le prix est vide !!");
                return false;
            }
            
        }
        else if(new Date(db).toLocaleString() < dateNow.toLocaleString()) {
        alert( "la date de transaction est invalide !");
        return false ;
        }
        
    }
    </script> 
    </body>
</html>