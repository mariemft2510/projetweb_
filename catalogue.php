<?php
include_once '../Controller/catalogueC.php';
	class catalogue{
		public int $id;
        public int $Mannequin;
		public string $experience;
		

		
		function __construct($id,$Mannequin,$experience){
			$this->id=$id;
            $this->Mannequin=$Mannequin;
			$this->experience=$experience;
        }   
        public function getid(){
			return $this->id;

		}
        public function setid(int $id){
			$this->id=$id;
        }
        public function getexperience(){
			return $this->experience;
	
		}
    public function setexperience(string $experience){
			$this->experience=$experience;
		}
        public function getMannequin(){
			return $this->Mannequin;
	
		}
    public function setMannequin(string $Mannequin){
			$this->Mannequin=$Mannequin;
		}
   
	

public function load($data)
{
    $this->id=$data['id'];
    $this->Mannequin=$data['Mannequin'];
    $this->experience=$data['experience'];
    

}

public function save()
{
    $catC = new catalogueC();
   //$errors = [];

$catC->modifiercatalogue($this,$this->id);
}
}

?>