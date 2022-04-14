<?php
	include '../Controller/MannequinC.php';
	$MannequinC=new MannequinC();
	$listeMannequins=$MannequinC->afficherMannequins(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterMannequin.php">Ajouter un Mannequin</a></button>
		<center><h1>Liste des Mannequins</h1></center>
		<table border="1" align="center">
			<tr>
				<th>idM</th>
				<th>nom</th>
				<th>prenom</th>
				<th>taille</th>
				<th>poids</th>
				<th>age</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeMannequins as $Mannequin){
			?>
			<tr>
				<td><?php echo $Mannequin['idM']; ?></td>
				<td><?php echo $Mannequin['nom']; ?></td>
				<td><?php echo $Mannequin['prenom']; ?></td>
				<td><?php echo $Mannequin['taille']; ?></td>
				<td><?php echo $Mannequin['poids']; ?></td>
				<td><?php echo $Mannequin['age']; ?></td>
				<td>
					<form method="POST" action="modifierMannequin.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $Mannequin['idM']; ?> name="idM">
					</form>
				</td>
				<td>
					<a href="supprimerMannequin.php?idM=<?php echo $Mannequin['idM']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
