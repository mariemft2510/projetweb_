<?php
include "../config.php";
class userc{
    public function afficher() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM user");
            $query->execute();
            $result=$query->fetchAll();
            
            return $result;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }


    public function ajouter($userc){
        $pdo=config::getConnexion();
        try {
            $query=$pdo->prepare(
                "INSERT INTO user (Id,Nom,Prenom,Passwor,Age,Telephone,Genre) VALUES (:Id,:Nom,:Prenom,:Passwor,:Age,:Telephone,:Genre);"
            );
        
            $query->execute([
                'Id'=>$userc->get_Id(),
                'Nom'=>$userc->get_Nom(),
                'Prenom'=>$userc->get_Prenom(),
                'Passwor'=>$userc->get_Passwor(),
                'Age'=>$userc->get_Age(),
                'Telephone'=>$userc->get_Telephone(),
                'Genre'=>$userc->get_Genre()

            ]);
        }
        catch(PODException $e) {
            $e->getMessage();
        }
    }
    public function supprimer($Id){
        $sql ="DELETE FROM  user WHERE Id =:Id ";
        $db=config::getConnexion();
        $query =$db -> prepare($sql);
        $query->bindValue(':Id', $Id);
        try {
            $query->execute();
         }  
        catch(PODException $e) {
            $e->getMessage();
        }
    }


    }


?>