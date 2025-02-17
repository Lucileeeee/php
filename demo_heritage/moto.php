<?php
//extends = héritage
class Moto extends Vehicule{
    //Attribut
    private ?string $guidon ;

    //Constructeur
    public function __construct($guidon){
        $this->guidon = $guidon;
    }

    //GETTER ET SETTER
    public function getGuidon():?string{
        return $this->guidon;
    }

    public function setGuidon(?string $newGuidon):Moto{
        $this->guidon = $newGuidon;
        return $this;
    }

    //METHODE
    //polymorphisme
    public function accelerer(?int $newVitesse):void{
        echo "<br>Non je ne veux pas accélerer !";
    }
}