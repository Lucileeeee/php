<?php

class Epee implements InterfaceArme{
    private ?int $durabilite;
    private ?string $type;

    public function arme():void{
        echo "<p>Je suis une épee </p>";
    }
    //getter setter
    public function getDurabilite():int{
        return $this->durabilite;
    }
    public function setDurabilite(?int $newDurabilite):self{
        $this->durabilite = $newDurabilite;
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