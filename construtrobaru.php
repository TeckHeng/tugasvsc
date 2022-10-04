<?php

class construtrobaru
{
    public function __construct(public $title, public $level)
    {
        
    }
}

$obj = new construtrobaru(title: "konsbaru", level: "oala");

echo  $obj->title . "<br>";
echo  $obj->level ;
