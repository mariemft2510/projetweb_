<?php
class tablean{

    private string $CodeAn; 
    private string $TypeAn; 
    private string $TitreAn; 
    private string $DateAn; 
    private string $ContenueAn; 
    
    
    public function  __construct ($c,$t,$i,$d,$o){
        $this-> CodeAn=$c;
        $this->TypeAn=$t;
        $this->TitreAn=$i;
        $this->DateAn=$d;
        $this->ContenueAn=$o;
       
    }
    public function get_CodeAn()
    {
        return $this->CodeAn;
    }
    public function get_TypeAn()
    {
        return $this->TypeAn;
    }   
    public function get_TitreAn()
    {
        return $this->TitreAn;
    }
    public function get_DateAn()
    {
        return $this->DateAn;
    }
    public function get_ContenueAn()
    {
        return $this->ContenueAn;
    } 
    public function setTypeAn(string $TypeAn){
        $this->TypeAn=$TypeAn;
    }
    public function setTitreAn(string $TitreAn){
        $this->TitreAn=$TitreAn;
    }
    public function setDateAn(string $DateAn){
        $this->DateAn=$DateAn;
    }
    public function setContenueAn(string $ContenueAn){
        $this->ContenueAn=$ContenueAn;
    } 

    public function load($data)
{
    $this->idM=$data['CodeAn'];
    $this->nom=$data['TypeAn'];
    $this->prenom=$data['TitreAn'];
    $this->taille=$data['DateAn'];
    $this->poids=$data['ContenueAn'];

}

public function save()
{
    $Ann = new tableanC();
   //$errors = [];

$Ann->modifierAn($this,$this->CodeAn);
}

    

    
}
?>