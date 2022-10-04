<?php

class fungsi
{
    public function __construct(public $name ,public $numb)
    {
        
    }
    public function title():void
    {
        echo "belajar fungsi";
    }

    public function getparameter($testparameter){
        echo $testparameter;
    }
    public function getname(){
        return $this->name;
        
    }

    public function perkalian($numb_a = "5", $numb_b = "6"){
        return $numb_a * $numb_b;
       
    }       
}


$obj = new fungsi(name: "lov u" , numb: "bro");
echo $obj->name . "<br>";
echo $obj->numb . "<br>";
echo $obj->getparameter(testparameter: "pls love me back") . "<br>";
echo $obj->perkalian(6 , 5 );