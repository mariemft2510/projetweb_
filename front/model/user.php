<?php
class user{

    private int $Id;
    private string $Nom;
    private string $Prenom;
    private string $Passwor;
    private int $Age;
    private string $Telephone;
    private string $Genre;
    
    
    public function  __construct ($a,$b,$c,$d,$e,$f,$g){
        $this-> Id=$a;
        $this->Nom=$b;
        $this->Prenom=$c;
        $this->Passwor=$d;
        $this->Age=$e;
        $this->Telephone=$f;
        $this->Genre=$g;
       
    }
    public function get_Id()
    {
        return $this->Id;
    }
    public function get_Nom()
    {
        return $this->Nom;
    }   
    public function get_Prenom()
    {
        return $this->Prenom;
    }
    public function get_Passwor()
    {
        return $this->Passwor;
    }
    public function get_Age()
    {
        return $this->Age;
    }
    public function get_Telephone()
    {
        return $this->Telephone;
    }
    public function get_Genre()
    {
        return $this->Genre;
    }
    

    
}
?>