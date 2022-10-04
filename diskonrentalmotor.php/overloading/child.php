<?php

include 'parentclass.php';
class child extends parentclass
{
public static $title;
public static $harga;

public function __construct($title = "love u" , $harga = 5000)
{
self::$title = $title;
self::$harga = $harga;
}

public function childDisplay()
{
parent::display();                                                                                                                                                                                                                                                                                                                                                                                                                         
return self::$title;
}

public function Ehek()
{
return self::$harga;
}
}

$buku = new child();

echo $buku->childDisplay() . "<br>";
echo "Harga: " . $buku->Ehek();