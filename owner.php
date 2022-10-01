<?php
class Owner{
    private ?string $middlename = null;

    public function __construct(
        private string $name,
        private string $surname, 
        private string $number,
        private string $email){
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function getSurname() : string
    {
        return $this->surname;
    }
    public function getMiddleName() : ?string
    {
        return $this->middlename;
    }
    public function setMiddleName(string $middlename) : void
    {
        $this->middlename = $middlename;
    }
    public function getNumber() : string
    {
        return $this->number;
    }
    public function getEmail() : Date
    {
        return $this->email;
    }
}
