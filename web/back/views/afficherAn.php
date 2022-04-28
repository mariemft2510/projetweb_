<?php
include '../controller/tableanC.php';

$Ann=new tableanC();

$liste =$Ann->afficherAn();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table> <table border = 1 >
        <tr>
            <td>CodeAn</td>
            <td>TypeAn</td>
            <td>TitreAn</td>
            <td>DateAn</td>
            <td>ContenueAn</td>
            <td>Modifier</td>
            <td>Supprimer</td>

            
        </tr>
        <?php
            foreach ($liste as  $Ann){
        ?>
            <tr>
                <td><?php echo $Ann['CodeAn'];?></td>
                <td><?php echo $Ann['TypeAn'];?></td>
                <td><?php echo $Ann['TitreAn'];?></td>
                <td><?php echo $Ann['DateAn'];?></td>
                <td><?php echo $Ann['ContenueAn'];?></td>
               <!-- <td>Modifier</td> -->
                <td> 
                <form method="POST" action="modifierAn.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $Ann['CodeAn']; ?> name="CodeAn">
					</form>
                    </td>
                    <td>
                    <a href="supprimerAn.php?CodeAn=<?php echo $Ann['CodeAn']; ?>">Supprimer</a>
                </td>

            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>