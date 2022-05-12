<?PHP
	include '../config.php';
	include_once '../Model/commande.php';

	class formationc {
		
		function ajouterformation($formation){
			
			
			$sql="INSERT INTO formation (nom,date_d,date_f,prix ,description ) values (:nom, :date_d, :date_f, :prix, :descrip )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					//'idCom' => $commande->getidCom(),
					':nom' => $formation->getNom(),
					':date_d' => $formation->getdate_d(),
					':date_f' => $formation->getdate_f(),
					':prix' => $formation->getprix(),
					':descrip' => $formation->getdescrip()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		
		
		function afficherformation(){
			
			$sql="SELECT * FROM formation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		
		function supprimerformation($nom){
			$sql="DELETE FROM formation WHERE nom= :nom";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':nom',$nom);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupererformation($nom){
			$sql="SELECT * from formation where nom=:nom";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->bindValue(':nom',$nom);
				$query->execute();
				$formation=$query->fetch();
				return $formation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		/*function recuperernom($nom){
			$sql="SELECT nom from formation where nom=:nom";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->bindValue(':nom',$nom);
				$query->execute();
				$formation=$query->fetch();
				return $formation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}*/
		function modifierformation($formation ){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE formation SET 
						nom=:nom, 
						date_d=:date_d,
						date_f=:date_f,
						prix=:prix ,
						description=:descrip 
					WHERE nom=:nom'
				);
				$query->execute([
					'nom'=>$formation->getnom(),
					'date_d'=>$formation->getdate_d(),
					'date_f'=>$formation->getdate_f(),
					'prix'=>$formation->getprix(),
					'descrip'=>$formation->getdescrip(),
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}

?>