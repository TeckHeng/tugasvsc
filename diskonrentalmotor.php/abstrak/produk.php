<?php

abstract class produk {

    public $harga = 1000;

    public function getharga(){
        return $this->harga;
    }
    abstract public function sayhello ($name):void;
}


