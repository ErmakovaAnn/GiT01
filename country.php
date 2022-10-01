<?php
class Country{
    public function __construct(
        private string $country,
        private string $domain, 
        private string $phonecod)
        {
            try {
                $this->validateCountry();
                $this->validatePhoneCode();
                $this->validateDomain();
            }
        }

    public function getCountry() : string
    {
        return $this->country;
    }
    public function getDomain() : string
    {
        return $this->domain;
    }
    public function getPhonecod() : Date
    {
        return $this->phonecod;
    }
}
