<?php
	include '../Controller/PublicationC.php';
	$PublicationC=new PublicationC();
	$listePublication=$PublicationC->afficherPublication(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterPublication.php">Ajouter un Publication</a></button>
		<center><h1>Liste des Publication</h1></center>
		<table border="1" align="center">
			<tr>
				
				<th>numan</th>
				<th>typepublication</th>
				
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listePublication as $Publication){
			?>
			<tr>
			
				<td><?php echo $Publication['numan']; ?></td>
				<td><?php echo $Publication['typepublication']; ?></td>
				
				<td>
					<form method="POST" action="modifierPublication.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $Publication['numan']; ?> name="numan">
					</form>
				</td>
				<td>
					<a href="supprimerPublication.php" ?<?php echo $Publication['numan']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
