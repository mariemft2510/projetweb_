<?php
	class Services{
		private $idt=null;
		private $numan=null;
		private $evaluation=null;
		private $datetr=null;
		private $prix=null;
		
		function __construct($idt, $numan,$evaluation,$datetr, $prix){
			$this->idt=$idt;
			$this->numan=$numan;
			$this->evaluation=$evaluation;
			$this->datetr=$datetr;
			$this->prix=$prix;
		}
		function getidt(){
			return $this->idt;
		}
		function getnuman(){
			return $this->numan;
		}
		function getevaluation(){
			return $this->evaluation;
		}
		function getdatetr(){
			return $this->datetr;
		}
		function getprix(){
			return $this->prix;
		}
		
		function setidt(string $idt){
			$this->idt=$idt;
		}
		function setnuman(string $numan){
			$this->numan=$numan;
		}
		function setevaluation(string $evaluation){
			$this->evaluation=$evaluation;
		}
		function setdatetr(string $datetr){
			$this->datetr=$datetr;
		}
		function setprix(string $prix){
			$this->prix=$prix;
		}
		
	}


?>