<?php
include "fuel.php";
class kendaraan implements pengisian {

public function getName()
    {
    echo "ini dari interface fuel";
  
    }

}
$kendaraan = new kendaraan ();

echo $kendaraan->getName();





