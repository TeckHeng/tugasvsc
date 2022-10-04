<?php
//interface adalah antar muka
/* syarat:
 1.interface tidak boleh memiliki properties
 2.interface tidak boleh memiliki code body
 3.interface hanya boleh memilikiassign function
 4.type akses modifier hanya bisa public
 */
interface pengisian {
    // public $type;

public function getname($type = "pertalite"):string;

}
