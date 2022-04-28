<?php
class tablecom{

    private string $Refcom;
    private string $date_pub;
    private string $date_mod;
    private string $contenue;    
    
    public function  __construct ($r,$p,$m,$c){
        $this-> Refcom=$r;
        $this->date_pub=$p;
        $this->date_mod=$m;
        $this->contenue=$c;
       
    }
    public function get_Refcom()
    {
        return $this->Refcom;
    }
    public function get_date_pub()
    {
        return $this->date_pub;
    }   
    public function get_date_mod()
    {
        return $this->date_mod;
    }
    public function get_contenue()
    {
        return $this->contenue;
    } 
    public function setdate_pub(string $date_pub){
        $this->date_pub=$date_pub;
    }
    public function setdate_mod(string $date_mod){
        $this->date_mod=$date_mod;
    }
    public function setcontenue(string $contenue){
        $this->contenue=$contenue;
    }

    public function load($data)
{
    $this->idM=$data['Refcom'];
    $this->nom=$data['date_pub'];
    $this->prenom=$data['date_mod'];
    $this->taille=$data['contenue'];
    

}

public function save()
{
    $Com = new tablecomC();
   //$errors = [];

$Com->modifierCom($this,$this->Refcom);
}
}
?>