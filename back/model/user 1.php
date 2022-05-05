<?php
class user{

    private int $experience;
    private string $typeform;
    
    
    
    public function  __construct ($a,$b){
        $this-> experience=$a;
        $this->typeform=$b;
        
    }
    public function get_experience()
    {
        return $this->experience;
    }
    public function get_typeform()
    {
        return $this->typeform;
    }   
    
    

    
}
?>