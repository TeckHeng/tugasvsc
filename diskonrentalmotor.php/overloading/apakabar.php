<?php
include 'selamatpagi.php';
class apakabar extends selamatpagi{
    public function apakabar(){
        echo $this->selamatpagi() .  'apakabar';
    }
}