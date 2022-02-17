<?php


namespace App\classes;


class Example extends Person
{
    public $firstName;
    protected $middleName;
    private $lastName;
    public $firstNumber = 10;
    protected $secondNumber = 20;
    private $lastNumber = 30;

    public function index(){
    //  echo $this->firstName;
//
//        $this->firstName = "Santo";
//        $this->firstName = "Shila";
//        $x ='bd';
//        $x = 10;
//        $x = 10.34;
//        $x = true;
//        echo gettype($x);
//
////        echo gettype($this->firstName);
//        echo $this->firstName;

        $this->firstName = "MD.";
        echo $this->firstName;

    }

    public function methodOne()
    {
        $this->middleName = "Habibur";
       echo $this->middleName;
    }

    public function methodTwo()
    {
        $this->lastName = "Rahman";
        echo $this->lastName;
    }

    public function methodThree(){
        $this->district();
        $this->division();
        $this->xy();
    }
}