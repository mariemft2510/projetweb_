
<?php
	include '../config.php';
	include_once '../Model/Publication.php';
	class PublicationC {
		function afficherPublication(){
			$sql="SELECT * FROM publication";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerPublication($numan){
			$sql="DELETE FROM publication WHERE numan=:numan";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':numan', $numan);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterPublication($numan){
			$sql="INSERT INTO publication (numan,typepublication) 
			VALUES (:numan,:	typepublication)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'numan' => $Publication->getnuman(),
					
					'typepublication' => $Publication->gettypepublication()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererPublication($numan){
			$sql="SELECT * from publication where numan=$numan";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Publication=$query->fetch();
				return $Publication;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierPublication($Publication, $numan){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE publication SET 
						numan= :numan, 
						
						typepublication= :typepublication
						
					WHERE numan= :numan'
				);
				$query->execute([
					'numan' => $Publication->getnuman(),
					
					'typepublication' => $Publication->gettypepublication(),
					
					'numan' => $numan
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>















