<?php
include "../config.php";
class tablecomC{
    public function afficherCom() {
        $db=config::getConnexion();
        try {
            $query=$db->prepare("SELECT * FROM tablecom");
            $query->execute();
            $result=$query->fetchAll();
            
            return $result;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }


    public function ajouterCom($tablecomC){
        $pdo=config::getConnexion();
        try {
            $query=$pdo->prepare(
                "INSERT INTO tablecom (Refcom,date_pub,date_mod,contenue) VALUES (:Refcom,:date_pub,:date_mod,:contenue);"
            );
        
            $query->execute([
                'Refcom'=>$tablecomC->get_Refcom(),
                'date_pub'=>$tablecomC->get_date_pub(),
                'date_mod'=>$tablecomC->get_date_mod(),
                'contenue'=>$tablecomC->get_contenue(),
              
            ]);
        }
        catch(PODException $e) {
            $e->getMessage();
        }
    } 

    function recupererCom($Refcom){
        $db = config::getConnexion();
        try{
            $statement = $db->prepare('SELECT * FROM tablecom WHERE Refcom = :id');
            $statement->bindValue(':id', $Refcom);
            $statement->execute();

            return $statement->fetch(PDO::FETCH_ASSOC);
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } 
     function modifierCom( $com){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE tablecom SET 
                Refcom= :Refcom, 
                date_pub= :date_pub, 
                date_mod= :date_mod, 
                contenue= :contenue
                
            WHERE Refcom= :Refcom'
            );
            $query->execute([
                'date_pub' => $com->get_date_pub(),
                'date_mod' => $com->get_date_mod(),
                'contenue' => $com->get_contenue(),
                'Refcom' => $com->get_Refcom()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    } 
    public function supprimerCom($Refcom){
        $sql ="DELETE FROM  tablecom WHERE Refcom =:Refcom ";
        $db=config::getConnexion();
        $query =$db -> prepare($sql);
        $query->bindValue(':Refcom', $Refcom);
        try {
            $query->execute();
         }  
        catch(PODException $e) {
            $e->getMessage();
        }
    }


    }


?>