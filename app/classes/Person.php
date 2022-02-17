<?php


namespace App\classes;


class Person
{
    public $district = "Savar";
    protected $division = "Dhaka";
    private $country = "Bangladesh";

    public function division()
    {
        echo " Karwanbazar";
    }
    protected function district()
    {
        echo " Dhaka";
    }
    private function country()
    {
        echo " Bangladesh";
    }

    public function xy(){
        $this->country();
    }
}