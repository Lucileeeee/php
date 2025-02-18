<?php
class Magicien extends AbstractPersonnage {
    private ?int $mana;

    public function afficher():void{
        echo "<p>Je suis un GRAND Magicien.</p>";
    }
    //getter setter
    public function getMana():int{
        return $this->mana;
    }
    public function setMana(?int $newMana):self{
        $this->mana = $newMana;
        return $this;
    }

    public function attaquer():void{
        
    }
}