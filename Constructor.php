<?php

class Construtor
{
    //deklarasi variable
    public $judul;
    public $level;

    public function __construct($judul, $level)
    {
        $this->judul = $judul;
        $this->level = $level;
    }
}

$obj = new Construtor(judul: "Constructor", level: "medium");

echo "Nama Class: " . $obj->judul . "<br>";
echo "level: " . $obj->level ;
