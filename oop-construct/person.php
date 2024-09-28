<?php 

class person_info{

public $name;
public $cell;
public $address;

public function __construct($name,$cell,$address){

    $this->name=$name;
    $this->cell=$cell;
    $this->address=$address;
}

public function personinfo(){

    return $this->name. "" .$this->cell. "".$this->address;
}


}

$all_info = new person_info("nazmul","46546","mirpur");

$all_info -> personinfo();



?>