<?php 

class info{

public $name = "nazmul hasan";
public $cell = "01686983612";
public $address = "mirpur-1";

public function all_info(){

    return $this->name.$this->cell.$this->address;
}

public function update_data($name,$cell,$address){

    $this->name=$name;
    $this->cell=$cell;
    $this->address=$address;

}
}

$person_data_info = new info();

$person_data_info->update_data("hridoy","354654","dhaka");

$person_data_info-> all_info();


?>
