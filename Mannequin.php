<?php
include_once '../Controller/MannequinC.php';
	class Mannequin{
		public int $idM;
		public string $nom;
		public string $prenom;
	    public string  $taille;
		public string $poids;
		public string $age;

		
		function __construct($idM, $nom, $prenom, $taille, $poids, $age){
			$this->idM=$idM;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->taille=$taille;
			$this->poids=$poids;
			$this->age=$age;
		}
        public function getidM(){
			return $this->idM;
		}
    public function getNom(){
			return $this->nom;
		}
    public function getPrenom(){
			return $this->prenom;
		}
    public function gettaille(){
			return $this->taille;
		}
    public function getpoids(){
			return $this->poids;
		}
    public function getage(){
			return $this->age;
		}
    public function setNom(string $nom){
			$this->nom=$nom;
		}
    public function setPrenom(string $prenom){
			$this->prenom=$prenom;
		}
    public function settaille(string $taille){
			$this->taille=$taille;
		}
    public function setpoids(string $poids){
			$this->poids=$poids;
		}
    public function setage(string $age){
			$this->age=$age;
		}
		

public function load($data)
{
    $this->idM=$data['idM'];
    $this->nom=$data['nom'];
    $this->prenom=$data['prenom'];
    $this->taille=$data['taille'];
    $this->poids=$data['poids'];
    $this->age=$data['age'];

}

public function save()
{
    $ManC = new MannequinC();
   //$errors = [];

$ManC->modifierMannequin($this,$this->idM);
}
}

?>