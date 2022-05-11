<?php
	include '../Controller/PublicationC.php';
	$PublicationC=new PublicationC();
	$listePublication=$PublicationC->afficherlistePublication(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterPublication.php">Ajouter une publication </a></button>
		<center><h1>Liste des Publication</h1></center>
		<table border="1" align="center">
			<tr>
				<th>N ° Annonce</th>				
				<th>Type de publication</th>
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
				<a href="modifierPublication.php?id=<?php echo $Publication['numan'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
				</td>
				<td>
					<a href="supprimerPublication.php?id=<?php echo $Publication['numan']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		<button class="btn btn-primary" onclick="print('afficherlistePublication.php')">Export to PDF</button>
		<script>
   function print(pdf)
       {
                    // Créer un IFrame.
        var iframe = document.createElement('iframe');  
        // Cacher le IFrame.    
        iframe.style.visibility = "hidden"; 
        // Définir la source.    
        iframe.src = pdf;        
        // Ajouter le IFrame sur la pprix Web.    
        document.body.appendChild(iframe);  
        iframe.contentWindow.focus();       
        iframe.contentWindow.print(); // Imprimer.
             }
</script>

		
	</body>
</html>
