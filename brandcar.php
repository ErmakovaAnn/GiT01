<?php
class Brandcar
{
    public function __construct(
        private string $brandname,
        private Country $counrty, 
        private string $infoowner){
    }

    public function getBrandname() : string
    {
        return $this->brandname;
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
