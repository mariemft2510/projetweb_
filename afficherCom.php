<?php
 include "../controller/tablecomC.php";

$Com=new tablecomC();

$liste =$Com->afficherCom();

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
            <td>Refcom</td>
            <td>date_pub</td>
            <td>date_mod</td>
            <td>contenue</td>
            <td>Modifier</td>
            <td>Supprimer</td>

            
        </tr>
        <?php
            foreach ($liste as  $Com){
        ?>
            <tr>
                <td><?php echo $Com['Refcom'];?></td>
                <td><?php echo $Com['date_pub'];?></td>
                <td><?php echo $Com['date_mod'];?></td>
                <td><?php echo $Com['contenue'];?></td>
                <td><a href="modifierCom.php?Refcom=<?php echo $Com['Refcom']; ?>">modifier</a></td>
                <td><a href="supprimerCom.php?Refcom=<?php echo $Com['Refcom']; ?>">Supprimer</a>
            
            </td>

            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>