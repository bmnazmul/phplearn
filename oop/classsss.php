<?php 

class infoo{

public $name= "hasan";
public $cell ="01685495455";


public function address(){
    return $this->name ." ". $this->cell;
}

public function update_data($name,$cell){

    $this->name=$name;
    $this->cell=$cell;
}
}

// $all_data = new infoo;

// // echo $all_data->name;

// echo $all_data -> update_data("nazmul","5465465");

// echo $all_data ->address();



?>