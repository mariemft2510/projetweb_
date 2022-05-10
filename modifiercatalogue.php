<?php
    include_once '../Model/catalogue.php';
    include_once '../Controller/catalogueC.php';

    /*$error = "";

    // create Mannequin
    //$Mannequin = null;

    // create an instance of the controller
    $MannequinC = new MannequinC();
    if (
        isset($_POST["idM"]) &&
		isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
		isset($_POST["taille"]) &&
        isset($_POST["poids"]) &&
        isset($_POST["age"])
    ) {
        if (
            !empty($_POST['idM']) &&
			!empty($_POST['nom']) &&
            !empty($_POST["prenom"]) &&
			!empty($_POST["taille"]) &&
            !empty($_POST["poids"]) &&
            !empty($_POST["age"])
        ) {
            $Mannequin = new Mannequin(
                $_POST['idM'],
				$_POST['nom'],
                $_POST['prenom'],
				$_POST['taille'],
                $_POST['poids'],
                $_POST['age']
            );
            $MannequinC->modifierMannequin($Mannequin, $_POST["idM"]);
            header('Location:afficherListeMannequins.php');
        }
        else
            $error = "Missing information";
    }*/

    $catalogueC = new catalogueC();
    $id = $_GET['id'] ?? null;
    $catalogue = $catalogueC->recuperercatalogue($id);
$error = "";
$catalogue = new catalogue($catalogue['id'],$catalogue['Mannequin'],$catalogue['experience']);



if (!$id) {
    header('Location:afficherlistecatalogue.php');
    exit;
}
$catalogueData = $catalogueC->recuperercatalogue($id);
$catalogueListe=$catalogueData;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $catalogueData['id'] = $_POST['id'];
   // $catalogueData['Mannequin'] = $_POST['Mannequin'];
    $catalogueData['experience'] = $_POST['experience'];
    
    
    $catalogue->load($catalogueData);
    $catalogue->save();
    header('Location:afficherlistecatalogue.php');
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
        <button><a href="afficherListecatalogue.php">Retour à la liste des catalogues</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			/*if (isset($_POST['idM'])){
				$Mannequin = $MannequinC->recupererMannequin($_POST['idM']);*/

		?>
        
        <form method="post" enctype="multipart/form-data">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Numéro Mannequin:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $catalogueListe['id']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                <tr>
                    <td>
                        <label for="experience">experience:
                        </label>
                    </td>
                    <td><input type="text" name="experience" id="experience" value="<?php echo $catalogueListe['experience']; ?>" maxlength="20">
                </td>
                <tr>
                    <td>
                        <label for="Mannequin">Mannequin:
                        </label>
                    </td>
                    <td><input type="text" name="Mannequin" id="Mannequin" value="<?php echo $catalogueListe['Mannequin']; ?>" maxlength="20">
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