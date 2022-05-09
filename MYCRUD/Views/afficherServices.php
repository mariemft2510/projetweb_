<?php
	include '../Controller/ServicesC.php';
	$ServicesC=new ServicesC();
	$listeServices=$ServicesC->afficherServices(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterServices.php">Ajouter un Services</a></button>
		<center><h1>Liste des Services</h1></center>
		<table border="1" align="center">
			<tr>
				<th>idt</th>
				<th>numan</th>
				<th>evaluation</th>
				<th>datetr</th>
				<th>prix</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeServices as $Services){
			?>
			<tr>
				<td><?php echo $Services['idt']; ?></td>
				<td><?php echo $Services['numan']; ?></td>
				<td><?php echo $Services['evaluation']; ?></td>
				<td><?php echo $Services['datetr']; ?></td>
				<td><?php echo $Services['prix']; ?></td>
				<td>
					<form method="POST" action="modifierServices.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $Services['idt']; ?> name="idt">
					</form>
				</td>
				<td>
					<a href="supprimerServices.php" ?<?php echo $Services['idt']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
