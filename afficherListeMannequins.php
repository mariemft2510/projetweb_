<?php
	include '../Controller/MannequinC.php';
	$MannequinC=new MannequinC();
	$keyword = $_GET['search'] ?? '';
	$listeMannequins=$MannequinC->afficherlisteMannequins($keyword); 
?>
<html>
	<head></head>
	<body>
	
	<img src="images/logo1.png" alt="logo" height="350" width="350" >

	<form action="" method="get">
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
        <div class="input-group-append">
            <button class="btn btn-dark" type="submit">Search</button>
        </div>
    </div>
</form>
	
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
				<a href="modifierMannequin.php?idM=<?php echo $Mannequin['idM'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
				</td>
				<td>
					<a href="supprimerMannequin.php?idM=<?php echo $Mannequin['idM']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>

		<button class="btn btn-primary" onclick="print('afficherListeMannequins.php')">Export to PDF</button>
		<script>
   function print(pdf)
       {
                    // Créer un IFrame.
        var iframe = document.createElement('iframe');  
        // Cacher le IFrame.    
        iframe.style.visibility = "hidden"; 
        // Définir la source.    
        iframe.src = pdf;        
        // Ajouter le IFrame sur la page Web.    
        document.body.appendChild(iframe);  
        iframe.contentWindow.focus();       
        iframe.contentWindow.print(); // Imprimer.
             }
</script>



<button class="btn btn-info" id="btnExport" onclick="exportReportToExcel(this)"><i class="far fa-file-excel"></i> export To Excel</button>
<script>
function refresh(){
window.location.reload();
}

function exportReportToExcel() {
let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
name: `Liste des Mannequins.xlsx`, // fileName you could use any name
sheet: {
name: 'Liste' // sheetName
}
});
}

</script>
<!-- Excel table-->
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>


	</body>
</html>
