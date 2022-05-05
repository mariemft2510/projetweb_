

	<meta charset="utf-8" />
<?php
 
 $bdd = new PDO('mysql:localhost;dbname=projet;charset=utf8','root','');
 
$usee = $bdd->query('SELECT Age FROM user ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   
   if($usee->rowCount() == 0) {
      $usee = $bdd->query('SELECT Nom FROM user WHERE Nom LIKE "%'.$q.'%" ');
   }
}
?>
<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($usee->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $usee->fetch()) { ?>
      <li><?= $a['Nom'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>