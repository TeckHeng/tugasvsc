<?php


class parentclass
{
public $name;

public function __construct($name)
{
$this->name = $name;
}

public function display()
{
echo "Nama : " . $this->name;
}
}

$produk = new parentclass("Ini Class Produk");

echo $produk->display();