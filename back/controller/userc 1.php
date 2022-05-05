<?php
include "../config.php";
class userc{
    public function afficher() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM formateur");
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
                "INSERT INTO formateur (experience,typeform) VALUES (:experience,:typeform);"
            );
        
            $query->execute([
                'experience'=>$userc->get_experience(),
                'typeform'=>$userc->get_typeform()
                

            ]);
        }
        catch(PODException $e) {
            $e->getMessage();
        }
    }
    public function supprimer($typeform){
        $sql ="DELETE FROM  formateur WHERE typeform =:typeform ";
        $db=config::getConnexion();
        $query =$db -> prepare($sql);
        $query->bindValue(':typeform', $typeform);
        try {
            $query->execute();
         }  
        catch(PODException $e) {
            $e->getMessage();
        }
    }


    }


?>