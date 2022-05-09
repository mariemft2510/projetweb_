<?php
	include '../config.php';
	include_once '../Model/Services.php';
	class ServicesC {
		function afficherServices(){
			$sql="SELECT * FROM services";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
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
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterServices($idt){
			$sql="INSERT INTO services (idt,numan,evaluation, datetr,prix) 
			VALUES (:idt,:	numan,:	evaluation,:datetr, :prix)";
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
			$sql="SELECT * from services where idt=$idt";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Services=$query->fetch();
				return $Services;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierServices($Services, $idt){
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
					'idt' => $Services->getidt(),
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