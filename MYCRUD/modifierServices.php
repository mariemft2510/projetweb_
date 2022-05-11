<?php
    include_once '../Model/Services.php';
    include_once '../Controller/ServicesC.php';

   
    $ServicesC = new ServicesC();
    $idt = $_GET['idt'] ?? null;
    $Services = $ServicesC->recupererServices($idt);
$error = "";

$Services = new Services($Services['idt'],$Services['numan'],$Services['evaluation'],$Services['datetr'],$Services['prix']);



if (!$id) {
    header('Location:afficherlisteServices.php');
    exit;
}
$ServicesData = $ServicesC->recupererServices($id);
$ServicesListe=$ServicesData;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ServicesData['idt'] = $_POST['idt'];
    $ServicesData['numan'] = $_POST['numan'];
    $ServicesData['evaluation'] = $_POST['evaluation'];
    $ServicesData['datetr'] = $_POST['datetr'];
    $ServicesData['prix'] = $_POST['prix'];

    $Services->load($ServicesData);
    $Services->save();
    header('Location:afficherlisteServices.php');
}
else
    $error = "Missing information";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherlisteServices.php">Retour à la liste des Servicess</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
	
        
        <form method="post" enctype="multipart/form-data">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idt">Numéro Services:
                        </label>
                    </td>
                    <td><input type="text" name="idt" id="idt" value="<?php echo $ServicesListe['idt']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                <tr>
                    <td>
                        <label for="numan">numan:
                        </label>
                    </td>
                    <td><input type="text" name="numan" id="numan" value="<?php echo $ServicesListe['numan']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="evaluation">evaluation:
                        </label>
                    </td>
                    <td><input type="text" name="evaluation" id="evaluation" value="<?php echo $ServicesListe['evaluation']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="datetr">datetr:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="datetr" value="<?php echo $ServicesListe['datetr']; ?>" id="datetr">
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <label for="prix">prix
                        </label>
                    </td>
                    <td>
                        <input type="prix" name="prix" id="prix" value="<?php echo $ServicesListe['prix']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td>  <button type="submit" class="btn btn-sm btn-outline-danger">Modifier</button></td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>

        </form>
		<?php
		//}
		?>
    </body>
</html>