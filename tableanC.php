<?php
include "../config.php";

class tableanC{
    public function afficherAn() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM tablean");
            $query->execute();
            $result=$query->fetchAll();
            
            return $result;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }


    public function ajouterAn($tableanC){
        $pdo=config::getConnexion();
        try {
            $query=$pdo->prepare(
                "INSERT INTO tablean (CodeAn,TypeAn,TitreAn,DateAn,ContenueAn) VALUES (:CodeAn,:TypeAn,:TitreAn,:DateAn,:ContenueAn);"
            );
        
            $query->execute([
                'CodeAn'=>$tableanC->get_CodeAn(),
                'TypeAn'=>$tableanC->get_TypeAn(),
                'TitreAn'=>$tableanC->get_TitreAn(),
                'DateAn'=>$tableanC->get_DateAn(),
                'ContenueAn'=>$tableanC->get_ContenueAn()
            ]);
        }
        catch(PODException $e) {
            $e->getMessage();
        }
    } 
    

    function recupererAn($CodeAn){
        $db = config::getConnexion();
        try{
            $statement = $db->prepare('SELECT * FROM tablean WHERE CodeAn = :id');
            $statement->bindValue(':id', $CodeAn);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
     function modifierAn( $an){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE tablean SET 
                CodeAn= :CodeAn, 
                TypeAn= :TypeAn, 
                TitreAn= :TitreAn, 
                DateAn= :DateAn, 
                ContenueAn= :ContenueAn
                
            WHERE CodeAn= :CodeAn'
            );
            $query->execute([
                'TypeAn' => $an->get_TypeAn(),
                'TitreAn' => $an->get_TitreAn(),
                'DateAn' => $an->get_DateAn(),
                'ContenueAn' => $an->get_ContenueAn(),
                'CodeAn' => $an->get_CodeAn()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    } 

    public function supprimerAn($CodeAn){
        $sql ="DELETE FROM  tablean WHERE CodeAn =:CodeAn ";
        $db=config::getConnexion();
        $query =$db -> prepare($sql);
        $query->bindValue(':CodeAn', $CodeAn);
        try {
            $query->execute();
         }  
        catch(PODException $e) {
            $e->getMessage();
        }
    }


    }


?>