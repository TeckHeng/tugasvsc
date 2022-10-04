<?php

class ngasal
{
    public function carinilaiganjilgenap($inputnilai){
        if ($inputnilai %= 2) {
            echo "$inputnilai adalah bilangan genap";
        }else{
            echo "$inputnilai adalah bilagngan ganjil";
        }
    }

}
$obj = new ngasal();
echo $obj->carinilaiganjilgenap(inputnilai: 0);