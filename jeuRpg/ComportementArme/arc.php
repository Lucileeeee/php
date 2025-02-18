<?php

class Arc implements InterfaceArme{
    private ?int $munition;
    private ?string $type;

    public function attaquer():int{
        return 6;
       //todo changer 
    }
    public function afficher():void{
        echo "<p>Je suis un Arc </p>";
    }
    //getter setter
    public function getMunition():int{
        return $this->munition;
    }
    public function setMunition(?int $newMunition):self{
        $this->munition = $newMunition;
        return $this;
    }

    public function getType():string{
        return $this->type;
    }
    public function setType(?string $newType):self{
        $this->type = $newType;
        return $this;
    }
}