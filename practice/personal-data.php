<?php 

class emp_info{

public $name;
public $cell;
public $gmail;


public function __construct($name,$cell,$gmail){

    $this->name=$name;
    $this->cell=$cell;
    $this->gmail=$gmail;
}


public function data(){

    return $this->name.$this->cell.$this->gmail;
}

}


?>