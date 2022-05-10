<?php
    include_once  '../config.php';
	include_once '../Model/catalogue.php';
	class catalogueC {
		function afficherlistecatalogue(){
			$sql="SELECT * FROM catalogue";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimercatalogue($id){
			$sql="DELETE FROM catalogue WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutercatalogue($catalogue){
			$sql="INSERT INTO catalogue(id,Mannequin,experience) 
			VALUES (:id,:Mannequin,:experience)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $catalogue->getid(),
					'Mannequin' => $catalogue->getMannequin(),
					'experience' => $catalogue->getexperience()
				]);	
						
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercatalogue($id){
			$db = config::getConnexion();
			try{
				$statement = $db->prepare('SELECT * FROM catalogue WHERE id = :id');
				$statement->bindValue(':id', $id);
				$statement->execute();
	
				return $statement->fetch(PDO::FETCH_ASSOC);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


            function modifiercatalogue(catalogue $catalogue, $id){
                try {
                    $db = config::getConnexion();
                    $query = $db->prepare(
                        'UPDATE catalogue SET 
						id= :id, 
						Mannequin=:Mannequin,
						experience= :experience,
					WHERE id= :id'
                    );
                    $query->execute([
                        'Mannequin' => $catalogue->getMannequin(),
                        'experience' => $catalogue->getexperience(),
                        'id' => $id
                    ]);
                    echo $query->rowCount() . " records UPDATED successfully <br>";
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }
		}
	
//function afficherlistecatalogue($id){
//try {
//$pdo = getConnexion();
//$query = $pdo -> prepare(
//	'SELECT * FROM catalogue where Mannequin =:idM'
//);
//return $query ->fetchAll();
//} catch (PDOException $e){
//	$e ->getMessage();
//}
//}
	

?>