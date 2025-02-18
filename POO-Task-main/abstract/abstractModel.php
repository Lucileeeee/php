<?php

abstract class AbstractModel{
    private ?PDO $BDD;

    public function __construct(?PDO $BDD){
        $this->BDD = $BDD;
    }
    abstract function add():void;
    abstract function update():void;
    abstract function delete():void;
    abstract function getAll():array|null;
    abstract function getById():array|null;
}