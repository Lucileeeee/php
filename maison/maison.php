<?php

class Maison{
    //Attribut
    private ?string $nom;
    private ?int $longueur;
    private ?int $largeur;
    private ?int $nbrEtage;

//!
    //Constructeur
    //De base, PHP possède déjà une méthode magique qui s'appelle __construc(), et servant à instancier des objets sans donner de valeur à leur attribut
    //Je peux cependant redéfinir le comportement du constructeur au sein d'un classe
    public function __construct(?string $nom , ?int $longueur, ?int $largeur, ?int $nbrEtage){
        $this->nom = $nom;
        $this->longueur = $longueur;
        $this->largeur = $largeur;
        $this->nbrEtage = $nbrEtage;
    }

    //GETTER ET SETTER
    public function getNom():?string{
        return $this->nom;
    }

    public function getLongueur():?int{
        return $this->longueur;
    }

    public function getLargeur():?int{
        return $this->largeur;
    }

    public function getNbrEtage():?int{
        return $this->nbrEtage;
    }

    public function setNom(?string $newNom):self{
        $this->nom = $newNom;
        return $this;
    }

    public function setLongueur(?int $newLongueur):self{
        $this->longueur = $newLongueur;
        return $this;
    }

    public function setLargeur(?int $newLargeur):self{
        $this->largeur = $newLargeur;
        return $this;
    }
    public function setNbrEtage(?int $newNbrEtage):self{
        $this->nbrEtage = $newNbrEtage;
        return $this;
    }

    //METHODE
    public function surface():void{
        $result = ($this->getLargeur() * $this-> getLongueur() )* ($this->getNbrEtage()+1);
        echo '<br>Superficie de la maison'.$this->getNom().'est égale à : '.$result . ' m2';
    }
}
