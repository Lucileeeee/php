<?php

class ProjectileMagique implements InterfaceArme{
    private ?string $type;
//todo renomer les function 'arme' en 'attaquer' et faire code deans
    public function attaquer():int{
        return 6;
        //todo changer 
    }
    public function afficher():void{
        echo "<p>Je suis un Projectile Magique </p>";
    }
    //getter setter
    public function getType():string{
        return $this->type;
    }
    public function setType(?string $newType):self{
        $this->type = $newType;
        return $this;
    }
}