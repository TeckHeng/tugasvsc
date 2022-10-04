<?php

class newconstrutor
{
 //deklarasi data member variabel
 public $name, $level;

 public function __construct($name,$level)
 {
    $this->name = $name;
    $this->level = $level;
 }

}

 $obj = new newconstrutor("new kontstra", "easy");

echo "name consturtor". $obj->name . "<br>";
echo "easy dek" . $obj->level ;

