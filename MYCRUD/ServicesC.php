<?php
    include_once  '../config.php';
	include_once '../Model/Services.php';
	class ServicesC {
		function afficherlisteServices($keyword = ''){


			$db = config::getConnexion();
			$sql="SELECT * FROM services ORDER BY prix DESC";
			try{
				if ($keyword) {
					$statement = $db->prepare('SELECT * FROM services WHERE (numan like :keyword) ORDER BY prix DESC');
					$statement->bindValue(":keyword", "%$keyword%");
				} else {
					$liste = $db->query($sql);
				return $liste;
				}
				$statement->execute();
	
				return $statement->fetchAll(PDO::FETCH_ASSOC);
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}





	}
		function supprimerServices($idt){
			$sql="DELETE FROM services WHERE idt=:idt";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idt', $idt);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterServices($Services){
			$sql="INSERT INTO services(idt, numan, evaluation, datetr, prix) 
			VALUES (:idt,:numan,:evaluation, :datetr,:prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idt' => $Services->getidt(),
					'numan' => $Services->getnuman(),
					'evaluation' => $Services->getevaluation(),
					'datetr' => $Services->getdatetr(),
					'prix' => $Services->getprix()
				]);	
						
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererServices($idt){
			$db = config::getConnexion();
			try{
				$statement = $db->prepare('SELECT * FROM services WHERE idt = :idt');
				$statement->bindValue(':idt', $idt);
				$statement->execute();
	
				return $statement->fetch(PDO::FETCH_ASSOC);
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


            function modifierServices(Services $Services, $idt){
                try {
                    $db = config::getConnexion();
                    $query = $db->prepare(
                        'UPDATE services SET 
						idt= :idt, 
						numan= :numan, 
						evaluation= :evaluation, 
						datetr= :datetr, 
						prix= :prix
						
					WHERE idt= :idt'
                    );
                    $query->execute([
                        'numan' => $Services->getnuman(),
                        'evaluation' => $Services->getevaluation(),
                        'datetr' => $Services->getdatetr(),
                        'prix' => $Services->getprix(),
                        'idt' => $idt
                    ]);
                    echo $query->rowCount() . " records UPDATED successfully <br>";
                } catch (PDOException $e) {
                    $e->getMessage();
                }
            }


	}
?>