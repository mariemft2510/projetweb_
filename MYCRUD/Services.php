<?php
include_once '../Controller/ServicesC.php';
	class Services{
		public int $idt;
		public string $numan;
		public string $evaluation;
	    public string  $datetr;
		public string $prix;

		
		function __construct($idt, $numan, $evaluation, $datetr,  $prix){
			$this->idt=$idt;
			$this->numan=$numan;
			$this->evaluation=$evaluation;
			$this->datetr=$datetr;
			$this->prix=$prix;
		}
        public function getidt(){
			return $this->idt;
		}
    public function getnuman(){
			return $this->numan;
		}
    public function getevaluation(){
			return $this->evaluation;
		}
    public function getdatetr(){
			return $this->datetr;
		}
    
    public function getprix(){
			return $this->prix;
		}
    public function setnuman(string $numan){
			$this->numan=$numan;
		}
    public function setevaluation(string $evaluation){
			$this->evaluation=$evaluation;
		}
    public function setdatetr(string $datetr){
			$this->datetr=$datetr;
		}
    
    public function setprix(string $prix){
			$this->prix=$prix;
		}
		

public function load($data)
{
    $this->idt=$data['idt'];
    $this->numan=$data['numan'];
    $this->evaluation=$data['evaluation'];
    $this->datetr=$data['datetr'];
    $this->prix=$data['prix'];

}

public function save()
{
    $SerC = new ServicesC();
   //$errors = [];

$SerC->modifierServices($this,$this->idt);
}
}

?>