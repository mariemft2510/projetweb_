<?php
	include '../Controller/ServicesC.php';
	$ServicesC=new ServicesC();
	$keyword = $_GET['search'] ?? '';
	$listeServices=$ServicesC->afficherlisteServices($keyword); 
?>
<html>
	<head></head>
	<body>
	

	<form action="" method="get">
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
        <div class="input-group-append">
            <button class="btn btn-dark" type="submit">Search</button>
        </div>
    </div>
</form>
	
	<button><a href="ajouterServices.php">Ajouter un Services</a></button>
		<center><h1>Liste des Services</h1></center>		
		<table border="1" align="center">
			<tr>
				<th>ID Transaction</th>
				<th>N ° Annonce</th>
				<th>Evaluation </th>
				<th>Date de Transaction</th>
				<th>Prix</th>
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
				<a href="modifierServices.php?idt=<?php echo $Services['idt'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
				</td>
				<td>
					<a href="supprimerServices.php?idt=<?php echo $Services['idt']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>

		<button class="btn btn-primary" onclick="print('afficherlisteServices.php')">Export to PDF</button>
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




<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>


	</body>
</html>
