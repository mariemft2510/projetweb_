<?php
    include_once '../Model/Publication.php';
    include_once '../Controller/PublicationC.php';



    $PublicationC = new PublicationC();
    $numan = $_GET['numan'] ?? null;
    $Publication = $PublicationC->recupererPublication($numan);
$error = "";
$Publication = new Publication($Publication['numan'],$Publication['typepublication']);



if (!$numan) {
    header('Location:afficherlistePublication.php');
    exit;
}
$PublicationData = $PublicationC->recupererPublication($numan);
$PublicationListe=$PublicationData;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $PublicationData['numan'] = $_POST['numan'];
    $PublicationData['typepublication'] = $_POST['typepublication'];
    
    
    $Publication->load($PublicationData);
    $Publication->save();
    header('Location:afficherlistePublication.php');
}
else
    $error = "Missing information";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnumanth=device-wnumanth, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherlistePublication.php">Retour à la liste des Publications</a></button>
        <hr>
        
        <div numan="error">
            <?php echo $error; ?>
        </div>
			
		
        
        <form method="post" enctype="multipart/form-data">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="numan">Numéro Mannequin:
                        </label>
                    </td>
                    <td><input type="text" name="numan" numan="numan" value="<?php echo $PublicationListe['numan']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                <tr>
                    <td>
                        <label for="typepublication">typepublication:
                        </label>
                    </td>
                    <td><input type="text" name="typepublication" numan="typepublication" value="<?php echo $PublicationListe['typepublication']; ?>" maxlength="20">
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