<?php
class AccountModel extends AbstractModel{
    //ATTRIBUTS:
    public ?int $id;
    private ?array $account;
    private ?string $email;
    //CONSTRUCT
    public function __construct(?int $id,?array $account,?string $email){
        $this->id = $id;
        $this->account = $account;
        $this->email = $email;
    }
    //GETTER ET SETTER 
    public function getId(): ?int { return $this->id;}
    public function setId(?int $id): self { $this->id = $id; return $this;}

    public function getAccount(): ?array { return $this->account; }
    public function setAccount(?array $account): self { $this->account = $account; return $this;}

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(?string $email): self { $this->email = $email; return $this;}
    
    //METHODES
    public function add():void{}
    public function update():void{}
    public function delete():void{}
    public function getAll():array|null{
        return [];
    }
    public function getById():array|null{
        return [];
    }
    public function getAccountByEmail():array|null{
        return [];
    }
}