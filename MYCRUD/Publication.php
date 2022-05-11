<?php
include_once '../Controller/PublicationC.php';
	class Publication{
        public string $numan;
		public string $typepublication;
		

		
		function __construct($numan,$typepublication){
			$this->numan=$numan;
			$this->typepublication=$typepublication;
        }   
        public function getnuman(){
			return $this->numan;

		}
        public function setnuman(int $numan){
			$this->numan=$numan;
        }
        public function gettypepublication(){
			return $this->typepublication;
	
		}
    public function settypepublication(string $typepublication){
			$this->typepublication=$typepublication;
		}
      
	

public function load($data)
{
    $this->numan=$data['numan'];
    $this->typepublication=$data['typepublication'];
    

}

public function save()
{
    $PubC = new PublicationC();
   //$errors = [];

$PubC->modifierPublication($this,$this->numan);
}
}

?>