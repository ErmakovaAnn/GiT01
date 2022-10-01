<?php
use \Owner\Country\Model\Brandcar;

class Avto
{
    public function __construct(
        private Brandcar $brand,
        private Model $model, 
        private Date $date){
    }

    public function getBrand() : string
    {
        return $this->brand;
    }
    public function getModel() : string
    {
        return $this->model;
    }
    public function getDate() : Date
    {
        return $this->date;
    }
}
