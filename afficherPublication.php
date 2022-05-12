<?php
	include '../Controller/PublicationC.php';
	$PublicationC=new PublicationC();
	$listePublication=$PublicationC->afficherlistePublication(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterPublication.php">Ajouter </a></button>
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
				<a href="modifierPublication.php?numan=<?php echo $Publication['numan'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
				</td>
				<td>
					<a href="supprimerPublication.php?numan=<?php echo $Publication['numan']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
