<?php

class ParentClass
    {
        public function __construct(
        public $nameclass,
         public $level)
            {
    
            }
        
    }
    class ChildClass extends ParentClass
    {
        
    }
    
    $parentClass = new ParentClass(nameclass: "parentClass", level: "easy");
    
    $childClass = new ChildClass(nameclass: "childClass", level: "hard");
    
    echo $parentClass->nameclass . "<br>" ;
    echo $parentClass->level . "<hr>" ;
    
    echo $childClass->nameclass . "<br>";
    echo $childClass->level ;
/* Output
parentClass
easy
childClass
hard 
*/ 
        