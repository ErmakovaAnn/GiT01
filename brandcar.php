<?php
class Brandcar
{
    public function __construct(
        private string $name,
        private Country $counrty, 
        private string $infoowner){
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function getBrandcounrty() : string
    {
        return $this->brandcounrty;
    }
    public function getInfoowner() : string
    {
        return $this->infoowner;
    }
}
