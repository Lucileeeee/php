<?php
//Ma Classe abstraite
abstract class AbstractPersonnage{
    //Attribut
    private ?string $nom;
    private ?InterfaceArme $comportementArme; 
    private ?string $type;

    //Constructeur
    public function __construct(?string $nom, ?InterfaceArme $comportementArme, ?string $type){
        $this->nom = $nom;
        $this->comportementArme = $comportementArme;
        $this->type = $type;
    }

    //GETTER ET SETTER
    public function getNom():string{
        return $this->nom;
    }
    public function setNom(?string $nom):?AbstractPersonnage{
        $this->nom = $nom;
        return $this;
    }
    public function getComportementArme():?InterfaceArme{
        return $this->comportementArme;
    }
    public function setComportementArme(?InterfaceArme $comportementArme):?AbstractPersonnage{
        $this->comportementArme = $comportementArme;
        return $this;
    }
    public function getType():string{
        return $this->type;
    }
    public function setType(?string $newType):?AbstractPersonnage{
        $this->type = $newType;
        return $this;
    }
    public function attaquer(){
        var_dump($this->getComportementArme()) ;
        echo  'Type de Perso :' . $this->getType();
        if($this->getType() === 'magicien' && $this->getComportementArme($this->getType()) === 'ProjectileMagique'){
            //on peut attaquer avec
        } else {
            $this->getComportementArme()->attaquer();
        }
    } 

    //METHOD
    public abstract function afficher():void;

    
}