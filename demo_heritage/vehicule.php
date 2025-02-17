<?php
class Vehicule{
    //Attribut
    private ?string $nomVehicule;
    private ?int $nbrRoue;
    private ?string $couleur;
    private ?string $proprietaire;
    private ?int $vitesseMax = 250;
    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nomVehicule, ?int $nbrRoue,  ?int $vitesseMax){
        $this->nomVehicule = $nomVehicule;
        $this->nbrRoue = $nbrRoue;
        $this->vitesseMax = $vitesseMax;
    }
    //GETTER ET SETTER
    public function getNom():?string{
        return $this->nomVehicule;
    }
    public function getNbrRoue():?int{
        return $this->nbrRoue;
    }
    public function getProprietaire():?string{
        return $this->proprietaire;
    }
    public function getVitesseMax():?int{
        return $this->vitesseMax;
    }
    public function setNbrRoue(?int $newNbrRoue):Vehicule{
        $this->nbrRoue = $newNbrRoue;
        return $this;
    }
    public function setCouleur(?string $newCouleur):Vehicule{
        $this->couleur = $newCouleur;
        return $this;
    }
    public function setVitesseMax(?int $newVitesseMax):Vehicule{
        $this->vitesseMax = $newVitesseMax;
        return $this;
    }
    public function SetNom(?string $newNomVehicule):self{
        $this->nomVehicule = $newNomVehicule;
        return $this;
    }
    //METHODE
    public function accelerer(?int $newVitesse):void{
        $this->setVitesseMax(($this->getVitesseMax() + $newVitesse));
        echo '<br>Je file maintenant à '.$this->getVitesseMax().' km/h !';
    }
    public function boost():void{
        $this->setVitesseMax(($this->getVitesseMax() + 50));
        echo '<br>Je Viens de Booster ma vitesse ';
    }
    public function detect():void{
        if($this->getNbrRoue() === 2){
            echo 'Moto';
        } elseif ($this->getNbrRoue() === 4){
            echo 'Voiture';
        }
    }
    public function plusRapide(Vehicule $vehicule):string{
        if($this->getVitesseMax() > $vehicule->getVitesseMax()){
            return $this->getNom();
        } else if ($this->getVitesseMax() < $vehicule->getVitesseMax()) {
            return $vehicule->getNom();
        } else {
            return 'Les deux véhicules vont à la même allure';
        }
    }
}