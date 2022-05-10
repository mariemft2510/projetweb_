<?php
    include_once  '../config.php';
	include_once '../Model/Mannequin.php';
	class MannequinC {
		function afficherlisteMannequins($keyword = ''){


			$db = config::getConnexion();
			$sql="SELECT * FROM Mannequin ORDER BY taille DESC";
			try{
				if ($keyword) {
					$statement = $db->prepare('SELECT * FROM Mannequin WHERE (nom || prenom like :keyword) ORDER BY taille DESC');
					$statement->bindValue(":keyword", "%$keyword%");
				} else {
					$liste = $db->query($sql);
				return $liste;
					//$statement = $db->prepare('SELECT * FROM mannequin ORDER BY taille DESC');
				}
				$statement->execute();
	
				return $statement->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}




/*
			$sql="SELECT * FROM Mannequin";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		*/
	}
		function supprimerMannequin($idM){
			$sql="DELETE FROM Mannequin WHERE idM=:idM";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idM', $idM);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterMannequin($Mannequin){
			$sql="INSERT INTO Mannequin(idM, nom, prenom, taille, poids, age) 
			VALUES (:idM,:nom,:prenom, :taille,:poids, :age)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idM' => $Mannequin->getidM(),
					'nom' => $Mannequin->getnom(),
					'prenom' => $Mannequin->getprenom(),
					'taille' => $Mannequin->gettaille(),
					'poids' => $Mannequin->getpoids(),
					'age' => $Mannequin->getage()
				]);	
						
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererMannequin($idM){
			$db = config::getConnexion();
			try{
				$statement = $db->prepare('SELECT * FROM Mannequin WHERE idM = :id');
				$statement->bindValue(':id', $idM);
				$statement->execute();
	
				return $statement->fetch(PDO::FETCH_ASSOC);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


            function modifierMannequin(Mannequin $Mannequin, $idM){
                try {
                    $db = config::getConnexion();
                    $query = $db->prepare(
                        'UPDATE Mannequin SET 
						idM= :idM, 
						nom= :nom, 
						prenom= :prenom, 
						taille= :taille, 
						poids= :poids,
						age= :age
					WHERE idM= :idM'
                    );
                    $query->execute([
                        'nom' => $Mannequin->getnom(),
                        'prenom' => $Mannequin->getprenom(),
                        'taille' => $Mannequin->gettaille(),
                        'poids' => $Mannequin->getpoids(),
                        'age' => $Mannequin->getage(),
                        'idM' => $idM
                    ]);
                    echo $query->rowCount() . " records UPDATED successfully <br>";
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }


	}
?>