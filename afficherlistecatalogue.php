<?php
	include '../Controller/catalogueC.php';
	$catalogueC=new catalogueC();
	$listecatalogue=$catalogueC->afficherlistecatalogue(); 
?>
<html>
	<head></head>
	<body>
	<img src="mannequin.jpg" alt="logo" height="500" width="500" >
	    <button><a href="ajoutercatalogue.php">Ajouter </a></button>
		<center><h1>Liste des catalogue</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>				
				<th>Mannequin</th>
				<th>experience</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listecatalogue as $catalogue){
			?>
			<tr>
				<td><?php echo $catalogue['id']; ?></td>
				<td><?php echo $catalogue['Mannequin']; ?></td>
				<td><?php echo $catalogue['experience']; ?></td>
				
				<td>
				<a href="modifiercatalogue.php?id=<?php echo $catalogue['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
				</td>
				<td>
					<a href="supprimercatalogue.php?id=<?php echo $catalogue['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
