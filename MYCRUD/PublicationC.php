<?php
    include_once  '../config.php';
	include_once '../Model/Publication.php';
	class PublicationC {
		function afficherlistePublication(){
			$sql="SELECT * FROM publication";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
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
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterPublication($Publication){
			$sql="INSERT INTO publication(numan,typepublication) 
			VALUES (:numan,:typepublication)";
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
			$db = config::getConnexion();
			try{
				$statement = $db->prepare('SELECT * FROM publication WHERE numan = :numan');
				$statement->bindValue(':numan', $numan);
				$statement->execute();
	
				return $statement->fetch(PDO::FETCH_ASSOC);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


            function modifierPublication(Publication $Publication, $numan){
                try {
                    $db = config::getConnexion();
                    $query = $db->prepare(
                        'UPDATE Publication SET 
						numan= :numan, 
						typepublication= :typepublication,
					WHERE numan= :numan'
                    );
                    $query->execute([
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