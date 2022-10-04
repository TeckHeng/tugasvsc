<?php
include 'pengisian.php';
class kendaraan implements pengisian
{
    public function getName()
    {
    echo "ini dari interface fuel";
    }

}
// inisialisasi class objek
$kendaran = new kendaraan();

echo $kendaraan->getName();
