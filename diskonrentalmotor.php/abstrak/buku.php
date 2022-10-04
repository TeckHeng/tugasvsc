<?php

include 'produk.php';

class buku extends produk{
    public functIon sayhello($name):void
    {
        echo "hello saya adlah {$name}";
    }
}


$obj = new buku();
echo $obj->sayhello(name: "hai syg");