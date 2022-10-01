<?php
use \Country;

class Model{
    public function __construct(
        private string $name,
        private Country $country,
        private string $specifications){
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function getCountry() : string
    {
        return $this->country;
    }
    public function getSpecifications() : Date
    {
        return $this->specifications;
    }
}
