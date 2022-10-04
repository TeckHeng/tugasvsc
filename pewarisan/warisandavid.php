<?php

class parentclass
{
 public function __construct(public $nameclass  , public $level )
 {
    
 }
}
class childclass extends parentclass
{

}
$parentclass = new parentclass(nameclass: "parentclass" , level: "easy");

echo $parentclass->nameclass . "<br>";
echo $parentclass->level . "<hr>";

$childclass = new childclass(nameclass: "childclass" , level:"hard");

echo $childclass->nameclass . "<br>";
echo $childclass->level ; 