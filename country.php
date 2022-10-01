<?php
class Country{
    public function __construct(
        private string $name,
        private string $domain, 
        private string $phoneCode){
        }

    public function getName() : string
    {
        return $this->name;
    }
    public function getDomain() : string
    {
        return $this->domain;
    }
    public function getPhonecode() : Date
    {
        return $this->phoneCode;
    }
}
