<?php

class parentclass
{
 public function __construct(public $nameclass = "parentclass" , public $level = "easy")
 {
    
 }
}
class childclass extends parentclass
{

}
$parentclass = new parentclass();

echo $parentclass->nameclass ;
echo $parentclass->level . "<hr>";

$childclass = new childclass();

echo $childclass->nameclass ;
echo $childclass->level ;