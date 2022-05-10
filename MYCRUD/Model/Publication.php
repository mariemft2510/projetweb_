<?php
	class Publication{
		
		private $numan=null;
		private $typepublication=null;
	
		
		function __construct($numan,$typepublication){
			
			$this->numan=$numan;
			$this->typepublication=$typepublication;
			
		}
		
		function getnuman(){
			return $this->numan;
		}
		function gettypepublication(){
			return $this->typepublication;
		}
		
		
		
		function setnuman(string $numan){
			$this->numan=$numan;
		}
		function settypepublication(string $typepublication){
			$this->typepublication=$typepublication;
		}
		
		
	}


?>